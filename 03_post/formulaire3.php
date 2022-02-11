<?php
// Exercice : Réaliser un formulaire avec la méthode post en affichant les informations directement sur le formulaire4.php

?>
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire exercice</h1>
    <!-- Exercice : A vous de créer le formulaire et de récuperer les saisies juste au dessus en précisant l'étiquette correspondate :
        - vous avez votre formulaire au format HTML 
        - procéder à la récuperation des informations du $_POST
        - corriger lees erreurs indéfinie index lors de la 1ère fois sur la page.
        
    -->
        
    <form action="formulaire4.php" method="post"><!-- Une fois les données saisies puis envoyées vous serai redirigé vers la page formulaire4.php et vous pourrez lire les données postées -->
    <label for="pseudo ">Pseudo</label>
    <input type="text" name="pseudo" id="pseudo">
    <br>
    <label for="texte">Votre texte</label>
    <textarea name="texte" id="texte"></textarea>
    <br>
    <input type="submit" value="envoyer">
    </form>
</body>
</html>