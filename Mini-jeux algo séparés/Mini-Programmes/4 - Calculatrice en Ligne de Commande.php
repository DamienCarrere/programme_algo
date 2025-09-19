<?php

while (true) {
    echo "\nBienvenue sur la Calculatrice!\nVous pouvez quitter le programme à tout moment en écrivant \"quit\"\n\nVotre opération : ";
    $calc = trim(fgets(STDIN));

    switch ($calc) {
        case "quit":
            exit;
        default:
            if (!preg_match("/^[0-9\+\-\*\/\(\)\.\s]+$/",  $calc)) {
                echo "Erreur, caratère interdit\n";
                continue;
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
