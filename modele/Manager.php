<?php


class Manager 
{
    private static $pdo = null;
    
    protected function dbConnect()
    {
        require_once 'infoBDD.inc.php';

        try
        {
            $PARAM_hote= $_ENV["hote"]; 
            $PARAM_port= $_ENV["port"];
            $PARAM_nom_bd= $_ENV["nom_bdd"]; 
            $PARAM_utilisateur= $_ENV["nom_utilisateur"];
            $PARAM_mot_passe= $_ENV["mdp"];

            $conn = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
            $conn->exec('SET NAMES utf8');
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
