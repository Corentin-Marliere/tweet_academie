<?php
session_start();
require('../Model/m_register.php');
$bdd = new Model();

$posts = $bdd->getTweet();

require('../View/v_home.php');