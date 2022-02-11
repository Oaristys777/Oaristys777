<?php
/* Récupération des saisies d'un formulaire et affichage sur la page web via la superglobal $_POST(en majuscule)
Sans le if, la 1ère fois lorsque nous n'avons rien posté, nous avons 2 erreurs Undefine index et son nom, mais cela n'empeche pas l'exemple de fonctionner.
C'est dû au fait que quand on clic sur le bouton "envoi" le code se recharge, il est ré-exécuté et par conséquent le $_POST n'est plus undefine.
Sans l'attribut NAME dans l'HTML, nous ne pourrions pas réucpérer les informations saisies. Un formulaire est toujours compris dans les balises <form></form>  
Contexte et cas d'utilisation: Nous pourrons, plus tard, envoyer ces données dasn une BDD (C'est comme cela que fonctionne les pages d'inscription d'un site internet).
*/
if($_POST)// si on a cliquer sur le bouton "envoi"
{
    echo "prénom: " . $_POST['prenom'] . "<br>";
    echo "description: " . $_POST['description'] . "<br>";
}
// La toute première fois quand on clic sur l'url et qu'on fais "entrer", nous ne rentrons pas dans le IF.
//Toutes les fois suivantes si nous cliquons sur le bouton "envoi", le code se ré-exécute et nous rentrons dans le IF.

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        label{float: left; width:95px; font-size: italic; font-family: Calibri;}
        h1{margin:0 0 10px 200px; font-family: Calibri;}
    </style>
</head>
<body>
    <hr>
    <h1>Formulaire</h1>
    <form method="post" action=""><!-- method : Comment vont circuler les données ? - action: url de destination.  -->
        <label for="prenom">prenom</label>
        <input type="text" name="prenom" id="prenom"><!-- il ne faut surtout pas oublier les name sur les formualire HTML -->
        <br>
        <label for="description">description</label>
        <textarea name="description" id="description"></textarea>
        <br>
        <input type="submit">
        <!-- L'attribut id n'est pas indispensable, il permet de relié le label à l'input. De cette manière, quand nous cliquons sur l'etiquette le curseru se place dans la case : norme accessiweb. -->
    </form>
    
</body>
</html>