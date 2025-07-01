<?php

if (!isset($_SESSION['username_logged'])) {
  header("location: ../connexion_page.php");
};
