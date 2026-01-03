<?php 

require_once'./user.php';

Class Admin extends User{
    protected $isSuper;

    public function __construct($id_user, $name , $email , $password , $createdAt , $lastLogin , $bio , $profilePicture , $isSuper){
        parent::__construct($id_user, $name , $email , $password , $createdAt , $lastLogin , $bio , $profilePicture);
        $this->isSuper=$isSuper;
    }

    public function getIsSuper(){
        return $this->isSuper;
    }
}