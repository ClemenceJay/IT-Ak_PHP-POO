<?php

require_once ("Vehicule.php");

class Moto extends Vehicule {
    public int $cylindree;

    public function __construct(string $marque, string $modele, int $annee, int $kilometrage, string $dernierEntretien, int $cylindree)
    {
        parent::__construct($marque, $modele, $annee, $kilometrage,  $dernierEntretien);
        $this->cylindree = $cylindree;
    }

    public function afficherInfos() : string
    {
        return parent::afficherInfos()." - ".$this->cylindree."cm3 <br>";
    }
}