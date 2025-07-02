<?php

include_once __DIR__ . "/../config/connection.php";

function get_user_id($user)
{
  try {
    $pdo = get_connection_to_db();
    $select = "SELECT id FROM utilisateurs WHERE username = :usernamelogged";
    $select_query = $pdo->prepare($select);
    $select_query->bindValue(":usernamelogged", $user);
    $select_query->execute();
    return $select_query->fetch();
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  };
}

function add_conjug_history($userid, $verbe, $temps)
{
  try {
    $pdo = get_connection_to_db();
    $insert = "INSERT INTO histo_conjug VALUES (NULL, :userid, :verbe, :temps)";
    $insert_query = $pdo->prepare($insert);
    $insert_query->bindValue(":userid", $userid);
    $insert_query->bindValue(":verbe", $verbe);
    $insert_query->bindValue(":temps", $temps);
    $insert_query->execute();
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  };
}

function select_verbe_temps($userid)
{
  try {
    $pdo = get_connection_to_db();
    $select = "SELECT verbe, temps FROM histo_conjug WHERE userid = :userid";
    $select_query = $pdo->prepare($select);
    $select_query->bindValue(":userid", $userid);
    $select_query->execute();
    return $select_query->fetchAll();
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  };
}

function add_calc_history($userid, $v1, $op, $v2)
{
  try {
    $pdo = get_connection_to_db();
    $insert = "INSERT INTO histo_calc VALUES (NULL, :userid, :v1, :op, :v2)";
    $insert_query = $pdo->prepare($insert);
    $insert_query->bindValue(":userid", $userid);
    $insert_query->bindValue(":v1", $v1);
    $insert_query->bindValue(":op", $op);
    $insert_query->bindValue(":v2", $v2);
    $insert_query->execute();
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  };
}
