<?php

require_once("Produit.php");

$produit1 = new Produit("Tomate", 3.20);
$produit2 = new Produit("Gel douche", 4.30);
$produit3 = new Produit("Litière", 6.40);

$produit1->ajouterAuPanier(4);
$produit2->ajouterAuPanier(2);

$panier = [$produit1, $produit2, $produit3];
$total = 0;
echo "Mon panier: <br>";
foreach ($panier as $produit) {
    echo "<li>";
    $produit->afficherProduit();
    echo "</li>";
    $total += $produit->calculerTotal();
}

echo "<br> <b>Total du panier : ".$total."€ </b><br>";
