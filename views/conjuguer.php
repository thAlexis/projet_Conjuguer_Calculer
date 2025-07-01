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
  <title>Conjuguer un verbe du premier groupe</title>
</head>

<body>
  <?php include "./components/navbar.php" ?>
  <h1 class="flex justify-center mt-[2rem] text-2xl">Conjuguer un verbe du premier groupe</h1>
  <div class="w-[100%] flex justify-center mt-[2rem]">
    <form class="flex flex-col items-center w-[min-content] p-[1rem] bg-[#9775fa] rounded-md text-white" method="get" action="">
      <label class="self-start" for="verbeinfinitif">Verbe à conjuguer</label>
      <input class="bg-white w-[15rem] mt-[0.5rem] rounded-sm text-black" type="text" id="verbeinfinitif" name="verbeinfinitif">
      <label class="self-start mt-[1rem]" for="temps">Temps de conjugaison</label>
      <select class="h-[1.5rem] bg-white text-black w-[15rem] mt-[0.5rem] rounded-sm" name="temps">
        <option selected disabled>Selectionner un temps</option>
        <option value="present">Présent</option>
        <option value="futur">Futur</option>
        <option value="imparfait">Imparfait</option>
      </select>
      <button class="mt-[1.5rem] mb-[0.5rem] bg-white text-black p-[0.5rem] rounded-sm cursor-pointer">Conjuguer</button>
    </form>
  </div>
  <div class="flex justify-center">
    <?php
    if (isset($_GET['verbeinfinitif']) && isset($_GET['temps'])) {
      echo "<div class='flex flex-col items-center mt-[2rem]'>";
      echo "<h2 class='text-lg mb-[1rem]'>Résultat de la conjugaison :</h2>";
      echo traiter_verbe($_GET['verbeinfinitif'], $_GET['temps']);
      echo "</div>";
    }
    ?>
  </div>
</body>

</html>