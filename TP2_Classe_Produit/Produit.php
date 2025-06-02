<?php

class Produit
{
    public string $nom;
    public float $prix;

    public int $quantite;

    public function __construct(string $nom, float $prix){
        $this->nom = $nom;
        $this->prix = $prix;
        $this->quantite = 1;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrix(): float {
        return $this->prix;
    }

    public function ajouterAuPanier(int $quantite) : void {
        $this->quantite = $quantite;
    }

    public function calculerTotal() : float {
        return $this->quantite * $this->prix;
    }

    public function afficherProduit(): void {
        echo $this->nom." (".$this->prix." €) - quantite: ".$this->quantite."<br>   Total: ".$this->calculerTotal()."€<br>";
    }
}