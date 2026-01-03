<?php 

require_once'./user.php';

Class Moderator extends User{
    protected $string;

    public function __construct($id_user, $name , $email , $password , $createdAt , $lastLogin , $bio , $profilePicture , $level){
        parent::__construct($id_user, $name , $email , $password , $createdAt , $lastLogin , $bio , $profilePicture);
        $this->level=$level;
    }

    public function getLevel(){
        return $this->level;
    }
}