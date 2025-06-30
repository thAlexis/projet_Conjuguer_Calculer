<?php
if (isset($_GET['modifybtn']) && $_GET['modifybtn'] == "modify") : ?>
  <?php $user_info = get_user_by_session_username($_SESSION['username_logged']); ?>
  <div class="w-[100%] flex justify-center">
    <form class="w-[min-content] flex flex-col items-center mt-[5rem]" method="post" action="../src/controllers/user_controller.php">
      <label class="self-start" for="username">Nom d'utilisateur</label>
      <input class="mt-[0.1rem] p-[0.2rem] rounded-sm outline-2 outline-[#9775fa]" type="text" id="username" name="username" value="<?= $user_info['username'] ?>" />
      <label class="mt-[2rem] self-start" for="name">Nom et prénom</label>
      <input class="mt-[0.1rem] p-[0.2rem] rounded-sm outline-2 outline-[#9775fa]" type="text" id="name" name="name" value="<?= $user_info['name'] ?>" />
      <label class="mt-[2rem] self-start" for="password">Mot de passe</label>
      <input class="mt-[0.1rem] p-[0.2rem] rounded-sm outline-2 outline-[#9775fa]" type="password" id="password" name="password" value="<?= $user_info['password'] ?>" />
      <button class="mt-[2rem] p-[0.5rem] rounded-sm bg-[#9775fa] text-white cursor-pointer hover:bg-[#9911fa]">Enregistrer</button>
    </form>
  </div>
<?php endif; ?>