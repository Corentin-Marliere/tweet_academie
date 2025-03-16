<?php
session_start();
require('../Model/m_register.php');
$bdd = new Model();

$user = $_SESSION['user_id'];
$content = $_POST['content'];

// Validation simple
if (strlen($content) > 140) {
    echo "Le contenu ne peut pas dépasser 140 caractères.";
    return;
}

// Insertion dans la base de données
$success = $bdd->createPost($user, $content);
header('location: ../Controller/c_home_page.php');