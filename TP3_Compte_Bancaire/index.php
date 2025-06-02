<?php

require_once ("CompteBancaire.php");

$compte1 = new CompteBancaire(800, "Martin Jean");
$compte1->effectuerDepot(400);
$compte1->effectuerRetrait(-200);
$compte1->afficherSolde();
$compte1->getTitulaire();
$compte1->calculerInterets(2.5);