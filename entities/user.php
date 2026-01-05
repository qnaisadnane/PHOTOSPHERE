<?php

abstract Class User{
   protected  $id_user;
   protected  $username;
   protected  $email;
   protected  $password;
   protected  $createdAt;
   protected  $lastLogin;
   protected  $bio;
   protected  $role;
   protected  $adresse;

   public function __construct($id_user, $username , $email , $password , $bio , $role , $adresse){
    $this->id_user = $id_user;
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
    $this->createdAt =  date('Y-m-d H:i:s');
    $this->lastLogin =  date('Y-m-d H:i:s');
    $this->bio = $bio;
    $this->role = $role;
    $this->adresse = $adresse;
   }

   public function getIdUser(){
    return $this->id_user;
   }
   public function getUserName(){
    return $this->username;
   }
   public function getEmail(){
    return $this->email;
   }
   public function getPassword(){
    return $this->password;
   }
   public function getCreatedAt(){
    return $this->createdAt;
   }
   public function getLastLogin(){
    return $this->lastLogin;
   }
   public function getBio(){
    return $this->bio;
   }
   public function getRole(){
    return $this->role;
   }
   public function getAdresse(){
    return $this->adresse;
   }
}

?>