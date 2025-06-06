<?php

require_once 'Chien.php';

class ChienDeChasse extends Chien
{
    public function __construct(string $nom, int $age, string $couleur, string $sexe, float $poids)
    {
        parent::__construct($nom, $age, "Chien de chasse", $couleur, $sexe, $poids);
    }

    public function crier()
    {
        return "Ouaf! Ouaf! Ouaf! Ouaf! Ouaf!";
    }
}