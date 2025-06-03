<?php

require_once ("Livre.php");

$livre1 = new Livre('La roue du temps', 'Robert Jordan', 1990);
$livre1->afficherDetails();
echo "<br>";

$livrePapier = new LivrePapier('ABC contre Poirot', 'Agatha Christie', 1937, 328);
$livrePapier->afficherDetails();

$ebook = new Ebook('Elle a menti pour les ailes', 'Francesca Serra', 2024, 'ePUB');
$ebook->afficherDetails();

$livrePapier->emprunter();
$livrePapier->emprunter();