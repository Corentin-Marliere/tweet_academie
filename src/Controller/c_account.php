<?php
session_start();
require('../Model/m_register.php');
$bdd = new Model();

if (isset($_SESSION['user_id'])) {
  $userId = $_SESSION['user_id'];
  $user = $bdd->getInfoFromUser($userId);
  if ($user) {
    $following = $bdd->getFollowing($userId);
    $followers = $bdd->getFollowers($userId);
    require('../View/v_account.php');
  }
}