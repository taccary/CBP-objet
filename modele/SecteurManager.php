<?php

require_once("modele/Manager.php");
require_once("modele/Secteur.php");

class SecteurManager extends Manager
{
    public function get($id) //instancie un objet secteur
    {
        $id = (int) $id;
        $q = $this->dbConnect()->query('SELECT id, nom FROM secteur WHERE id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new Secteur($donnees);
    }
  
    public function getList() //instancie une collection d'objets secteurs
    {
        $secteurs = [];
        $q = $this->dbConnect()->query('SELECT id, nom FROM secteur ORDER BY nom');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $secteurs[$donnees['id']] = new Secteur($donnees);
        }
        return $secteurs;
    }
   
    
}
