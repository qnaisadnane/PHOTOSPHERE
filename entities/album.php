<?php

require_once'./user.php';

Class Album{
    private $id_album;
    private $name;
    private $isPublic;
    private $cover;
    private $photoCount;
    private $publishedAt;
    private $updatedAt;

    public function __construct($id_album, $name , $isPublic , $cover , $photoCount , $publishedAt , $updatedAt){
        $this->id_album=$id_album;
        $this->name=$name;
        $this->isPublic=$isPublic;
        $this->cover=$cover;
        $this->photoCount=$photoCount;
        $this->publishedAt=$publishedAt;
        $this->updatedAt=$updatedAt;
        
    }

    public function getIdAlbum(){
        return $this->id_album;
    }
    public function getName(){
        return $this->name;
    }
    public function getIsPublic(){
        return $this->isPublic;
    }
    public function getCover(){
        return $this->cover;
    }
    public function getPhotoCount(){
        return $this->photoCount;
    }
    public function getPublishedAt(){
        return $this->publishedAt;
    }
    public function getUpdatedAt(){
        return $this->updatedAt;
    }
    
}