<?php

require_once'./user.php';

Class Tag{
    private $id_tag;
    private $name;
    private $postCount;

    public function __construct($id_tag, $name , $postCount){
        $this->id_tag=$id_tag;
        $this->name=$name;
        $this->postCount=$postCount;
        
    }

    public function getIdTag(){
        return $this->id_tag;
    }
    public function getName(){
        return $this->name;
    }
    public function getPostCount(){
        return $this->postCount;
    }
    
}