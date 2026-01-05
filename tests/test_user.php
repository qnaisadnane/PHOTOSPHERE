<?php

require_once __DIR__ . '/entities/user.php';

try{
    $user = new User(1, 'test', 'test@test.com', 'pass', 'Bio', 'user', 'Paris');
    echo 'errooooooooooooor'; 
}catch(Error $e){
    echo "succes"; 
}

?>