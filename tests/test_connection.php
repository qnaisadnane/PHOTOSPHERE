<?php

require_once __DIR__ . "/../entities/user.php";

try{
    $user = new User(1, 'test', 'test@test.com', 'pass', 'Bio', 'user', 'Paris');
    echo 'errooooooooooooor'; 
}catch(Error $e){
    echo "succes"; 
}

?>

<?php


require_once __DIR__ . "/../repositories/Database.php";

try{
    $conn = Database::getConnection();

    if($conn instanceof PDO){
        echo "connection reussi";
    }

    $stmt = $conn->query('SELECT * FROM users');
    $version = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "connexion travaille";
} catch(PDOException $e){
    echo "erreur connection :" . $e->getMessage() . "\n";
    echo  " code err :" . $e->getCode() . "\n";
    echo "";
}
?>