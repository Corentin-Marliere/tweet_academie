<?php
require('../Model/m_register.php');
$bdd = new Model();

if(isset($_GET["message"])){
  $message = "Adresse mail ou mot de passe invalide";
}

  require("../View/v_login.php");