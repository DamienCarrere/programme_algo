<?php
echo "Entrez une année : ";
fscanf(STDIN, "%d", $input);

echo (($input % 4 == 0 && $input % 100 != 0) || ($input % 400 == 0)) ?
    "Bissextile\n" : "Non bissextile\n";
