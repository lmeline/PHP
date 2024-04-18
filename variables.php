<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Variables </h1>
    <?php
        // Déclaration et inialisation de deux variables
        $prenom = "Jean"; // déclaration de variable $prenom
        $nom = "Dujardin"; // déclaration de variable $nom
        // Concaténation de variables et affichage via echo
        echo "Bonjour $prenom $nom ! ";
        // Déclaration de variables sans initailisation 
        $messages;

        //Concaténation de variables et affichage via echo
        $message ="<br> Bonjour ". $prenom. " ".$nom. " !";
        echo $message;
        /*nom des variables commence par un $ peut contenir majuscules, minucules, chiffres, ne doit pas commencer par chiffres, certains caracèteres spéciaux 
        Case sensitive $Text != à $TEXTE (!= n'est pas égal )
        par convention on utilise camelCase
        */

        /*  Type de variables (fonction du contenu)
            chaine de caractères (string) "bonjour"
            entiers (integer)123, -123
            decimaux (float) 123.45
            booléen (boolean) true, false 
            NULL(pas de valeur) NULL
            Tableaux (array)
            Objets (objects)
            */

    ?>
</body>
</html>