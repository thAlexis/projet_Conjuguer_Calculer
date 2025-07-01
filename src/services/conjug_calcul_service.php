<?php

include __DIR__ . "../../repositories/history_repository.php";

function traiter_verbe($infinitif, $temps)
{
  $terminaisons_futur = ['erai', 'eras', 'era', 'erons', 'erez', 'eront'];
  $terminaisons_present = ['e', 'es', 'e', 'ons', 'ez', 'ent'];
  $terminaisons_imparfait = ['ais', 'ais', 'ait', 'ions', 'iez', 'aient'];
  $resultat = "";
  $radical = substr($infinitif, 0, strlen($infinitif) - 2);
  if ($temps == "present") {
    $resultat = conjuguer($radical, $terminaisons_present);
  } elseif ($temps == "futur") {
    $resultat = conjuguer($radical, $terminaisons_futur);
  } else {
    $resultat = conjuguer($radical, $terminaisons_imparfait);
  }
  return $resultat;
}

function conjuguer($radical, $terminaisons)
{

  $pronoms = ['Je ', 'Tu ', 'IL/Elle ', 'Nous ', 'Vous ', 'Ils '];

  $resultat = "<ul class=resultat>";
  foreach ($pronoms as $key => $pronom) {
    $resultat .= "<li>$pronom $radical" . $terminaisons[$key] . "</li>";
  }
  $resultat .= "</ul>";
  return $resultat;
}

function display_conjug_histo()
{
  $user_logged = $_SESSION['username_logged'];
  $userid = get_user_id($user_logged)['id'];
  $results = select_verbe_temps($userid);
  echo "<ul class='flex flex-col items-center mt-[2rem]'>";
  foreach ($results as $result) {
    echo "<li class='mt-[0.5rem]'>Vous avez conjugué <strong>" . $result['verbe'] . "</strong> au temps <strong>" . $result['temps'] . "</strong></li>";
  };
  echo "</ul>";
};
