<?php
require('../Model/m_register.php');
$bdd = new Model();

$errorEmail = "";
$errorAge = "";
$errorPseudo = "";

$pseudo = htmlspecialchars($_POST['Pseudo']);
$dateOfBirth = (new DateTime($_POST['date_of_birth']))->format('Y-m-d H:i:s');
$age = (new DateTime())->diff(new DateTime($_POST['date_of_birth']))->y;
$email = htmlspecialchars($_POST['Email']);

//encryptage du mot de passe
$password = htmlspecialchars($_POST['Password']);
$salt = "vive le projet tweet_academy";
// Ajouter le salt au mot de passe
$passwordWithSalt = $password . $salt;
// Hacher le mot de passe au format ripemd160
$hashPassword = hash("ripemd160", $passwordWithSalt);

if ($age >= 13) {
    if (!$bdd->findUserByEmail($email)) {
        $bdd->createUser($pseudo, $pseudo, $hashPassword, $email, $dateOfBirth);
        header("location: ../Controller/c_home_page.php");
    } else {
        $errorEmail = 'errror';
        header("location: ../Controller/c_sign_up.php?Email=$errorEmail");
    }
} else {
        $errorAge = 'errror';
        header("location: ../Controller/c_sign_up.php?Age=$errorAge");
}
