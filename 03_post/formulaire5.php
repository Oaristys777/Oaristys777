<?php

/*
Envoi d'un mail au format texte
Pour que cet exemple fonctionne il faut: 
- Se rendre sur le panel de Mampp cliquer sur config > PHP (php.ini) et effectuer un ctrl+f avec inscrit "smtp" > Recherche 'suivant'. 
- Sur la ligne SMTP = Localhost, il faut remplacer par SMTP = smtp.fai.fr (il s'agit de votre fournisseur d'acces à internet).
- CTRL + s et ensuite fermer le fichier, puis quitter le pannel de Wampp > stopper puis demarer les services. 
Ca peut etre bien de faire un sauvegarde du php.ini avant de le changer.
*/
if($_POST)
{
    echo $_POST['destinataire'];
    echo $_POST['sujet'];
    echo $_POST['message'];
    echo $_POST['expediteur'];

    $_POST['expediteur'] = "From:$_POST[expediteur] \n"; //sans cotes au deuxième expéditeur. spécifique à l'envoi d'email! + espaces autours du =
    $_POST['expediteur'] .= "MIME-Version: 1.0 \r \n"; //c'est le code qui spécifie qu'on envoi un mail
    $_POST['expediteur'] .= "Content-type: text/html; charset=iso-8859-1 \r \n"; // indique qu'on souhaite recevoir du texte en html 

    mail($_POST['destinataire'], $_POST['sujet'], $_POST['message'],$_POST['expediteur']);
}
?>

<html>
    <form method="post" enctype="multipart/form-data" action="">
        <label for="destinataire">Destinataire</label><br>
        <input name="destinataire" type="email" id="destinataire" placeholder="votre adresse email">
        <br><br><br>
        <label for="expediteur">Expéditeur</label>
        <input name="expediteur" id="expediteur" type="text" placeholder="expediteur">
        <br><br><br>
        <label for="sujet">Sujet</label>
        <input type="text" name="sujet" id="sujet" placeholder="Objet">
        <br><br><br>
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="105" rows="15" placeholder="Ecrire votre message ici"></textarea>
        <br><br><br>
        <input type="submit" name="envoi" value="envoi">
    </form>
</html>