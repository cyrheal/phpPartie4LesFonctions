<?php
function concatChain($ReturnChain1, $ReturnChain2) {
    return '<p>Récupération de mes deux chaines : </p><p>' . $ReturnChain1 . '</p> ' . $ReturnChain2 . '!';
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice3</title>
    </head>
    <body>
        <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines</p>
        <?php
        $chainOne = 'Ma première chaine de caractère';
        $chainTwo = 'Et là ma deuxième chaine de caractère';
        echo concatChain($chainOne, $chainTwo);
        ?>
    </body>
</html>