<?php

 require_once __DIR__ . '/../repositories/Database.php';


Class PostRepository{

    private PDO $conn;

    public function __construct(){
    $db = new Database();
    $this->conn = $db->getConnection();
   }

   public function addComment(
    int $postId,
    int $userId,
    string $content,): int{
       $stmt = $this->conn->prepare("Insert into comment(user_id, post_id, content, status ) Values (?,?,?,?)");
       $stmt->execute([$userId,
            $postId,
            $content,
            $status
        ]);
    } 

}

?>