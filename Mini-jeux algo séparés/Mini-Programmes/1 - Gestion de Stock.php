<?php
$inventory = [
    "Pommes" => 15,
    "Bananes" => 5,
    "Oranges" => 12,
    "Poires" => 8,
    "Mangues" => 7
];

while (true) {
    echo "\n\n\n********** MENU PRINCIPAL ***********\n1 - Ajouter un article\n2 - Mettre à  jour un article\n3 - Supprimer un article\n4 - Afficher les articles dont le stock est < 10\n5 - Afficher l'inventaire complet\n6 - Quitter le programme\n\nChoissisez une option : ";
    fscanf(STDIN, "%d", $inputMenu);

    switch ($inputMenu) {
        case 1:
            system("clear");
            echo "\n\nNom de l'article à ajouter : ";
            $article = trim(fgets(STDIN));

            echo "\nQuantité : ";
            fscanf(STDIN, "%d", $quantity);

            $inventory[$article] = $quantity;
            echo "\nArticle \"$article\" ajouté. Quantité : $quantity\n";

            break;

        case 2:
            system("clear");
            echo "\n\nNom de l'article à modifier : ";
            $article = trim(fgets(STDIN));
            if (isset($inventory[$article])) {
                echo "\nNouvelle quantité : ";
                fscanf(STDIN, "%d", $quantity);

                $inventory[$article] = $quantity;
                echo "\nArticle \"$article\" modifié. Quantité : $quantity\n";
            } else {
                echo "\nArticle \"$article\" non trouvé, retour au Menu Principal\n";
            }
            break;

        case 3:
            system("clear");
            echo "\n\nNom de l'article à supprimer : ";
            $article = trim(fgets(STDIN));
            if (isset($inventory[$article])) {
                echo "\nArticle \"$article\" supprimé.\n";
                unset($inventory[$article]);
            } else {
                echo "\nArticle \"$article\" non trouvé, retour au Menu Principal\n";
            }
            break;

        case 4:
            system("clear");
            echo "\n\nVoici la liste des articles avec un stock inférieur à 10 :\n\n";
            foreach ($inventory as $article => $quantity) {
                if ($quantity < 10) {
                    echo "- [$article] => $quantity\n";
                }
            }
            break;
        case 5:
            system("clear");
            echo "\n\nVoici la liste complète des articles avec leur stock :\n\n";
            foreach ($inventory as $article => $quantity) {
                echo "- [$article] => $quantity\n";
            }
            break;
        case 6:
            system("clear");
            echo "\n\n\nMerci d'avoir utilisé notre programme.\nVos données personnelles ont été sauvegardées et seront revendues ultérieurement à des fins de démarchage téléphonique illégaux et contraignants.\n\n\n";
            exit;
        default:
            system("clear");
            echo "Segmentation Fault (core dumped)\n\n\n";
            sleep(2);
            break;
    }
}
