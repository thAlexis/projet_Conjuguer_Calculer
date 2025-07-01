<?php

include "../repositories/history_repository.php";
session_start();

if (str_contains($_SERVER['HTTP_REFERER'], "conjuguer")) {
  $user_logged = $_SESSION['username_logged'];
  $userid = get_user_id($user_logged)['id'];
  $verbe = $_GET['verbeinfinitif'];
  $temps = $_GET['temps'];
  add_conjug_history($userid, $verbe, $temps);
  header("location: ../../views/conjuguer.php?verbeinfinitif=$verbe&temps=$temps");
  die();
}
