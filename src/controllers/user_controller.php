<?php

include "../repositories/user_repository.php";
session_start();

if (str_contains($_SERVER['HTTP_REFERER'], "inscription_page")) {
  $_SESSION['username_logged'] = htmlentities($_POST['username']);
  $username = $_POST['username'];
  $name = $_POST['name'];
  $password = $_POST['password'];
  signin_user($username, $name, $password);
  header("location: ../../views/connected_page.php");
  die();
};

if (str_contains($_SERVER['HTTP_REFERER'], "connexion_page")) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $existing = login_user($username, $password);
  if ($existing !== false) {
    $_SESSION['username_logged'] = htmlentities($_POST['username']);
    header("location:../../views/connected_page.php");
    die();
  } else {
    header("location:../../views/wrong_id.php");
    die();
  };
};
