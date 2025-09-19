<?php

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
