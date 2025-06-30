<?php

include __DIR__ . "/../config/connection.php";

function signin_user($username, $name, $password)
{
  try {
    $pdo = get_connection_to_db();
    $insert = "INSERT INTO utilisateurs VALUES (NULL, :username, :name, :password)";
    $insert_query = $pdo->prepare($insert);
    $insert_query->bindValue(":username", $username);
    $insert_query->bindValue(":name", $name);
    $insert_query->bindValue(":password", $password);
    $insert_query->execute();
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  };
};

function login_user($username, $password)
{
  try {
    $pdo = get_connection_to_db();
    $select = "SELECT * FROM utilisateurs WHERE username = :username AND password = :password";
    $select_query = $pdo->prepare($select);
    $select_query->bindValue(":username", $username);
    $select_query->bindValue(":password", $password);
    $select_query->execute();
    $existing = $select_query->fetch();
    return $existing;
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  };
};

function get_user_by_session_username($session_username)
{
  try {
    $pdo = get_connection_to_db();
    $select = "SELECT * FROM utilisateurs WHERE username = :username";
    $select_query = $pdo->prepare($select);
    $select_query->bindValue(":username", $session_username);
    $select_query->execute();
    return $select_query->fetch();
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  }
}

function update_user($username, $name, $password)
{
  try {
    $pdo = get_connection_to_db();
    $update = "UPDATE utilisateurs SET username = :username, name = :name, password = :password WHERE username = :userlogged";
    $update_query = $pdo->prepare($update);
    $update_query->bindValue(":username", $username);
    $update_query->bindValue(":name", $name);
    $update_query->bindValue(":password", $password);
    $update_query->bindValue(":userlogged", $_SESSION['username_logged']);
    $update_query->execute();
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  }
}
