<?php

require_once("modele/Manager.php");
require_once("modele/Liaison.php");

class LiaisonManager extends Manager
{

    public function get($id) // récupère un objet liaison en fonction de son id
    {
        $id = (int) $id;

        $q = $this->dbConnect()->query('SELECT * FROM liaison WHERE id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new Liaison($donnees);
    }

    public function getList()
    {
        $liaisons = [];

        $q = $this->dbConnect()->query('SELECT * FROM liaison ORDER BY code');

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
        $liaisons[] = new Liaison($donnees);
        }

        return $liaisons;
    }

}
