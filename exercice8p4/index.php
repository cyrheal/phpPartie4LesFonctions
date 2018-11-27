<?php
//déclaration de la fonction
function functionAdd($number1 = 150, $number2 = 3800, $number3 = 4335) {
    $result = $number1 + $number2 + $number3;
    return $result;
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice8</title>
    </head>
    <body>
        <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
            Tous les paramètres doivent avoir une valeur par défaut.</p>
     <?= functionAdd(); // Affichage du resultat de ma fonction ?>
    </body>
</html>