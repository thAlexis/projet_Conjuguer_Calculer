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

if (str_contains($_SERVER['HTTP_REFERER'], "calculer")) {
  $user_logged = $_SESSION['username_logged'];
  $userid = get_user_id($user_logged)['id'];
  $v1 = $_GET['firstvalue'];
  $op = $_GET['operator'];
  $v2 = $_GET['secondvalue'];
  add_calc_history($userid, $v1, $op, $v2);
  $opencode = urlencode($op);
  header("location: ../../views/calculer.php?firstvalue=$v1&operator=$opencode&secondvalue=$v2");
  die();
}
