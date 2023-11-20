<?php
// auth.php

// Votre mot de passe autorisé
$motDePasseAutorise = "4966"; // Remplacez ceci par votre mot de passe réel

// Vérifie si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère le mot de passe soumis dans le formulaire
    $motDePasseSoumis = $_POST["password"];

    // Vérifie si le mot de passe est correct
    if ($motDePasseSoumis == $motDePasseAutorise) {
        // Mot de passe correct, redirige vers la feuille Google Sheets
        header("Location: https://docs.google.com/spreadsheets/d/1gm-uxD8_wMvs7B12o9-hNKpehVwriWNepvVS1QxplAw/edit#gid=1833366428");
        exit();
    } else {
        // Mot de passe incorrect, affiche un message d'erreur
        echo "Mot de passe incorrect. Veuillez réessayer.";
    }
}
?>
