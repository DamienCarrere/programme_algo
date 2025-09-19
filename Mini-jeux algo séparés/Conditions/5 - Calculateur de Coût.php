<?php
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
