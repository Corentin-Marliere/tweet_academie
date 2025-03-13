<?php
require('../Model/m_register.php');
$bdd = new Model();
$email = htmlspecialchars($_POST['Email']);

//encryptage du mot de passe
$password = htmlspecialchars($_POST['Password']);
$salt = "vive le projet tweet_academy";
// Ajouter le salt au mot de passe
$passwordWithSalt = $password . $salt;
// Hacher le mot de passe au format ripemd160
$hashPassword = hash("ripemd160", $passwordWithSalt);

function verifyPassword($a, $b){
    return $a=== $b;
}

$loginMessage = "";

$user = $bdd->findUserByEmail($email);
if($user && verifyPassword($hashPassword, $user['password_hash']) ){
    $_SESSION['userId']=$user['user_id'];
    $_SESSION['identifier']=$user['username']." ".$user['display_name '];
    header("location: ../Controller/c_home_page.php");
}
else{
    $loginMessage = "ERROR";
    header("location: ../Controller/c_login.php?message=$loginMessage");
}