<?php

require_once("modele/Manager.php");
require_once("modele/Port.php");

class PortManager extends Manager
{
    public function get($id) //instancie un objet port
    {
        $id = (int) $id;
        $q = $this->_db->query('SELECT id, nom FROM port WHERE id = '.$id);
        //$cnx = getPDO();
        //$q = $cnx->prepare("SELECT nom FROM port WHERE id=:id");
        //$q->bindValue(':id', $id, PDO::PARAM_INT);
        //$q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new Port($donnees);
    }
  
    public function getList() //instancie une collection d'objets ports
    {
        $ports = [];
        $q = $this->dbConnect()->query('SELECT id, nom FROM port ORDER BY nom');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $ports[] = new Port($donnees);
        }
        return $ports;
    }
    
}
