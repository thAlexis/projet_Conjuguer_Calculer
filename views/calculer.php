<?php
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
  <title>Calculette</title>
</head>

<body>
  <?php include "./components/navbar.php" ?>
  <h1 class="text-xl flex justify-center mt-[2rem]">Faire un calcul</h1>
  <div class="flex justify-center">
    <form class="flex gap-[1rem] justify-center bg-[#9775fa] w-[min-content] p-[1rem] rounded-md mt-[1rem]" method="get" action="">
      <input class="bg-white rounded-sm w-[8rem]" type="text" id="firstvalue" name="firstvalue" placeholder="Première valeur" />
      <select class="bg-white rounded-sm" name="operator">
        <option selected disabled>Selectionnez un opérateur</option>
        <option valeur="+">+</option>
        <option valeur="-">-</option>
        <option valeur="*">*</option>
        <option valeur="/">/</option>
      </select>
      <input class="bg-white rounded-sm w-[8rem]" type="text" id="secondvalue" name="secondvalue" placeholder="Seconde valeur" />
      <button class="bg-white p-[0.5rem] rounded-sm cursor-pointer">Calculer</button>
    </form>
  </div>
  <?php if (isset($_GET['firstvalue']) && isset($_GET['operator']) && isset($_GET['secondvalue'])) : ?>
    <div class="flex flex-col items-center mt-[2rem]">
      <h2 class="text-lg">Résultat du calcul :</h2>
      <p class="text-4xl">
        <?php
        $v1 = intval($_GET['firstvalue']);
        $op = $_GET['operator'];
        $v2 = intval($_GET['secondvalue']);
        echo calculer($v1, $v2, $op);
        ?>
      </p>
    </div>
  <?php endif; ?>
</body>

</html>