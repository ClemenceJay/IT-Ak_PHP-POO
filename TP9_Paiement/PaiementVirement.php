<?php

require_once ("Paiement.php");

class PaiementVirement extends Paiement {

    public function __construct(float $montant)
    {
        parent::__construct($montant);
    }

    public function effectuerPaiement() : void
    {
        echo "Paiement par virement bancaire effectué.<br>";
    }
}