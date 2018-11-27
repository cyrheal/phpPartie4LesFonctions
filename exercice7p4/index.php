<?php

//déclaration de la fonction
function sexAge($age, $genre) {
    if ($age > 0 && ($genre == 'Homme' || $genre == 'Femme')) {
        if ($genre == 'Homme') {
            $genre = 1;
        } else {
            $genre = 2;
        }
        if ($age >= 18 && $genre == 1) {
            return'Vous êtes un Homme et vous êtes majeur';
        } elseif ($age >= 18 && $genre == 2) {
            return 'Vous êtes une Femme et vous êtes majeure';
        } elseif ($age < 18 && $genre == 1) {
            return 'Vous êtes un Homme et vous êtes mineur';
        } elseif ($age < 18 && $genre == 2) {
            return 'Vous êtes une Femme et vous êtes mineure';
        }
    } else {
        return 'Merci de saisir les bonnes informations';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice7</title>
    </head>
    <body>
        <p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :

            Homme
            Femme

            La fonction doit renvoyer en fonction des paramètres :

            Vous êtes un homme et vous êtes majeur
            Vous êtes un homme et vous êtes mineur
            Vous êtes une femme et vous êtes majeur
            Vous êtes une femme et vous êtes mineur

            Gérer tous les cas.</p>
<?= sexAge(18, 'Homme'); ?>

    </body>
</html>