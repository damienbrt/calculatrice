<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Calculatrice</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
  
    <body class="flex flex-col items-center justify-center gap-5">
        <div id="bloc_page">
            <header class="flex flex-col gap-5">
                <div id="titre_principal" class="flex flex-col items-center justify-center gap-5">
                <h1 class="text-xl font-bold">Calculatrice</h1>
                    <img src="https://www.svgrepo.com/show/60787/calculator.svg" alt="Logo de david joao" width="200" id="logo" />
                </div>
    <div class="flex flex-col items-center justify-center gap-5">
 
        <form class="flex flex-col items-center justify-center gap-3" name="formulaire" method="post" action="calcul.php">
        <div class="flex flex-row gap-3">    
        <input class="border-2 border-black" name="nombre1" type="text">
            <select class="border-2 border-black" name="choix">
        <option value="addition">+</option>
        <option value="soustraction">-</option>
        <option value="division">/</option>
        <option value="multiplication">*</option>
    </select>
            <input class="border-2 border-black" name="nombre2" type="text" >
            </div>
   
  <div class="flex flex-row gap-3">
        <input class="border-2 border-blue-500 bg-blue-300 rounded-xl p-2" type="submit" value="calculer">
        <input class="border-2 border-blue-500 bg-blue-300 rounded-xl p-2" type="reset" value="effacer"><br>
</div>
        </form>
</div>
 
</body>
</html>
 
<?php
if(isset($_POST['nombre1']) AND isset($_POST['choix']) AND isset($_POST['nombre2'])) // Si les varaibles existent ...
{
    $nombre1 =htmlspecialchars($_POST['nombre1']); // On sécurise ...
    $choix = htmlspecialchars($_POST['choix']);
    $nombre2 = htmlspecialchars($_POST['nombre2']);
 
    if($nombre1 != NULL AND $nombre2 != NULL) // Puis on vérifie leur valeur ...
    {
        if($choix == division AND $nombre2 == 0)
        {
            echo 'On peut pas diviser par 0 voyons !';
        }
        else
        {  
            if($choix == addition)
            {
            $resultat = $nombre1 + $nombre2;
            echo 'La somme de ces deux nombres est '.$resultat;
            }
             
            if($choix == soustraction) // Si on a choisi la soustraction, on calcul la différence.
            {
            $resultat = $nombre1 - $nombre2; // On calcul
            echo 'La différence de ces deux nombres est '.$resultat; // Puis on affiche le résultat
            }
             
            if($choix == multiplication)
            {  
            $resultat = $nombre1 * $nombre2;
            echo 'Le produit de ces deux nombres est '.$resultat;
            }
         
            if($choix == division)
            {
            $resultat = $nombre1 / $nombre2;
            echo 'Le quotient de ces deux nombres est '.$resultat;
            }
        }
        }
    else // Si les champs n'ont pas étaient renseigné, on affiche un message d'erreur ...
    {
    echo 'Veuillez renseigner tous les champs.';
    }
}
?>
