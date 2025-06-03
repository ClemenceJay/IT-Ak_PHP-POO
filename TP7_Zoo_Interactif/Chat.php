<?php

require_once("Animal.php");

class Chat extends Animal
{
    public string $couleur;

    public function __construct(string $name, int $age, string $couleur)
    {
        parent::__construct($name, $age);
        $this->couleur = $couleur;
    }

    public function decrire(): string
    {
        return parent::decrire() . "Je suis un chat de couleur " . $this->couleur . "<br>";
    }
    public function crier(): string {
        return "Miaou!";
    }
}