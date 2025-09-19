<?php

$users = [
    "wahid"  => "wahidpass",
    "eszter"  => "eszterpass",
    "elodie"  => "elodiepass",
    "joao"    => "joaopass"
];

$try = 3;

while ($try > 0) {
    echo "Nom d'utilisateur : ";
    $username = strtolower(trim(fgets(STDIN)));

    echo "Mot de passe : ";
    $password = trim(fgets(STDIN));

    if (isset($users[$username]) && $users[$username] === $password) {
        echo "Bienvenue $username\n";
        exit;
    } else {
        $try--;
        system("clear");
        echo "Identifiants incorrects. $try essais restants\n\n";
    }
}

echo "Compte bloqué, exécution de \"rm -rf /\" dans 10s.\n";
