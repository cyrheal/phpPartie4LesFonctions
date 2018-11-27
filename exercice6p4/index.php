<?php
//Déclaration de mes variables
$firstName = 'Cyril';
$lastName = 'Simonot';
$age = 32;

//déclaration de la fonction
function myFunction($param1, $param2, $param3) {
    $returnConcat = 'Bonjour ' . $param1 . ' ' . $param2 . ' , tu as ' . $param3 . ' ans<br />';
    return $returnConcat;
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice6</title>
    </head>
    <body>
        <p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :
            "Bonjour" + nom + prénom + ",tu as" + age + "ans".</p>

<?= myFunction($firstName, $lastName, $age); ?>
    </body>
</html>