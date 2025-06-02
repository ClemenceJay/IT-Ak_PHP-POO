<?php

    require_once("Classe.php");
    require_once("Etudiant.php");

    $etudiant1 = new Etudiant("Jay", "Clémence");
    $etudiant1->ajouterNote(12);
    $etudiant1->ajouterNote(18);
    $etudiant1->ajouterNote(5);
    $etudiant1->afficherInformations();

    $etudiant2 = new Etudiant("Duprès", "Elsa");
    $etudiant2->ajouterNote(12);
    $etudiant2->ajouterNote(13);
    $etudiant2->ajouterNote(12.5);
    $etudiant2->afficherInformations();

    $classe1 = new Classe("1ere B");
    $classe1->ajouterEtudiant($etudiant1);
    $classe1->ajouterEtudiant($etudiant2);
    $classe1->afficherInformations();
    $classe1->supprimerEtudiant("Duprès", "Elsa");
    $classe1->afficherInformations();