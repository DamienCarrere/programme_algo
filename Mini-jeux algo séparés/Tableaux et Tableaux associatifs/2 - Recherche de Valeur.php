<?php
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
