<?php
echo "Entrez un nombre N : ";
fscanf(STDIN, "%d", $input);

$total = 0;
$totalMathForm = $input * ($input + 1) / 2;

for ($i = 1; $i <= $input; $i++) {
    $total += $i;
}

echo "\nLa somme des nombres de 1 à N est de : $total\n";


echo "\nLe résultat avec la formule mathématique \"N*(N+1)/2\" est de : $totalMathForm\n";
