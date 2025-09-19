<?php
echo "Entrez un nombre N : ";
fscanf(STDIN, "%d", $input);

$tempCalc = 0;
$i = 1;

do {
    $tempCalc = $input * $i;
    echo "\n$input * $i = $tempCalc\n";
    $i++;
} while ($i <= 10);
