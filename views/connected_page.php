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
  <title>vous etes connecté</title>
</head>

<body>
  <?php include "./components/navbar.php"; ?>
  <h1 class="flex justify-center mt-[10rem] text-4xl">Bonjour
    <?php
    if (isset($_SESSION['username_logged'])) {
      echo $_SESSION['username_logged'];
    };
    ?></h1>
</body>

</html>