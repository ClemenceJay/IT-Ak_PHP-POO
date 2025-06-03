<?php

require_once ("Vehicule.php");

class Voiture extends Vehicule {
    public int $nombrePortes;

    public function __construct(string $marque, string $modele, int $annee, int $kilometrage, string $dernierEntretien, int $nombrePortes)
    {
        parent::__construct($marque, $modele, $annee, $kilometrage, $dernierEntretien);
        $this->nombrePortes = $nombrePortes;
    }

    public function afficherInfos() : string
    {
        return parent::afficherInfos()." - ".$this->nombrePortes." portes <br>";
    }
}