<h1>Votre langue: </h1>

<ul>
    <li><a href="?pays=fr">France</a></li>
    <li><a href="?pays=es">Espagne</a></li>
    <li><a href="?pays=en">Angleterre</a></li>
    <li><a href="?pays=it">Italie</a></li>
</ul>


<?php
// Affiche un tableau avec les donnéees du serveur
print "<pre>"; print_r($_SERVER); print "</pre>";
// Affiche la langue du navigateur
//print "<pre>"; print_r($_SERVER['HTTP_ACCEPT_LANGUAGE']); print "</pre>";
// il est possible de detecter la langue du navigateur de l'internaute via $_SERVEUR['HTTP_ACCEPT_LANGUAGE'].
//echo substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2); On coupe la chaîne pour récuperer uniquement ce qui nous intéresse, c'est à dire : fr!
// remarque: temps utilisateur echo time(); //permet de voir le nombre de secondes écoulées entre le 1er Janvier 1970 (date clé en informatique) et maintenant ce nombre évolue sans cesse (... jusqu'en 2038 - pb d'octets).


if(isset($_GET['pays'])) { // Si un pays est passé dans l'url c'est que nous avons cliqué sur un lien
    $pays = $_GET['pays'];
} elseif(isset($_COOKIE['pays'])) { // On ne rentre dans le elseif uniquement si la condition du if n'est pas passée et qu'un cookie existe.
   $pays = $_COOKIE['pays']; // $_COOKIE est une superglobale.
} else { // Sinon, dans le scénario ou le if et le elseif ne se déclanche pas, le cas par défaut est appliqué
    $pays = "fr";
}
// on ressort de ces conditions avec la variable $oays affectée par une valeur dee l'url, d'un cookie ou par défaut

$un_an = 365*24*3600; // cookie en seconde pour un an. 35j+hh+3600sec (360jours*24h*3600sec) : 3600 vient de 60 sec x 60 min nombre dee seconde dans une heure
setCookie("pays", $pays, time()+$un_an); // Dans tous les cas cookie est crée par ce morceau de code car ce morceau de code n'est pas dans une condition. setCookie(string "nom", string "valeur", int "duréedevie");

//print "<pre>"; print_r($_COOKIE); print "</pre>";
//print "<pre>"; print_r($_SERVER); print "</pre>";

switch($pays) {
    case "fr" : 
        print "<p>  Bonjour, <br> Vous visiter actuellement le site en français <br> </p>";
    break;
    case "es" : 
        print "<p> Hola, <br> En este momento esta visitando il sitio en espanol<br> </p>";
    break;
    case "en" :
        print "<p> Hello, <br> You are currently visiting the site in English <br> </p>";
    break;
    case "it" :
        print "<p> Ciao <br> Sta attualmente vistado il sit in Italiano </p>";
    break;
    default : 
        print "<p> Bonjour, vous êtes sur le site officiel </p>";
    break;
}
// Un cookie sera valable 1 an après la dernière visite de l'utilisateur (l'internaute qui se connecte tous les mois verra son choix garder à l'infini pendant 10 000 ans sans problème dans l'affichage de texte pour la langue, à chacun de ses passages son cookie est relancé pour 1 année).
//setCookie() est une fonction prédéfinie permettant de créer un cookie, cependant il n'y pas de fonction prédéfinie permettant de le supprimer. Pour rendre inactif un cookie, on le met généralement à jour avec une date périmé.
// 

?>