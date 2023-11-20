<?php

// Vérifier si l'utilisateur est connecté, sinon le rediriger vers la page de connexion
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Données</title>
</head>
<body>

    <h1>Bienvenue sur la page de données protégée par mot de passe.</h1>

    <!-- Contenu de la page de données -->

</body>
</html>
