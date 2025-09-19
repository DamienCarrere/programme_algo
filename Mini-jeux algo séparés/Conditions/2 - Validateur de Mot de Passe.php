<?php

echo "Entrez votre mot de passe : ";
$input = trim(fgets(STDIN));

$length = strlen($input);
$maj = false;
$num = false;
$spe = false;

for ($i = 0; $i < $length; $i++) {
    $tabChar = $input[$i];
    switch (true) {
        case ctype_upper($tabChar):
            $maj = true;
            break;
        case ctype_digit($tabChar):
            $num = true;
            break;
        case (!ctype_alnum($tabChar)):
            $spe = true;
            break;
    }
}

switch (true) {
    case ($length < 8):
        echo "\nMot de passe invalide : il doit faire au moins 8 caractères\n";
        break;
    case (!$maj):
        echo "\nMot de passe invalide : il faut au moins une majuscule\n";
        break;
    case (!$num):
        echo "\nMot de passe invalide : il faut au moins un chiffre\n";
        break;
    case (!$spe):
        echo "\nMot de passe invalide : il faut au moins un caractère spécial\n";
        break;
    default:
        echo "\nC'est ok!\n";
}
