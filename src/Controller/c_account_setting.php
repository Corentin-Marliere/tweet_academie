<?php
session_start();
require('../Model/m_register.php');
$bdd = new Model();

$displayName = trim($_POST['new-display-name']);

if (isset($_POST['new-bio'])) {
	$bio = trim($_POST['new-bio']);
} else {
	$bio = null;
}

$userId = $_SESSION['user_id'];

$updateAccount = $bdd->updateAccount($displayName, $bio, $userId);
header('location: ../Controller/c_account.php');