<?php
$numberToGuess = random_int(1, 10);
$try = 3;
$founded = false;

echo "Devinez le nombre entre 1 et 10\n";

for ($i = 1; $i <= $try; $i++) {

    echo "Tentative n°$i : ";
    fscanf(STDIN, "%d", $input);

    if ($input == $numberToGuess) {
        echo "Bravo! Vous avez trouvé le numéro en $i tentatives!\n";
        $founded = true;
        break;
    } elseif ($input > $numberToGuess) {
        echo "Trop grand!\n";
    } else {
        echo "Trop petit!\n";
    }
}

if (!$founded) {
    echo "Perdu. Le nombre à deviner était $numberToGuess\n";
}
