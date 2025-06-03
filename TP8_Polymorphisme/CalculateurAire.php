<?php

class CalculateurAire {
    public function calculeAireTotale($listeForme) {
        $aireTotale = 0;
        foreach ($listeForme as $forme) {
            $aireTotale += $forme->calculerAire();
        }
        echo "L'aire totale des formes et de : ".$aireTotale." cm2. <br>";
        return $aireTotale;
    }

    public function afficherAires($listeForme) {
        foreach ($listeForme as $forme) {
            echo "L'aire de ce ".$forme->typeForme." est de ".$forme->calculerAire()." cm2. <br>";
        }
    }
}