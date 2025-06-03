<?php

require_once ("Cercle.php");
require_once ("Rectangle.php");
require_once ("Triangle.php");
require_once ("CalculateurAire.php");

$cercle = new Cercle(5);
$rectangle = new Rectangle(5, 7);
$triangle = new Triangle(12, 5, 10);

$listeFormes = [$cercle, $rectangle, $triangle];

$calculAireTotale = new CalculateurAire();

$calculAireTotale->calculeAireTotale($listeFormes);