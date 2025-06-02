<?php

$contact1 = [
    "Nom"=>"Dupont",
    "Prénom"=>"Alice",
    "Email"=>"alice@example.com"
];

$contact2 = [
    "Nom"=>"Martin",
    "Prénom"=>"Bob",
    "Email"=>"bob@example.com"
];

$listeContact = [$contact1, $contact2];

foreach ($listeContact as $contact) {
    echo "Nom: ".$contact["Nom"]."<br>";
    echo "Prénom: ".$contact["Prénom"]."<br>";
    echo "Email: ".$contact["Email"]."<br><br>";
}