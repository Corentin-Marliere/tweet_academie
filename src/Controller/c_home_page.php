<?php
session_start();
require('../Model/m_register.php');
$bdd = new Model();

require('../View/v_home.php');