<?php
// puisque nous avons reussi à introduire dans un fichier texte (via le formulaire4.php), il serait interessant de faire l'operation inverse et de lire le contenu d'un fichier texte. 
$nom_fichier="list.txt"; //on stock dans une variable le nom du fichier (string) pour s'en servir dans la fonction predefinie file()
$fichier = file($nom_fichier); //la fonction file() fait tt le travail, elle retourne chaque ligne d'un fichier à des indices différents d'un tableau ARRAY

print "<pre>"; var_dump($fichier); print '</pre><hr>'; //affichage du tableau ARRAY dans la structure

foreach($fichier as $ligne) //Parcour du tableau ARRAY pour un affichage plus conventionnel
{
    echo $ligne . "<br>";
}
echo '<hr>';
echo implode ("<br>", $fichier); //affichage du tableau ARRAY avec un passage à la ligne

//unlink($nom_fichier); //supprime un fichier