<?php

require_once ("Animal.php");

class Chien extends Animal {
    public string $race;
    public function __construct(string $name, int $age, string $race)
    {
        parent::__construct($name, $age);
        $this->race = $race;
    }

    public function decrire(): string
    {
        return parent::decrire()."Je suis un chien de race ".$this->race."<br>";
    }

    public function crier(): string {
        return "Wouf!";
    }

}