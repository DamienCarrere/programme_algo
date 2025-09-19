<?php
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
