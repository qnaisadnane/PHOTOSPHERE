<?php 

require_once'./user.php';

Class BasicUser extends User{
    protected $uploadCount;

    public function __construct($id_user, $name , $email , $password , $createdAt , $lastLogin , $bio , $profilePicture , $uploadCount){
        parent::__construct($id_user, $name , $email , $password , $createdAt , $lastLogin , $bio , $profilePicture , $uploadCount);
        $this->uploadCount=$uploadCount;
    }

    public function getUploadCount(){
        return $this->uploadCount;
    }
}