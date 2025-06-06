<?php

require_once "../controllers/ChienController.php";
require_once "../models/Classes/Chien.php";


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//Initialisation de la session avec une liste fictive
if (!isset($_SESSION['chiens'])) {
    $_SESSION['chiens'] = [];
}

$chienController = new ChienController($_SESSION['chiens']);

//gestion des formulaires
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //    ajoute le chien et met a jour la session
    if (isset($_POST['ajouter'])){
        $chienController->ajouterChien($_POST['nom'], $_POST['age'], $_POST['race'], $_POST['couleur'], $_POST['sexe'], $_POST['poids']);
    } elseif (isset($_POST['modifier'])){
        $chienController->modifierChien($_POST['nom'], $_POST['age'], $_POST['race'], $_POST['couleur'], $_POST['sexe'], $_POST['poids']);
    } elseif (isset($_POST['supprimer'])){
        $chienController->supprimerChien($_POST['nom']);
    }
    $_SESSION['chiens'] = $chienController->getChiens();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Refuge</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Refuge Bulles de poils</h1>

<div id="adoption">
    <h3> Chiens à adopter </h3>
    <div class="part" id="partChien">
        <div id="listeChien">
            <?=$chienController->afficherListeChiens();?>
        </div>
        <div id="detailsChien">
            <?php
            if (isset($_GET['chien'])) {
                $nom = $_GET['chien'];
                foreach ($chienController->getChiens() as $chien) {
                    if ($chien->getNom() === $nom) {
                        echo "<p> Les infos de ".$nom." :</p>";
                        $chienController->afficherChiensDetails($chien);
                        break;
                    }
                }
            }
            ?>
        </div>
    </div>
</div>

<div id="gestionChiens">
    <div class="part" id="partAdd">
        <h3> Ajouter ou modifier un chien </h3>
        <form method="POST" id="addForm">
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="number" name="age" id="inputAge" min="0" placeholder="Age" required>
            <input type="text" name="race" placeholder="Race" required>
            <input type="text" name="couleur" placeholder="couleur" required>
            <div id="radioButton">
                <div>
                    <input type="radio" id="male" name="sexe" value="male" />
                    <label for="male">Male</label>
                </div>
                <div>
                    <input type="radio" id="femelle" name="sexe" value="femelle" />
                    <label for="femelle">Femelle</label>
                </div>
            </div>
            <input type="number" name="poids" placeholder="Poids" min="0" step="0.01" required>
            <button type="submit" name="ajouter" id="buttonAdd">Ajouter le chien</button>
            <button type="submit" name="modifier" id="buttonModif">Modifier le chien</button>
        </form>
    </div>

    <div class="part" id="partSuppr">
        <h3> Supprimer un chien </h3>
        <form method="POST">
            <select name="nom">
                <?php
                foreach ($chienController->getChiens() as $chien) {
                    echo "<option value='".$chien->getNom()."'>".$chien->getNom()."</option>";
                }
                ?>
            </select>
            <button type="submit" name="supprimer">Supprimer</button>
        </form>
    </div>

</div>

