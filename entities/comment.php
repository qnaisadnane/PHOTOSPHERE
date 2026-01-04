<?php

require_once'./user.php';

Class Comment{
    private $id_comment;
    private $content;
    private $isArchive;
    private $createdAt;
    private $updatedAt;

    public function __construct($id_comment, $content , $isArchive , $createdAt , $updatedAt){
        $this->id_comment=$id_comment;
        $this->content=$content;
        $this->isArchive=$isArchive;
        $this->createdAt=$createdAt;
        $this->updatedAt=$updatedAt;
    }

    public function getIdComment(){
        return $this->id_comment;
    }
    public function getContent(){
        return $this->content;
    }
    public function getisArchive(){
        return $this->isArchive;
    }
    public function getCreatedAt(){
        return $this->createdAt;
    }
    public function getUpdatedAt(){
        return $this->updatedAt;
    }
}