<?php

require_once __DIR__ . '/repositories/Database.php';

Class PhotoRep{
     private PDO $db;

    public function __construct(PDO $database){
        $this->db=$database;
    }

    public function saveWithTags(array $photos , array $tags): int{

       if (count($tags) === 0) {
            throw new Exception("au moins 1 tag");
        }
        if (count($tags) > 10) {
            throw new Exception("max 10 tags");
        }
        
    try{
        $this->db->beginTransaction();
        
        $sql1="insert into (id_post, title , description , imagelink , fileSize , dimensions , state , viewCount , publishedAt , createdAt , updatedAt) 
        values(7,"sdcsdc" , "dcsdcsqqssssssssssssssssss" , "sdsefzefz", 40, 5 ,draft, 40,null ,null)";
        $this->db->exec($sql1);

        foreach($tags as $tag){
         $sql2 = "Select id_tag from tag where :id";
         $this->db->exec($sql2);
        }else{
         $sql3 = "INSERT INTO tags (name) VALUES ("edzed") ";
         $this->db->exec($sql3);  
        } 
        
        $sql4 = "INSERT INTO photo_tags (id_photo, id_tag) VALUES (:id_photo, :id_tag)";
         $this->db->exec($sql4);  
                

        $this->db->commit();
        }catch(Exception $e){
        $this->db->rollback();
        echo "erreur".$e->getMessage();
    }
    }
}
?>