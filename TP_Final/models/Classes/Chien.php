<?php

require_once("../models/Interfaces/Animal.php");

class Chien implements Animal
{
    private string $nom;
    private int $age;
    private string $race;
    private string $couleur;
    private string $sexe;
    private float $poids;

    public function __construct(string $nom, int $age, string $race, string $couleur, string $sexe, float $poids)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->race = $race;
        $this->couleur = $couleur;
        $this->sexe = $sexe;
        $this->poids = $poids;
    }

    public function afficherDetails(): string
    {
        return "<ul><li>Age : " . $this->age . " ans</li><li>" . $this->sexe . "</li><li>Race : " . $this->race . "</li><li> Couleur : " . $this->couleur . "</li><li> Poids : " . $this->poids . "kg</li></ul>";
    }

    public function calculerAgeHumain(): int
    {
        return $this->age * 7;
    }

    public function crier()
    {
        return "Wouaf Wouaf";
    }

    public function estEnSurpoids(): string
    {
        if ($this->poids > 20) {
            return "Ce chien est en surpoids";
        } else {
            return "Ce chien a un poids correct";
        }
    }

    public function setInfos($age, $race, $couleur, $sexe, $poids)
    {
        $this->age = $age;
        $this->race = $race;
        $this->couleur = $couleur;
        $this->sexe = $sexe;
        $this->poids = $poids;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getRace()
    {
        return $this->race;
    }
}