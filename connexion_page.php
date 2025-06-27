<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page de connexion</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style type="text/tailwindcss"></style>
</head>

<body>
  <div class="flex flex-col items-center mt-[10rem]">
    <h1 class="text-4xl">Bienvenue sur Conjuguer et Calculer</h1>
    <div class="bg-[#9775fa] mt-[5rem] flex flex-col items-center w-md pt-[2rem] pb-[2rem] rounded-lg shadow-lg text-white">
      <h2 class="text-2xl">Connectez-vous</h2>
      <form action="" method="post" class="flex flex-col items-center w-sm">
        <label for="username" class="self-start mt-[2rem]">Nom d'utilisateur</label>
        <input type="text" id="username" name="username" class="bg-white w-sm mt-[0.5rem] rounded-sm text-black outline-none p-[0.2rem]" />
        <label for="password" class="self-start mt-[2rem]">Mot de passe</label>
        <input type="password" id="password" name="password" class="bg-white w-sm mt-[0.5rem] rounded-sm text-black outline-none p-[0.2rem]" />
        <button class="mt-[2rem] bg-white p-[1rem] rounded-lg shadow-lg text-black hover:bg-[#f3f0ff] cursor-pointer">Se connecter</button>
      </form>
      <p class="mt-[1rem]">Vous n'avez pas de compte ? <a class="underline hover:no-underline" href="">Inscrivez-vous</a></p>
    </div>
  </div>

</body>

</html>