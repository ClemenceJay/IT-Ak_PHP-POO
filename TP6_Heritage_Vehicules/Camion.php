<?php

require_once ("Vehicule.php");

class Camion extends Vehicule {
    public int $poidsMax;
    public int $chargeActuelle;

    public function __construct(string $marque, string $modele, int $annee, int $kilometrage, string $dernierEntretien, int $poidsMax, int $chargeActuelle)
    {
        parent::__construct($marque, $modele, $annee, $kilometrage, $dernierEntretien);
        $this->poidsMax = $poidsMax;
        $this->chargeActuelle = $chargeActuelle;
    }

    public function afficherInfos(): string
    {
        return parent::afficherInfos()."<br> Poids Max: ".$this->poidsMax."kg / Charge Actuelle: ".$this->chargeActuelle."kg";
    }

    public function charger($charge): void {
        if ($charge > $this->poidsMax) {
            echo "Charge trop importante, chargement impossible. <br>";
        } else {
            $this->chargeActuelle = $charge;
            echo "Camion chargé, la charge actuelle est désormais de : ".$this->chargeActuelle."kg <br>";
        }
    }
}