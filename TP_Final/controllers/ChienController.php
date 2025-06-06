<?php

require_once "../views/ListeChiensView.php";
require_once "../views/ChienView.php";
require_once "../models/Classes/Chien.php";
require_once "../models/Classes/ChienDeChasse.php";

class ChienController {

    public array $listeChiens;
    public function __construct($listeChiens){
        $this->listeChiens = $listeChiens;
    }

    public function afficherListeChiens() : void{
        $listeChiensView = new ListeChiensView();
        $listeChiensView->afficherListeChiens($this->listeChiens);
    }

    public function afficherChiensDetails($chien) : void{
        $chienView = new ChienView();
        $chienView->afficherChien($chien);
    }

    public function ajouterChien(string $nom, int $age, string $race, string $couleur, string $sexe, float $poids) : void{
        $existeDeja = false;
        foreach ($this->listeChiens as $chien) {
            if (strtolower($chien->getNom()) == strtolower($nom)) {
                $existeDeja = true;
            }
        }
        if (!$existeDeja) {
            if (strtolower($race) == "chien de chasse") {
                $newDog = new ChienDeChasse($nom, $age, $couleur, $sexe, $poids);
            } else {
                $newDog = new  Chien($nom, $age, $race, $couleur, $sexe, $poids);
            }
            array_push($this->listeChiens, $newDog);
        } else {
            echo "Ce chien existe déjà<br>";
        }
    }

    public function modifierChien(string $nom, int $age, string $race, string $couleur, string $sexe, float $poids) :void
    {
        foreach ($this->listeChiens as $chien) {
            if (strtolower($chien->getNom()) == strtolower($nom)) {
                $chien->setInfos($age, $race, $couleur, $sexe, $poids);
            }
        }
    }

    public function supprimerChien(string $nom) : void{
        foreach ($this->listeChiens as $key => $chien) {
            if ($chien->getNom() == $nom) {
                unset($this->listeChiens[$key]);
            }
        }
        // Ré indexe la liste après suppression
        $this->listeChiens = array_values($this->listeChiens);
    }

    public function getChiens()
    {
        return $this->listeChiens;
    }

}