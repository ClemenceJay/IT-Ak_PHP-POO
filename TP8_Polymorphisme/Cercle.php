<?php
require_once ("FormeGeometrique.php");
class Cercle extends FormeGeometrique
{
    public float $rayon;

    public function __construct(float $rayon)
    {
        $this->typeForme = "cercle";
        $this->rayon = $rayon;
    }
    public function calculerAire(): float
    {
        return 3.14 * $this->rayon * $this->rayon;
    }
}