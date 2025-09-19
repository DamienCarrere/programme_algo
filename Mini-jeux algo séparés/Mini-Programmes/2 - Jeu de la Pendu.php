<?php
$wordToGuess = "tapaluladoc";
$wordToSecret = str_repeat("_", strlen($wordToGuess));
$life = 10;
$userLetters = [];


while ($life > 0 && $wordToSecret !== $wordToGuess) {
    system("clear");


    echo "********************* Jeu de la Pendu *********************\n(Faut pas me juger c'était écrit comme ça dans la consigne)\n\n";
    echo "\nMot à deviner : " . implode(" ", str_split($wordToSecret)) . "\n";
    echo "\n\nVies restantes : $life\n";
    echo "\nLettres utilisées : " . implode(", ", $userLetters) . "\n\n";
    echo "Votre lettre : ";
    $letter = strtolower(trim(fgets(STDIN)));


    if (strlen($letter) !== 1 || !preg_match("/[a-z]/", $letter)) {
        echo "\n\nCaractère invalide, veuillez entrer une lettre valide\n";
        sleep(1);
        continue;
    }
    if (in_array($letter, $userLetters)) {
        echo "\n\nVous avez déjà proposé la lettre $letter\n";
        sleep(1);
        continue;
    }

    $userLetters[] = $letter;

    if (strpos($wordToGuess, $letter) !== false) {
        for ($i = 0; $i < strlen($wordToGuess); $i++) {
            if ($wordToGuess[$i] === $letter) {
                $wordToSecret[$i] = $letter;
            }
        }
    } else {
        $life--;
    }
}

if ($wordToGuess === $wordToSecret) {
    echo "\n\n\nBravo! Tu as gagné !!!\n";
} else {
    system("clear");
    echo "C'est dommage, le mot était \"$wordToGuess\"\n";
}
