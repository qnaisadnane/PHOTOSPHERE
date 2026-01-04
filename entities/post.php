<?php

Class Post{
   private  $id_post;
   private  $title;
   private  $description;
   private  $imagelink;
   private  $fileSize;
   private  $dimensions;
   private  $state;
   private  $viewCount;
   private  $publishedAt;
   private  $createdAt;
   private  $updatedAt;

   public function __construct( $id_post, $title , $description , $imagelink , $fileSize , $dimensions , $state , $viewCount , $publishedAt , $createdAt , $updatedAt){
    $this->id_post = $id_post;
    $this->title = $title;
    $this->description = $description;
    $this->imagelink = $imagelink;
    $this->fileSize = $fileSize;
    $this->dimensions = $dimensions;
    $this->state = $state;
    $this->viewCount = $viewCount;
    $this->publishedAt = $publishedAt;
    $this->createdAt = $createdAt;
    $this->updatedAt = $updatedAt;
   }

   public function getIdPost(){
    return $this->id_post;
   }
   public function getTitle(){
    return $this->title;
   }
   public function getDescription(){
    return $this->description;
   }
   public function getImagelink(){
    return $this->imagelink;
   }
   public function getFileSize(){
       return $this->fileSize;
    }
    public function getDimensions(){
        return $this->dimensions;
    }
    public function getState(){
        return $this->state;
    }
    public function getViewCount(){
        return $this->viewCount;
    }
    public function getPublishedAt(){
        return $this->publishedAt;
    }
    public function getCreatedAt(){
     return $this->createdAt;
    }
    public function getUpdatedAt(){
     return $this->updatedAt;
    }

}