<?php

include "../repositories/user_repository.php";

if (str_contains($_SERVER['HTTP_REFERER'], "inscription_page")) {
  $username = $_POST['username'];
  $name = $_POST['name'];
  $password = $_POST['password'];
  signin_user($username, $name, $password);
  header("location: ../../test.php");
  die();
};

if (str_contains($_SERVER['HTTP_REFERER'], "connexion_page")) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $existing = login_user($username, $password);
  if ($existing !== false) {
    header("location:../../test.php");
    die();
  } else {
    echo "Identifiants incorrect";
    die();
  };
};
