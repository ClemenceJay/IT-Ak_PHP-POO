<?php

abstract class FormeGeometrique {
    public string $typeForme;
    abstract public function calculerAire(): float;
}