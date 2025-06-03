<?php
require_once ("PaiementCB.php");
require_once ("PaiementPaypal.php");
require_once ("PaiementVirement.php");

$paiements = [new PaiementCB(69.90), new PaiementVirement(148.73),new PaiementPaypal(55.10)];

foreach ($paiements as $paiement) {
    $paiement->afficherMontant();
    $paiement->effectuerPaiement();
    echo "<br>";
}