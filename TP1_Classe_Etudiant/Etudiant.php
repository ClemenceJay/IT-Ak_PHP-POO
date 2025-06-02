<?php

class Etudiant
{
    public string $nom;
    public string $prenom;
    public array $note = [];

    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function ajouterNote(float $note){
        $this->note[] = $note;
    }

    public function getNote(): array {
        return $this->note;
    }

    public function calculerMoyenne(): float {
        $total = 0;
        $moyenne = 0;
        foreach ($this->note as $note){
            $total += $note;
        }
        $moyenne = $total / count($this->note);
        return $moyenne;
    }

    public function afficherNotes(): string {
        return implode(", ", $this->note);
    }

    public function afficherInformations(){
        echo "Nom: ".$this->nom."<br>";
        echo "Prénom: ".$this->prenom."<br>";
        echo "Notes: ".$this->afficherNotes()."<br>";
        echo "Moyenne: ".$this->calculerMoyenne()."<br>";
    }
}