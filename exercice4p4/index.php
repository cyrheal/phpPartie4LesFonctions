<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice4</title>
    </head>
    <body>
        <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

            Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
            Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
            Les deux nombres sont identiques si les deux nombres sont égaux
        </p>
                 <?php
                //déclaration de la fonction
                function number($Number1, $Number2) {
                    if ($Number1 > $Number2) {
                        return 'Le premier chiffre est plus grand';
                    } elseif ($Number1 < $Number2) {
                        return 'Le premier chiffre est plus petit';
                    } else {
                        return 'Les chiffres sont identiques';
                    }
                }
                //Déclaration des deux chiffres
                $nb1 = 14;
                $nb2 = 18;
                echo number($nb1, $nb2);
                ?>
    </body>
</html>