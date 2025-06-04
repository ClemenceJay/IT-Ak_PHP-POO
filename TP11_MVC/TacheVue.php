<?php

class TacheVue
{
    public function afficherTaches(TacheController $tacheController) : void {
        if(count($tacheController->getTache())>0){
            echo "<ul>";
            foreach ($tacheController->getTache() as $key => $value) {
                echo "<li>".$key.": ".$value."</li>";
            }
            echo "</ul>";
        } else {
            echo "Votre liste de tache est vide!";
        }

    }
}