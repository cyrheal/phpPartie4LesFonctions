<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice2</title>
    </head>
    <body>
        <p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
        <?php
        $myChain = 'Ma chaine de caractère';

        function myFunction($ReturnChain) {
            return 'voici ma phrase ' . $ReturnChain;
        }

        echo myFunction($myChain);
        ?>
    </body>
</html>

