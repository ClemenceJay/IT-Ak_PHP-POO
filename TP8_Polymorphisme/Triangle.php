<?php
require_once ("FormeGeometrique.php");
class Triangle extends FormeGeometrique
{
    public float $cote1;
    public float $cote2;
    public float $cote3;

    public function __construct(float $cote1, float $cote2, float $cote3)
    {
        $this->typeForme = "triangle";
        $this->cote1 = $cote1;
        $this->cote2 = $cote2;
        $this->cote3 = $cote3;
    }
    public function calculerAire(): float
    {
        $demiP = ($this->cote1+$this->cote2+$this->cote3)/2;
        return sqrt($demiP*($demiP-$this->cote1)*($demiP-$this->cote2)*($demiP-$this->cote3));
    }
}