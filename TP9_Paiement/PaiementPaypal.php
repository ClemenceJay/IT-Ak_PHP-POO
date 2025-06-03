<?php
require_once ("Paiement.php");

class PaiementPaypal extends Paiement {

    public function __construct(float $montant)
    {
        parent::__construct($montant);
    }

    public function effectuerPaiement() : void
    {
        echo "Paiement via Paypal effectué.<br>";
    }
}