<?php
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
