<?php

$tab = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$newTab = [];

for ($i = count($tab) - 1; $i >= 0; $i--) {
    $newTab[] = $tab[$i];
}

print_r($newTab);
