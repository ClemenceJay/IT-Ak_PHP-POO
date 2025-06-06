<?php
require_once "../models/Classes/Chien.php";
class ListeChiensView{
    public function afficherListeChiens($listeChiens) :void
    {

        if ($listeChiens != []){
            echo "<ul>";
            foreach ($listeChiens as $chien){
                $nom = urlencode($chien->getNom());
                echo "<li><a href='?chien=".$nom."'>".$chien->getNom()." (".$chien->getRace().")</a></li>";
            }
            echo "</ul>";
        } else {
            echo "<br> Il n'y a pas de chien à adopter pour le moment<br>";
        }
    }
}