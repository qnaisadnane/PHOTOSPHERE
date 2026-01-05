<?php 

require_once 'user.php';

Class Admin extends User{
    protected $isSuper;

    public function __construct($id_user, $username , $email , $password  , $bio , $role , $adresse, $isSuper){
        parent::__construct($id_user, $username , $email , $password  , $bio , $role , $adresse);
        $this->isSuper=$isSuper;
    }

    public function getIsSuper(){
        return $this->isSuper;
    }
  
    public function canCreatePrivateAlbum(): bool {
        return true;
    }
    
    public function canUploadPhoto(): bool {
        return true;
    }
    
    public function canManageUsers(): bool {
        return true;
    }
    
    public function canDeleteContent(): bool {
        return true;
    }
}
?>