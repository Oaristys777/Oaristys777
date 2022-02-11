<?php

// session_start() permet de créer un fichier de session ou de l'ouvrir s'il existe déjà
session_start();
$_SESSION["pseudo"] = "Matt";
$_SESSION["mdp"] = "motdepasse";

print "<pre>";
print_r($_SESSION);
var_dump($_SESSION);
print "</pre>";

// on peut faire afficher un seul élément de la session
print $_SESSION["pseudo"]."<br>";
print $_SESSION["mdp"]."<br>";

// unset($_SESSION["index"]) permet de retirer l'existence de "index" dans le fichier de session
unset($_SESSION["mdp"]);

print $_SESSION["mdp"]."<br>";

// session_destroy() permet de déconnecter et supprimer toute la session ouverte

// Il garde toutefois les éléments de session jusqu'à la fin du script.

// Ici, le pseudo sera encore visible si on l'affiche
session_destroy();
print "<pre>";
print_r($_SESSION);
print "</pre>";