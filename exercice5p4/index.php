<?php
//déclaration de la fonction
function concatFunction($param1, $param2) {
    return 'Bonjour ' . $param1 . ' ! Tu as ' . $param2 . ' ans<br />';
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
    </head>
    <body>
        <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
       <?php
                //Déclaration des deux chiffres
                $name = 'Cyril';
                $age = 32;
                echo concatFunction($name, $age);
                ?>
    </body>
</html>