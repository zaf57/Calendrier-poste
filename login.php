<?php

// Vérification du mot de passe (remplacez cela par votre logique d'authentification)
if ($_POST['username'] === 'votre_utilisateur' && $_POST['password'] === 'votre_mot_de_passe') {
    // Redirection vers la page de données si l'authentification réussit
    header('Location: data.php');
    exit;
} else {
    // Retour à la page de connexion en cas d'échec de l'authentification
    header('Location: login.html');
    exit;
}
?>
