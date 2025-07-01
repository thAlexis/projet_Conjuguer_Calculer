<?php
include "../src/repositories/user_repository.php";
session_start();
include "../src/services/check_loggedin.php";
include "../src/services/conjug_calcul_service.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style type="text/tailwindcss"></style>
  <title>vous etes connecté</title>
</head>

<body>
  <?php include "./components/navbar.php"; ?>
  <h1 class="flex justify-center mt-[4rem] text-4xl">Bonjour
    <?php
    if (isset($_SESSION['username_logged'])) {
      echo $_SESSION['username_logged'];
    };
    ?>,</h1>
  <form class="flex gap-[3rem] justify-center mt-[2rem] text-white" method="get" action="./connected_page.php">
    <button class="bg-[#9775fa] p-[0.5rem] rounded-sm hover:bg-[#9911fa] shadow-md cursor-pointer" name="modifybtn" value="modify">Modifier vos informations</button>
    <button class="bg-[#9775fa] p-[0.5rem] rounded-sm hover:bg-[#9911fa] shadow-md cursor-pointer" name="modifybtn" value="histocalc">Consulter l'historique de calculs</button>
    <button class="bg-[#9775fa] p-[0.5rem] rounded-sm hover:bg-[#9911fa] shadow-md cursor-pointer" name="modifybtn" value="histoconjug">Consulter l'historique de conjugaisons</button>
    <button class="bg-red-800 p-[0.5rem] rounded-sm shadow-md hover:bg-red-500 cursor-pointer" name="modifybtn" value="delete">Supprimer votre compte</button>
  </form>
  <div>
    <?php include "./components/modify_form.php" ?>
  </div>
</body>

</html>