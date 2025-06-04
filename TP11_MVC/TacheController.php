<?php

class TacheController {
    public array $listeTaches = [];
    public function __construct(array $listeTaches)
    {
     $this->listeTaches = $listeTaches;
    }

    public function ajouterTache(string $nom, string $description) :void {
        $this->listeTaches[$nom] = $description;
    }

    public function getTache() : array{
        return $this->listeTaches;
    }

    public function supprimerTache(string $nom) : void {
        unset($this->listeTaches[$nom]);
    }
}