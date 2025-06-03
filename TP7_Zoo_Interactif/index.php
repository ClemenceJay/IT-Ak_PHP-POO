<?php

require_once ("Chien.php");
require_once ("Chat.php");
require_once ("Oiseau.php");

$chien = new Chien("Scouby", 3, "Grand Danois");
$chat = new Chat("Duchesse", 5, 'blanc');
$oiseau = new Oiseau("Rio", 15, 'Ara bleu');

$listeAnimal = [$chien, $chat, $oiseau];

foreach ($listeAnimal as $animal) {
    echo $animal->crier()."<br>";
    echo $animal->decrire()."<br>";
}

