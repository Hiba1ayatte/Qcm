<?php
session_start(); // Démarrez la session

// Détruisez toutes les données de session
session_unset();
session_destroy();

// Redirigez l'utilisateur vers la page de connexion ou toute autre page
header("Location: ../index.php"); // Remplacez "login.php" par la page de connexion réelle
exit();
?>