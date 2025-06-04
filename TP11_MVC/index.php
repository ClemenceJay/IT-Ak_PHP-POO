<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require ("TacheController.php");
require ("TacheVue.php");

//Initialisation de la session avec une liste fictive
if (!isset($_SESSION['taches'])) {
    $_SESSION['taches'] = [];
}

$tacheController = new TacheController($_SESSION['taches']);
$tacheVue = new TacheVue();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter'])) {
    //    ajoute la tache et met a jour la session
    $tacheController->ajouterTache($_POST['nom'], $_POST['description']);
    $_SESSION['taches'] = $tacheController->getTache();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['supprimer'])) {
    //    ajoute la tache et met a jour la session
    $tacheController->supprimerTache($_POST['nom']);
    $_SESSION['taches'] = $tacheController->getTache();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes tâches</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h3> Mes taches </h3>
<?=$tacheVue->afficherTaches($tacheController);?>

<h3> Ajouter une tache </h3>
<form method="POST">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="description" placeholder="Description de la tâche">
    <button type="submit" name="ajouter">Ajouter la tâche</button>
</form>

<h3> Supprimer une tache </h3>
<form method="POST">
    <select name="nom">
        <?php
        foreach ($tacheController->getTache() as $key => $value) {
            echo "<option value='".$key."'>".$key."</option>";
        }
        ?>
    </select>
    <button type="submit" name="supprimer">Supprimer</button>
</form>
