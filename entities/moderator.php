<?php 

require_once'./user.php';

Class Moderator extends User{
    protected $level;

    public function __construct($id_user, $username , $email , $password , $createdAt , $lastLogin , $bio , $role , $adresse , $level){
        parent::__construct($id_user, $username , $email , $password , $createdAt , $lastLogin , $bio , $role , $adresse);
        $this->level=$level;
    }

    public function getLevel(){
        return $this->level;
    }
}