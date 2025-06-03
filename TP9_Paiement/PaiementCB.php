<?php

require_once ("Paiement.php");

class PaiementCB extends Paiement {

    public function __construct(float $montant)
    {
        parent::__construct($montant);
    }

    public function effectuerPaiement() : void
    {
        echo "Paiement par carte bancaire effectué.<br>";
    }
}