<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style type="text/tailwindcss"></style>
  <title>Inscription page</title>
</head>

<body>
  <div class="flex flex-col items-center mt-[10rem]">
    <h1 class="text-4xl">Bienvenue sur Conjuguer et Calculer</h1>
    <div class="bg-[#9775fa] mt-[5rem] flex flex-col items-center w-md pt-[2rem] pb-[2rem] rounded-lg shadow-lg text-white">
      <h2 class="text-2xl">Inscrivez-vous</h2>
      <form action="" method="post" class="flex flex-col items-center w-sm">
        <label for="username" class="self-start mt-[2rem]">Nom d'utilisateur</label>
        <input type="text" id="username" name="username" class="bg-white w-sm mt-[0.5rem] rounded-sm text-black outline-none p-[0.2rem]" />
        <label for="name" class="self-start mt-[2rem]">Nom et prénom</label>
        <input type="text" id="name" name="name" class="bg-white w-sm mt-[0.5rem] rounded-sm text-black outline-none p-[0.2rem]" />
        <label for="password" class="self-start mt-[2rem]">Mot de passe</label>
        <input type="password" id="password" name="password" class="bg-white w-sm mt-[0.5rem] rounded-sm text-black outline-none p-[0.2rem]" />
        <button class="mt-[2rem] bg-white p-[1rem] rounded-lg shadow-lg text-black hover:bg-[#f3f0ff] cursor-pointer">S'inscrire</button>
      </form>
      <p class="mt-[1rem]">Vous avez déjà un compte ? <a class="underline hover:no-underline" href="./connexion_page.php">Connectez-vous</a></p>
    </div>
  </div>
</body>

</html>