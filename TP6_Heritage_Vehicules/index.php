<?php

require_once ("Voiture.php");
require_once ("Moto.php");
require_once ("Camion.php");

$voiture1 = new Voiture('Ford', 'Fiesta', 2018, 5800, '12/03/2023', 5);
echo $voiture1->afficherInfos();
$voiture1->programmerEntretien('23/06/2025');
$voiture1->afficherProchainEntretien();

echo "<br>";

$moto1 = new Moto('Yamaha', 'Vroum', 2022, 1500, '12/03/2023',500);
echo $moto1->afficherInfos();
$moto1->programmerEntretien('17/08/2025');
$moto1->afficherProchainEntretien();

echo "<br>";

$camion1 = new Camion('Truck', 'Container', 2017, 25000, '06/05/2022', 3500, 2800 );
echo $camion1->afficherInfos()."<br>";
$camion1->programmerEntretien('05/11/2025');
$camion1->afficherProchainEntretien();
$camion1->charger(4000);
$camion1->charger(2000);