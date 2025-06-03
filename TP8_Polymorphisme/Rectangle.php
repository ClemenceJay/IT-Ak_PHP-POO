<?php
require_once ("FormeGeometrique.php");
class Rectangle extends FormeGeometrique
{
    public float $longueur;
    public float $largeur;

    public function __construct(float  $longueur, float $largeur)
    {
        $this->typeForme = "rectangle";
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }
    public function calculerAire(): float
    {
        return $this->longueur * $this->largeur;
    }
}