<?php

require_once("modele/Manager.php");
require_once("modele/Port.php");

class PortManager extends Manager
{
    public function get($id) //instancie un objet port
    {
        $id = (int) $id;
        $q = $this->dbConnect()->query('SELECT id, nom FROM port WHERE id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new Port($donnees);
    }
  
    public function getList() //instancie une collection d'objets ports
    {
        $ports = [];
        $q = $this->dbConnect()->query('SELECT id, nom FROM port ORDER BY nom');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $ports[$donnees['id']] = new Port($donnees);
        }
        return $ports;
    }

}
