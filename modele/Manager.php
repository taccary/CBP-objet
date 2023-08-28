<?php


class Manager 
{
    private static $pdo = null;
    
    protected function dbConnect()
    {
        require_once 'infoBDD.inc.php';

        try
        {
            $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } 
        catch (PDOException $e) 
        {
            print "Erreur de connexion PDO ";
            die();
        }
    }

    // Return the current PDO if exists or create one otherwise
    protected function getPDO() 
    {
        if(!self::$pdo)
        {
            self::$pdo = $this->dbConnect();
        }
        return self::$pdo;
    }
    
}

?>
