<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-col items-center gap-5">
        <?php
        if (isset($_POST['nombre1']) and isset($_POST['choix']) and isset($_POST['nombre2'])) // Si les varaibles existent ...
        {
            $nombre1 = htmlspecialchars($_POST['nombre1']); // On sécurise ...
            $choix = htmlspecialchars($_POST['choix']);
            $nombre2 = htmlspecialchars($_POST['nombre2']);

            if ($nombre1 != NULL and $nombre2 != NULL) // Puis on vérifie leur valeur ...
            {
                if (is_numeric($nombre1) and is_numeric($nombre2)) { // On vérifie que les nombres sont numériques
                    if ($choix == "division" and $nombre2 == 0) {
                        echo 'On peut pas diviser par 0 voyons !';
                    } else {
                        if ($choix == "addition") {
                            $resultat = $nombre1 + $nombre2;
                            echo 'La somme de ces deux nombres est ' . $resultat;
                        }

                        if ($choix == "soustraction") // Si on a choisi la soustraction, on calcul la différence.
                        {
                            $resultat = $nombre1 - $nombre2; // On calcul
                            echo 'La différence de ces deux nombres est ' . $resultat; // Puis on affiche le résultat
                        }

                        if ($choix == "multiplication") {
                            $resultat = $nombre1 * $nombre2;
                            echo 'Le produit de ces deux nombres est ' . $resultat;
                        }

                        if ($choix == "division") {
                            $resultat = $nombre1 / $nombre2;
                            echo 'Le quotient de ces deux nombres est ' . $resultat;
                        }
                    }
                } else {
                    echo 'Veuillez renseigner les champs par des valeurs numériques';
                }
            } else // Si les champs n'ont pas étaient renseigné, on affiche un message d'erreur ...
            {
                echo 'Veuillez renseigner tous les champs.';
            }
        }
        ?>
        <a href="ihm.php" class="border-2 border-blue-500 bg-blue-200 rounded-xl p-2">Revenir sur la calculatrice</a>
    </div>
</body>

</html>