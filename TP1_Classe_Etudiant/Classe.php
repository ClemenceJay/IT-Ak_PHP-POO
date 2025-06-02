<?php

class Classe{
    public string $nomClasse;
    public array $listeEtudiant = [];

    public function __construct(string $nomClasse){
        $this->nomClasse=$nomClasse;
    }

    public function ajouterEtudiant(Etudiant $etudiant){
        $this->listeEtudiant[] = $etudiant;
    }

    public function supprimerEtudiant(string $nom, string $prenom){
        $index = 0;
        $etudiantASupprimer = "";
        foreach ($this->listeEtudiant as $etudiant) {
            if ($etudiant->nom === $nom && $etudiant->prenom === $prenom) {
                $etudiantASupprimer = $index;
            }
            $index++;
        }
        unset($this->listeEtudiant[$etudiantASupprimer]);
    }

    public function afficherInformations(){
        echo $this->nomClasse."<br>";
        foreach ($this->listeEtudiant as $etudiant) {
            echo "Nom: ".$etudiant->nom.", Prénom: ".$etudiant->prenom.", Moyenne: ".$etudiant->calculerMoyenne()."<br>";
        }
    }
}