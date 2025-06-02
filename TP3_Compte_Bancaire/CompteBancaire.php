<?php

class CompteBancaire {
    private float $solde;
    private string $titulaire;

    public function __construct(float $solde, string $titulaire) {
        $this->solde = $solde;
        $this->titulaire = $titulaire;
    }

    public function effectuerDepot(float $montant) : void {
        if ($montant > 0) {
            $this->solde += $montant;
            echo "Un dépot de ".$montant. "€ a été effectué.<br>";
        } else {
            echo "le montant saisi doit être positif <br>";
        }
    }

    public function effectuerRetrait(float $montant) : void {
        if ($montant < 0) {
            $this->solde += $montant;
            echo "Un retrait de ".$montant. "€ a été effectué.<br>";
        } else {
            echo "le montant saisi doit être négatif <br>";
        }
    }

    public function afficherSolde() : void {
        echo "Solde actuel: " . $this->solde . "<br>";
    }

    public function getTitulaire() : void {
        echo "Titulaire du compte: " . $this->titulaire . "<br>";
    }

    public function calculerInterets($taux) : void{
        $interet = $this->solde*($taux/100);
        echo "Les intérêts pour un taux de ".$taux."% sont de: ".$interet."€<br>";
    }
}