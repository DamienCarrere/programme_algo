<?php


$numberToGuess = random_int(1, 100);
$try = 10;
$founded = false;

for ($i = 1; $i <= $try; $i++) {

    echo "Tentative n°$i : ";
    fscanf(STDIN, "%d", $input);

    if ($input == $numberToGuess) {
        echo "Bravo! Vous avez trouvé le numéro en $i tentatives!\n";
        $founded = true;
        break;
    } elseif ($input > $numberToGuess) {
        echo "C'est moins!\n";
    } else {
        echo "C'est plus!\n";
    }
}

if (!$founded) {
    echo "Perdu. Le nombre à deviner était $numberToGuess";
}
