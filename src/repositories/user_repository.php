<?php

include __DIR__ . "../config/connection.php";

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
