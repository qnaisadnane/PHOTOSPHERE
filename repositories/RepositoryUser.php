<?php

Class UserRepository Implements RepositoryInterface{
   
    private Database $db;

    public function __construct(Database $dbconn){
        $this->db = $dbconn;
    }

    public function findByEmail(string $email) : ?User {
       $sql = "SELECT * From User where email = :email";
       $stmt = $this->db->getConnection()->prepare($sql);
       $stmt ->bindParam(":email" , $email);

       if($stmt->execute()){
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$userData) {return null;}

        return $this->createUserFromData($userData);

       }

       return null;

    }

    public function Save(User $user) :bool{
      if($this->$getId == 0){
        return $this->insertNewUser($user);
      }
      return false;
    }

      private function createUserFromData(array $userData): ?User {
        $userId = $userData['id_user'];
        $role = $userData['role'];

        $extraData = $this->fetchRoleData($role , $userId);

        $allData = array_merge($userData , $extraData);
    
        switch($role){
         case 'admin':
            return new Admin($allData);
        
        case 'pro':
           return new ProUser($allData);
    
        case 'basic':
            return new BasicUser($allData);
        default:
                return null;
        }
    }
       private function fetchRoleData(string $role, int $userId): array {
        $roleTables = [
            'admin' => 'Admin',
            'pro' => 'Pro_User',
            'basic' => 'Basic_User'
        ];
        
        $table = $roleTables[$role] ?? null;
        
        if (!$table) {
            return [];
        }
        
        $sql = "SELECT * FROM $table WHERE id_user = :userId";
        $statement = $this->database->getConnection()->prepare($sql);
        $statement->bindParam(":userId", $userId);
        $statement->execute();
        
        return $statement->fetch(PDO::FETCH_ASSOC) ?: [];
    } 

      private function insertNewUser(User $user): bool {
        $role = $this->determineUserRole($user);
        
        $userId = $this->insertIntoMainTable($user, $role);
        
        if (!$userId) {
            return false;
        }
        
        return $this->insertIntoRoleTable($user, $userId);
    } 

    private function determineUserRole(User $user): string {
        if ($user instanceof Admin) return 'admin';
        if ($user instanceof ProUser) return 'pro';
        if ($user instanceof Moderator) return 'moderator';
        return 'basic';
    }
    private function insertIntoMainTable(User $user, string $role): ?int {
        $sql = "INSERT INTO User (id_utilisateur, username, email, password, bio, role) 
                VALUES (:id_utilisateur, :username, :email, :password, :bio, :role)";
        $statement = $this->database->getConnection()->prepare($sql);
        $statement->bindParam(":id_utilisateur", $user->getIdUser());
        $statement->bindParam(":username", $user->getUsername());
        $statement->bindParam(":email", $user->getEmail());
        $statement->bindParam(":password", $user->getPassword());
        $statement->bindParam(":bio", $user->getBio());
        $statement->bindParam(":picture", $user->getProfilePicture());
        $statement->bindParam(":role", $role);
        
        if ($statement->execute()) {
            return $this->database->getConnection()->lastInsertId();
        }
        return null;
    }
    private function insertIntoRoleTable(User $user, int $userId): bool {
        $roleInserts = [
            'admin' => [
                'sql' => "INSERT INTO Admin (id_user, is_super) VALUES (:id, :isSuper)",
                'params' => [':isSuper' => $user->getIsSuper()]
            ],
            'basic' => [
                'sql' => "INSERT INTO Basic_User (id_user, upload_count) VALUES (:id, :uploadCount)",
                'params' => [':uploadCount' => $user->getUploadCount()]
            ],
            'pro' => [
                'sql' => "INSERT INTO Pro_User (id_user, subscription_start, subscription_end) 
                          VALUES (:id, :startDate, :endDate)",
                'params' => [
                    ':startDate' => $user->getSubscriptionStart(),
                    ':endDate' => $user->getSubscriptionEnd()
                ]
            ],
            'moderator' => [
                'sql' => "INSERT INTO Moderator (id_user, level) VALUES (:id, :level)",
                'params' => [':level' => $user->getLevel()]
            ]
        ];
        
        $role = $this->determineUserRole($user);
        
        if (!isset($roleInserts[$role])) {
            return false;
        }
        $insertInfo = $roleInserts[$role];
        $statement = $this->database->getConnection()->prepare($insertInfo['sql']);
        $statement->bindParam(":id", $userId);
        foreach ($insertInfo['params'] as $key => $value) {
            $statement->bindParam($key, $value);
        }
        return $statement->execute();
    }
}

?>