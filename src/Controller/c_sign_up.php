<?php
require('../Model/m_register.php');
$bdd = new Model();

if(isset($_GET["Email"])){
    $messageEmail = "adresse mail déjà utilisé";
}

if(isset($_GET["Age"])){
    $messageEmail = "Interdit au moins de 13 ans.";
}

require('../View/v_register.php');