<?php

abstract class Paiement {
    public float $montant;

    public function __construct(float $montant)
    {
        $this->montant = $montant;
    }

    public function afficherMontant() {
        echo "Montant de " . $this->montant."€ <br>";
    }

    abstract public function effectuerPaiement();
}