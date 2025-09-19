<?php

$etudiants = [
    "Pierre" => [12, 15, 14],
    "Eszter" => [8, 9, 7],
    "Élodie" => [10, 10, 10],
    "Joao" => [2, 6, 20],
    "Jordan" => [4, 20, 17],
    "Valentin" => [12, 10, 10],
    "Brian" => [16, 17, 18]
];


foreach ($etudiants as $nom => $notes) {
    $moy = number_format(array_sum($notes) / count($notes), 2);
    $max = max($notes);
    $min = min($notes);
    echo "\nÉtudiant : $nom\n  Moyenne : $moy\n  Meilleure note : $max\n  Plus faible note : $min\n";
}
