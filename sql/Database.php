<?php

class Database
{
    private static ?PDO $connection = null;
    
    public static function getConnection()
    {
        if (self::$connection === null) {
            $host = 'localhost';
            $dbname = 'photosphere';
            $username = 'root';
            $password = '';
            try {
                self::$connection = new PDO("mysql:host=$host;port=3306;dbname=$dbname;", $username, $password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "not working";
                die("Erreur connexion : " . $e->getMessage());
            } catch (PDOException $e) {
                die("Erreur connexion : " . $e->getMessage());
            }
        }
        
        return self::$connection;
    }
}

