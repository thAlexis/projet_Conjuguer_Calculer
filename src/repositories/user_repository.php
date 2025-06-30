<?php

include "../config/connection.php";

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
