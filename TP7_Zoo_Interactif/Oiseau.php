<?php

require_once("Animal.php");

class Oiseau extends Animal
{
    public string $espece;

    public function __construct(string $name, int $age, string $espece)
    {
        parent::__construct($name, $age);
        $this->espece = $espece;
    }

    public function decrire(): string
    {
        return parent::decrire() . "Je suis un oiseau de l'espèce " . $this->espece . "<br>";
    }
    public function crier(): string {
        return "Cui-Cui!";
    }
}