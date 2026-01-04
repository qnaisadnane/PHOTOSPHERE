<?php 

require_once'./user.php';

Class BasicUser extends User{
    protected $uploadCount;

    public function __construct($id_user, $username , $email , $password , $createdAt , $lastLogin , $bio , $role , $adresse , $uploadCount){
        parent::__construct($id_user, $username , $email , $password , $createdAt , $lastLogin , $bio , $role , $adresse);
        $this->uploadCount=$uploadCount;
    }

    public function getUploadCount(){
        return $this->uploadCount;
    }
}