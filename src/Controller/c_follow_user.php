<?php
session_start();
require('../Model/m_register.php');
$bdd = new Model();

// Récupérer les données
$followerId = $_SESSION['user_id']; // L'utilisateur qui suit
$followingId = isset($_POST['followingId']) ? intval($_POST['followingId']) : 0;

// Vérifier que l'utilisateur ne suit pas lui-même
if ($followerId === $followingId) {
    echo "Vous ne pouvez pas vous suivre vous-même.";
    exit();
}

// Appeler la méthode pour suivre l'utilisateur
try {
    $bdd->followUser($followerId, $followingId);
    header('Location: ../Controller/c_account.php'); // Redirection après succès
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}