<?php 

require_once 'basicUser.php';

Class ProUser extends basicUser{
    private $subscriptionStart;
    private $subscriptionEnd;

    public function __construct($id_user, $username , $email , $password  , $bio , $role , $adresse, $uploadCount , $subscriptionStart , $subscriptionEnd){
        parent::__construct($id_user, $username , $email , $password  , $bio , $role , $adresse , $uploadCount);
        $this->subscriptionStart = $subscriptionStart;
        $this->subscriptionEnd = $subscriptionEnd;
    }

    public function getSubscriptionStart(){
        return $this->subscriptionStart;
    }
    public function getSubscriptionEnd(){
        return $this->subscriptionEnd;
    }
}

?>