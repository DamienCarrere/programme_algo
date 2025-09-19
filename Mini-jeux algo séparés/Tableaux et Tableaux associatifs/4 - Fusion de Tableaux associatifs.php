<?php

$tab1 = [
    "Pierre" => 12,
    "Eszter" => 8,
    "Élodie" => 10,
    "Joao" => 20,
    "Jordan" => 4,
    "Valentin" => 12,
    "Brian" => 16
];

$tab2 = [
    "Carla" => 2,
    "Élodie" => 15,
    "Chloé" => 13
];

$tabFinal = $tab1;

foreach ($tab2 as $key => $note) {
    $tabFinal[$key] = $note;
}

print_r($tabFinal);
