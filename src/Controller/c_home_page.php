<?php
session_start();
require('../Model/m_register.php');
$bdd = new Model();

$posts = $bdd->getTweet();

if(isset($_GET["message"])){
    $message = "Vous ne pouvez pas vous suivre !";
}

require('../View/v_home.php');