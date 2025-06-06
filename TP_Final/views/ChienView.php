<?php

class ChienView {
    public function afficherChien($chien) : void{
        echo $chien->afficherDetails();
    }
}