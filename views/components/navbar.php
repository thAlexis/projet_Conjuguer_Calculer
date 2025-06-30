<nav class="flex justify-between items-center pr-[1rem] pl-[1rem]
  bg-[#9775fa] text-white h-[4rem] text-lg shadow-md">
  <?php
  if (isset($_SESSION['username_logged'])) {
    echo '<ul class="flex justify-between w-[11rem] ">
    <li><a href="">Conjuguer</a></li>
    <li><a href="">Calculer</a></li>
  </ul>
  <ul class="flex justify-between w-[16rem]">
  <li><a href="">Mon compte</a></li>
  <li><a href="../src/services/logout.php">Se déconnecter</a></li>
  </ul>';
  } else {
    echo '<a href="../connexion_page" class="justify-self-end">Se connecter</a>';
  };
  ?>
</nav>