<?php

Class User{
   protected  id_user;
   protected  name ;
   protected  email;
   protected  password;
   protected  createdAt;
   protected  lastLogin;
   protected  bio;
   protected  profilePicture;

   public function __construct( $id_user, $name , $email , $password , $createdAt , $lastLogin , $bio , $profilePicture){
    $this->id_user = $id_user;
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->createdAt = $createdAt;
    $this->lastLogin = $lastLogin;
    $this->bio = $bio;
    $this->profilePicture = $profilePicture;
   }

   public function getIdUser(){
    return $this->id_user;
   }
   public function getName(){
    return $this->name;
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
   public function getProfilePicture(){
    return $this->profilePicture;
   }

}