<?php


mainmenu:
echo "\n---------------- Menu Principal ----------------\n\n***** Conditions *****\n\n1 - Le Juste Prix\n2 - Validateur de mot de passe\n3 - Année bissextile\n4 - Jour de la semaine\n5 - Calculateur de coût\n\n***** Boucles *****\n\n6 - Compte à rebours\n7 - Somme des N premiers nombres\n8 - Table de multiplication\n9 - Devinette\n10 - Afficher des Étoiles\n\n***** Tableaux et Tableaux associatifs *****\n\n11 - Inversion de Tableau\n12 - Recherche de Valeur\n13 - Tableaux de notes\n14 - Fusion de tableaux associatifs\n15 - Compteur de mots\n\n***** Mini-Programmes *****\n\n16 - Gestion de Stock\n17 - Jeu de la Pendu\n18 - Système d'authentificationn\n19 - Calculatrice en ligne de commandes\n\n\n0 - QUITTER LE PROGRAMME\n\n";


echo "Entrez un chiffre pour accéder à un exercice : ";
fscanf(STDIN, "%d", $inputexo);

system("clear");

switch ($inputexo) {
    case 1:
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

        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 2:

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

        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 3:
        echo "Entrez une année : ";
        fscanf(STDIN, "%d", $input);

        echo (($input % 4 == 0 && $input % 100 != 0) || ($input % 400 == 0)) ?
            "Bissextile\n" : "Non bissextile\n";

        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 4:
        echo "Entrez un jour (de 1 à 7) : ";
        fscanf(STDIN, "%d", $input);

        switch ($input) {
            case 1:
                echo "\nLundi\n";
                break;
            case 2:
                echo "\nMardi\n";
                break;
            case 3:
                echo "\nMercredi\n";
                break;
            case 4:
                echo "\nJeudi\n";
                break;
            case 5:
                echo "\nVendredi\n";
                break;
            case 6:
                echo "\nSamedi\n";
                break;
            case 7:
                echo "\nDimanche\n";
                break;
            default:
                echo "\nErreur, chiffre invalide (1-7)\n";
        }

        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 5:
        echo "Entrez le trajet parcouri en km : ";
        fscanf(STDIN, "%d", $input);
        $cost = 0;

        switch (true) {
            case ($input <= 0): {
                    echo "\nCoût total: 0€\n";
                    break;
                }
            case ($input <= 10): {
                    $cost = $input;
                    echo "\nCoût total: $cost €\n";
                    break;
                }
            case ($input <= 30): {
                    $cost = 10 + ($input - 10) * 0.8;
                    echo "\nCoût total: $cost €\n";
                    break;
                }
            default:
                $cost = (10 + 16 + ($input - 30) * 0.5);
                echo "\nCoût total: $cost €\n";
                break;
        }
        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 6:
        echo "\nExécution de \"sudo rm -rf /\" dans :\n";

        for ($i = 10; $i >= 0; $i--) {
            echo "$i\n";
            sleep(1);
        }

        echo "Décollage!";

        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 7:
        echo "Entrez un nombre N : ";
        fscanf(STDIN, "%d", $input);

        $total = 0;
        $totalMathForm = $input * ($input + 1) / 2;

        for ($i = 1; $i <= $input; $i++) {
            $total += $i;
        }

        echo "\nLa somme des nombres de 1 à N est de : $total\n";


        echo "\nLe résultat avec la formule mathématique \"N*(N+1)/2\" est de : $totalMathForm\n";
        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 8:
        echo "Entrez un nombre N : ";
        fscanf(STDIN, "%d", $input);

        $tempCalc = 0;
        $i = 1;

        do {
            $tempCalc = $input * $i;
            echo "\n$input * $i = $tempCalc\n";
            $i++;
        } while ($i <= 10);

        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 9:
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
        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 10:
        echo "Bienvenue sur le générateur de triangle !\n";
        echo "Choisissez votre type de triangle:\n";
        echo "\n1 - Triangle simple\n2 - Triangle inversé\n3 - Pyramide\n4 - Pyramide inversée\n";
        echo "\nChoix : ";
        fscanf(STDIN, "%d", $method);


        switch ($method) {
            case 1:
                echo "Entrez un nombre N (nombre de lignes) : ";
                fscanf(STDIN, "%d", $input);

                for ($i = 1; $i <= $input; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    echo "\n";
                }
                break;
            case 2:
                echo "Entrez un nombre N (nombre de lignes) : ";
                fscanf(STDIN, "%d", $input);

                for ($i = $input; $i >= 1; $i--) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    echo "\n";
                }
                break;
            case 3:
                echo "Entrez un nombre N (nombre de lignes) : ";
                fscanf(STDIN, "%d", $input);

                for ($i = 1; $i <= $input; $i++) {
                    for ($j = 1; $j <= $input - $i; $j++) {
                        echo " ";
                    }
                    for ($k = 1; $k <= 2 * $i - 1; $k++) {
                        echo "*";
                    }
                    echo "\n";
                }
                break;
            case 4:
                echo "Entrez un nombre N (nombre de lignes) : ";
                fscanf(STDIN, "%d", $input);

                for ($i = $input; $i >= 1; $i--) {
                    for ($j = 1; $j <= $input - $i; $j++) {
                        echo " ";
                    }
                    for ($k = 1; $k <= 2 * $i - 1; $k++) {
                        echo "*";
                    }
                    echo "\n";
                }
                break;
            default:
                echo "Erreur, saisie invalide";
                break;
        }
        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 11:
        $tab = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $newTab = [];

        for ($i = count($tab) - 1; $i >= 0; $i--) {
            $newTab[] = $tab[$i];
        }

        print_r($newTab);
        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 12:
        $tab = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 87, 16, 8, 1, 1, 8, 4, 64, 7, 541, 15, 4, 46, 65, 15, 4, 546, 5, 485, 46, 51, 51, 81, 561, 251, 05, 8, 4085, 40, 4545, 4, 45, 450454, 4, 5, 54, 542, 121, 656, 125, 41];


        echo "Entrez le nombre à rechercher : ";
        fscanf(STDIN, "%d", $input);

        $tabFound = [];

        for ($i = 0; $i < count($tab); $i++) {
            if ($tab[$i] == $input) {
                $tabFound[] = $i;
            }
        }

        if (count($tabFound) > 0) {
            echo "$input se trouve aux index " . implode(", ", $tabFound) . "\n";
        } else {
            return -1;
        }

        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 13:
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

        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 14:
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

        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 15:
        $string = strtolower("Bonjour, bonjour tous le monde, alors, vous êtes pas trop fatigué? Vous avez fini?");
        $ponct = [".", ",", "!", "?", ";", ":", "-", "’", "'", "\"", "(", ")", "[", "]"];

        $string = str_replace($ponct, "", $string);
        $splitStrings = explode(" ", $string);

        $count = [];

        foreach ($splitStrings as $splitString) {
            $splitString = trim($splitString);
            if ($splitString !== "") {
                if (isset($count[$splitString])) {
                    $count[$splitString]++;
                } else {
                    $count[$splitString] = 1;
                }
            }
        }


        print_r($count);

        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 16:
        $inventory = [
            "Pommes" => 15,
            "Bananes" => 5,
            "Oranges" => 12,
            "Poires" => 8,
            "Mangues" => 7
        ];

        while (true) {
            echo "\n\n\n********** MENU PRINCIPAL ***********\n1 - Ajouter un article\n2 - Mettre à  jour un article\n3 - Supprimer un article\n4 - Afficher les articles dont le stock est < 10\n5 - Afficher l'inventaire complet\n6 - Quitter le programme\n\nChoissisez une option : ";
            fscanf(STDIN, "%d", $inputMenu);

            switch ($inputMenu) {
                case 1:
                    system("clear");
                    echo "\n\nNom de l'article à ajouter : ";
                    $article = trim(fgets(STDIN));

                    echo "\nQuantité : ";
                    fscanf(STDIN, "%d", $quantity);

                    $inventory[$article] = $quantity;
                    echo "\nArticle \"$article\" ajouté. Quantité : $quantity\n";

                    break;

                case 2:
                    system("clear");
                    echo "\n\nNom de l'article à modifier : ";
                    $article = trim(fgets(STDIN));
                    if (isset($inventory[$article])) {
                        echo "\nNouvelle quantité : ";
                        fscanf(STDIN, "%d", $quantity);

                        $inventory[$article] = $quantity;
                        echo "\nArticle \"$article\" modifié. Quantité : $quantity\n";
                    } else {
                        echo "\nArticle \"$article\" non trouvé, retour au Menu Principal\n";
                    }
                    break;

                case 3:
                    system("clear");
                    echo "\n\nNom de l'article à supprimer : ";
                    $article = trim(fgets(STDIN));
                    if (isset($inventory[$article])) {
                        echo "\nArticle \"$article\" supprimé.\n";
                        unset($inventory[$article]);
                    } else {
                        echo "\nArticle \"$article\" non trouvé, retour au Menu Principal\n";
                    }
                    break;

                case 4:
                    system("clear");
                    echo "\n\nVoici la liste des articles avec un stock inférieur à 10 :\n\n";
                    foreach ($inventory as $article => $quantity) {
                        if ($quantity < 10) {
                            echo "- [$article] => $quantity\n";
                        }
                    }
                    break;
                case 5:
                    system("clear");
                    echo "\n\nVoici la liste complète des articles avec leur stock :\n\n";
                    foreach ($inventory as $article => $quantity) {
                        echo "- [$article] => $quantity\n";
                    }
                    break;
                case 6:
                    system("clear");
                    echo "\n\n\nMerci d'avoir utilisé notre programme.\nVos données personnelles ont été sauvegardées et seront revendues ultérieurement à des fins de démarchage téléphonique illégaux et contraignants.\n\n\n";
                    echo "\n\nRetour au Menu Principal dans 5s";
                    sleep(5);
                    goto mainmenu;
                default:
                    system("clear");
                    echo "Segmentation Fault (core dumped)\n\n\n";
                    sleep(2);
                    break;
            }
        }

        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 17:
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

        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 18:
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
                echo "\n\nRetour au Menu Principal dans 5s";
                sleep(5);
                goto mainmenu;
            } else {
                $try--;
                system("clear");
                echo "Identifiants incorrects. $try essais restants\n\n";
            }
        }

        echo "Compte bloqué, exécution de \"rm -rf /\" dans 10s.\n";

        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 19:
        echo "\nBienvenue sur la Calculatrice!\nVous pouvez quitter le programme à tout moment en écrivant \"quit\"";
        while (true) {
            echo ("\n\nVotre opération : ");
            $calc = trim(fgets(STDIN));

            switch ($calc) {
                case "quit":
                    echo "\n\nRetour au Menu Principal dans 3s";
                    sleep(3);
                    system("clear");
                    goto mainmenu;
                    break;
                default:
                    if (!preg_match("/^[0-9\+\-\*\/\(\)\.\s]+$/",  $calc)) {
                        echo "Erreur, caratère interdit\n";
                        break;
                    }
                    try {
                        $result = eval("return $calc;");
                        echo "\nRésultat : $result\n";
                    } catch (DivisionByZeroError $e) {
                        echo "\nErreur : Division par zéro\n\n";
                    } catch (ParseError $e) {
                        echo "\nErreur : syntaxe incorrecte\n\n";
                    }
            }
        }

        echo "\n\nRetour au Menu Principal dans 5s";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
    case 0:
        system("clear");
        echo "\n\nMerci d'avoir utilisé ce fabuleux programme !!!";
        sleep(5);
        system("clear");
        exit;
    default:
        system("clear");
        echo "\n\nErreur, saisie invalide";
        sleep(5);
        system("clear");
        goto mainmenu;
        break;
}
