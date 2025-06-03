<?php

class Animal {
    public string $name;
    public int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function decrire() : string {
        return "Je m'appelle ".$this->name." et j'ai ".$this->age." ans <br>";
    }
}