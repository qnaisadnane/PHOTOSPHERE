<?php


Trait TimestampableTrait{

     protected DateTimeInterface createdAt;
     protected DateTimeInterface updatedAt;

   
     public function initializeTimestamps():void{
        $now = new DateTime();
        if($this->createdAt === null){
         $this->createdAt = $now;
        }
     }
     
     public function updateTimestamps():void{
         $this->updatedAt = new DateTime();
      if($this->createdAt === null){
         $this->createdAt = $this->updatedAt;
        }
     }

}