<nav class="flex justify-between items-center pr-[1rem] pl-[1rem]
  bg-[#9775fa] text-white h-[4rem] text-lg shadow-md">
  <?php
  if (isset($_SESSION['username_logged'])) {
    echo '<ul class="flex justify-between w-[11rem] ">
    <li><a href="./conjuguer.php">Conjuguer</a></li>
    <li><a href="">Calculer</a></li>
  </ul>
  <ul class="flex justify-between w-[16rem]">
  <li><a href="./connected_page.php">Mon compte</a></li>
  <li><a href="../src/services/logout.php">Se déconnecter</a></li>
  </ul>';
  } else {
    echo '<div class="flex gap-[1rem] justify-end w-[100%]">
    <a href="../connexion_page.php">Connexion</a>
    <a href="../inscription_page.php">Incription</a>
    </div>';
  };
  ?>
</nav>