<?php

class Vehicule
{
    public string $marque;
    public string $modele;
    public int $annee;
    public int $kilometrage;
    public DateTime $dernierEntretien ;

    public function __construct(string $marque, string $modele, int $annee, int $kilometrage, string $dernierEntretien)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        $this->dernierEntretien = DateTime::createFromFormat('d/m/Y', $dernierEntretien);
    }

    public function afficherInfos() : string {
        return $this->marque." ".$this->modele." (".$this->annee.") - ".$this->kilometrage."km";
    }

    public function programmerEntretien(string $entretien) : void {
        $this->dernierEntretien = DateTime::createFromFormat('d/m/Y', $entretien);
    }

    public function afficherProchainEntretien()
    {
        echo "Le prochain entretien est prévu le : ".$this->dernierEntretien->format('d/m/Y')."<br>";
    }
}