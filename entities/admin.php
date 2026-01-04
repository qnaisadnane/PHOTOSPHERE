<?php 

require_once'./user.php';

Class Admin extends User{
    protected $isSuper;

    public function __construct($id_user, $username , $email , $password , $createdAt , $lastLogin , $bio , $role , $adresse, $isSuper){
        parent::__construct($id_user, $username , $email , $password , $createdAt , $lastLogin , $bio , $role , $adresse);
        $this->isSuper=$isSuper;
    }

    public function getIsSuper(){
        return $this->isSuper;
    }
}