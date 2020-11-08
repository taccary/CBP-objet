<?php

class Liaison {
    private $code;
    private $codeSecteur;
    private $distance;
    private $idPortDepart;
    private $idPortArrivee;
    
    public function __construct($donnees) 
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
                
            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
            // On appelle le setter.
            $this->$method($value);
            }
        }
    }
    
    public function getCode() {
        return $this->code;
    }

    public function getCodeSecteur() {
        return $this->codeSecteur;
    }

    public function getDistance() {
        return $this->distance;
    }

    public function getIdPortDepart() {
        return $this->idPortDepart;
    }

    public function getIdPortArrivee() {
        return $this->idPortArrivee;
    }

    public function setCode($code): void {
        $this->code = $code;
    }

    public function setCodeSecteur($codeSecteur): void {
        $this->codeSecteur = $codeSecteur;
    }

    public function setDistance($distance): void {
        $this->distance = $distance;
    }

    public function setIdPortDepart($idPortDepart): void {
        $this->idPortDepart = $idPortDepart;
    }

    public function setIdPortArrivee($idPortArrivee): void {
        $this->idPortArrivee = $idPortArrivee;
    }

}
