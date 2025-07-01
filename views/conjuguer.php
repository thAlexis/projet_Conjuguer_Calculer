<?php
session_start();
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
    <form class="flex flex-col items-center w-[min-content] p-[1rem] bg-[#9775fa] rounded-md text-white" method="get">
      <label class="self-start" for="verbeinfinitif">Verbe à conjuguer</label>
      <input class="bg-white w-[15rem] mt-[0.5rem] rounded-sm" type="text" id="verbeinfinitif" name="verbeinfinitif">
      <label class="self-start mt-[1rem]" for="temps">Temps de conjugaison</label>
      <select class="bg-white text-black w-[15rem] mt-[0.5rem] rounded-sm" name="temps">
        <option selected disabled>Selectionner un temps</option>
        <option value="present">Présent</option>
        <option value="futur">Futur</option>
        <option value="imparfait">Imparfait</option>
      </select>
      <button class="mt-[1.5rem] mb-[0.5rem] bg-white text-black p-[0.5rem] rounded-sm">Conjuguer</button>
    </form>
  </div>
</body>

</html>