<style>h2{margin:0; font-size:15px; color:red;}</style>

<!-------------
//----1-Ecriture et affichage
//---------------------------- -->
<h2>Ecriture et affichage</h2>

<?php 
echo 'bonjour'; //affichage
print 'nous sommes lundi'; //le print est une autre instruction d'affichage. Il n'y a pas de diff entre print et echo
// d'autres instruction d'affichage existentnt: print_r(); var_dump();
echo '<br>'; //nous pouvons egalement mettra du html
echo 'bienvenu'; // sur le code source on ne voit pas le phpcar c'est un langage interprete 
?>

<?="Allo"?> <!--le = remplace le echo -->
<strong>bonjour </strong>
<!-- on peut également fermer et rouvrir PHP pour mélengaer HTML & PHP -->
<?php


//----------------------------
//----b-Commentaire
//----------------------------

echo'<hr><h2>Commentaire</h2>';
// ce n'est pas obligé de fermer PHP avec le code ci dessous:
echo 'texte'; //ceci est un com sur une seule ligne;
echo 'texte'; /* ceci est un com
sur plusieur
lign */
echo 'texte'; #ceci est un commentaire sur 1 seule ligne
echo '<br>';


//----------------------------
//----2-Type/Déclaration/Affectation
//----------------------------

echo '<hr><h2>variable : Type/Déclaration/Affectation </h2>';
// Déclaration d'une variable avec le signe $
$a=127; //Affectation de la valeure 127 dans la variable nommée "a"
echo gettype($a). "<br>"; // gettype() est une fonction pré-définie nous permettant de voir le type d'une variable. Il s'agit d'un entier: integrer
$b=1.5; 
echo gettype($b). "<br>"; 
// un nb à virgule (double)

$a="une chaine";
echo gettype($a). "<br>"; // on ne regarde pas le contenu d'une variable mais son type: string (avec guillemets)
$b='127';
echo gettype($b). "<br>"; // string (string est equivalent à varchar)

$a=true; //nous pouvons appeler une variable "a2" mais on ne peux pas faire "2a". Elle peut contenir des chiffres mais ne doit pas commencer par un chiffre.
echo gettype($a). "<br>"; //boolean
$b=false;
echo gettype($b). "<br>"; //boolean


//----------------------------
//----b-Assignation par référence
//----------------------------
echo '<hr><h2>Assignation par référence</h2>';
$a='Salut'; //Affecte la valeur 'salut' à $a
$b=&$a; //assigne par ref $a à $b
echo $a; // salut
echo $b; // idem


//----------------------------
//----3-Concaténation 
//----------------------------

echo '<hr><h2>Concaténation</h2>';
$x = 'bonjour';
$y = 'tt le monde'; 
echo $x . $y . "<br>"; //concatenation = "suivi de"
echo "$x $y <br>"; // mm chose sans concatenation
echo "<br>","coucou","<br>"; //concatenation avec virgule simililaire au point


//----------------------------
//----b-Concaténation lors de l`affectation
//----------------------------

echo '<hr><h2>Concaténation lors de l`affectation </h2>';
$prenom1="Bruno";
$prenom1="claire";
echo $prenom1 . "<br>"; // Affichage: Claire

$prenom2 = "Nicolas"; // Affectation de la valeur "Nicolas" sur la variable : $prenom2
$prenom2 .= " Marie"; // la variable ".=" ajoue marie SANS remplacer la valeure precedente
echo $prenom2 . "<br>";


//----------------------------
//----4-Guillemet et quote
//----------------------------

echo '<hr><h2>Guillemet et quote</h2>';
$message = "aujourd'hui"; // ou bien : $message = 'aujourd(slache inverse a cause des guillemets) 'hui';
$txt = "bonjour";
echo $txt . "tout le monde<br>"; //concatenation
echo "$txt tout le monde<br>"; //affichage dans des guillemets, la variable est evaluee 
echo '$txt tout le monde<br>';


//-----------------
//--------5-Constantes et constantes Magiques
//-------------------


echo '<hr><h2> Constante et constante magique </h2>';

define("CAPITALE", "Paris"); //Par convention, une constante se déclare toujours en Majuscule

echo CAPITALE . "<br>";

//---------------------
//-----a-Constante Magiques
//------------------------

echo __FILE__ . "<br>"; //Chemin complet vers le fichier
echo __LINE__ . "<br>"; //Affiche le numéro de la ligne du code
echo __DIR__ . "<br>";  // Chemin complet vers le dossier

//------------------------
//-----b-Exercice
//------------------------

/* Afficher bleu-blanc-rouge (avec les tirets) en mettant chaque
couleur dans une variable */

echo '<hr><h2> Exercice 1 </h2>';

$couleur1 = 'Bleu';
$couleur2 = 'Blanc';
$couleur3 = 'Rouge';
echo $couleur1 . "-" . $couleur2 . "-" . $couleur3 ;
echo "<br>";
echo "$couleur1-$couleur2-$couleur3";



//----------------------------
//----6-Opérateurs Arithméthique
//----------------------------

echo '<hr><h2> Opérateurs Arithmétique </h2>';

$a1 = 10;
$b1 = 2;

echo $a1 + $b1 . "<br>"; //Affiche 12
echo $a1 - $b1 . "<br>"; //Affiche 8
echo $a1 * $b1 . "<br>"; //Affiche 20
echo $a1 / $b1 . "<br>"; //Affiche 5

// Opération Affectation

$a1 = 10;
$b1 = 2;
$a1 += $b1; //equivaut à $a1 = $a1 + $b1 (ici $a vaut 12, Voir ci-dessus)
echo $a1;
$a1 -= $b1; //equivaut à $a1 = $a1 - $b1
echo $a1  . "<br>";
$a1 *= $b1; //equivaut à $a1 = $a1 * $b1 (ici $a1 vaut 20)
echo $a1;
$a1 /= $b1; //equivaut à $a1 = $a1 / $b1 (ici $a1 vaut 20)
echo $a1;


//----------------------------
//----7-Structure condition
//----------------------------
echo '<hr><h2>Structures conditions (if /else) - opérateur de comparaison</h2>';

//empty = test si c'est vide / isset = test si définie
$var1 = 0;  //ou false, ou
$var2 = ""; // chaine vide


if(empty($var1))echo '0, vide ou non définie<br>';
if(isset($var2))echo "var2 existe et est définie par rien <br>";
 //isset test l'existance d'une variable

//----------------------------
//----a- If, else et operateur de comparaison
//----------------------------
$e=10; $f=5; $g=2;
if($e>$f){
    print "E est sup à F <br>";
} else {
    print "F est sup à E <br>";
}

if($e > $f && $f > $g)
{
    print "ok pour les deux conditions <br>";
}

if($e==9||$f>$g) // barres parallele: alt + shift + L // Si E contient 9 et dans le meme temps F sup à G
{
    print "ok pour au moins l'une des deux condition <br>";
}
else // sinon aucune des deux conditions n'est bonne
{
    print "nous sommes dans le else";
}

if($e==8) // le double = permet de vérifier une information à l'intérieur d'une variable
{
    print " 1 - E est égale à 8";
}
elseif($e!=10)
{
    print "2 - E est diff de 10";
}
else
{
    print "3 - tt le mde a faux <br>";
}

if($e==10 XOR $f==6) // XOR: seulement l'une des deux conditions doit etre valide
{
    echo "ok pour 1 <br>"; // ne s'affichera pas si les deux conditions sont bones ou bien si les deux conditions sont mauvaise
}

//----------------------------
//----b - Forme contractée - 2eme possibilité d'ecriture des if
//----------------------------

echo($e==10)?"E est égale à 10 <br>":"E n'est pas égale à 10 <br>";
print($e==10)?"E est égale à 10 <br>":"E n'est pas égale à 10 <br>";
//Le ? remplace les if, le : remplace le else

//----------------------------
//----c - Entrer une valeure dans une variable sous condition
//----------------------------

$var1=isset($maVar)?$maVar:'valeur_par_defaut'; // si $maVar eciste, on affecte sa valeur à $var1, sinon on y dépose une valeure par défaut
echo $var1 . '<br>';

$var2 = $maVar ?? 'valeur_par_defaut'; //la meme chose en plus court avec le ??. "soit l'un soit l'autre"
echo$var2 . '<br>';

$var3=$_GET['pays']??$_GET['ville']??'pas d information'; //soit on prend pays, soit ville, soit "pas d'information"
echo $var3 . '<br>';

//----------------------------
//----d - comparaison
//----------------------------
$vara = 1;
$varb = '1';
if($vara == $varb)
{
    echo "il s'agit de la mm chose";
}
// avc la presence du triple egal, le test ne fonctionne pas car les types de variables sont diff. Int (entier) n'est pas égale à string (chaine de caractère)

//----------------------------
//----e - récapitulatiof des opérateurs
//----------------------------
/*
= Affectation, 
== Comparaison des valeurs
=== Comparaison des valeurs et du type 
*/


//----------------------------
//8 - Conditions switch
//----------------------------
echo '<hr><h2> Condition Switch </h2>';

$couleur='jaune';
switch($couleur)
{
    case 'bleu':
        echo 'vous aimez le bleu';
    break;
    case 'rouge':
        echo 'vous aimez le rouge';
    break;
    case 'jaune':
        echo 'vous aimez le jaune';
    break;
    default:
    echo "vous n'aimez rien";
    break;
}

if($couleur=='jaune'){
    echo 'vous aimez le jaune';
}
elseif($couleur=='rouge'){
    echo 'vous aimez le rouge';
} 
elseif($couleur=='bleu'){
    echo 'vous aimez le bleu';
}
else //jamais de parenthèse sur un else
{
    echo "vous n'aimez rien";
}

//----------------------------
//9 - Fonctions prédéfinies
//----------------------------
echo '<hr><h2> Fonction prédéfinies </h2>';

echo '<br>Date:<br>';
print date ("d/m/Y"); 
//exemple de la fonction prédéfinir date permettant de renvoyer la date. Le Y MAJUSCULE permet d'obtenir 2022 et nom 22
echo '<br>';

//----------------------------
//------ a - Traitement des chaines
//----------------------------
echo '<hr><h2> Fonction prédéfinies - Traitement des chaines </h2>';

$email1 = "prenom@site.fr"; //"prenom@site.fr" doit imperativement etre une chaine de carac
echo strpos($email1,"@"); //indique la position 6 du carac @ dans la chaine (6 et non pas 7 car l'index commence par 0)

$email2 = "bonjour"; //"prenom@site.fr" doit imperativement etre une chaine de carac
echo strpos($email2,"@"); //cette ligne ne sort rien, pourtant il y a bien qqch à l'interieur : FALSE!
var_dump(strpos($email2,"@")); //Grace à var_dump: on apercoit ce FALSE si le carac "@" n'est pas trouvé. var_dump est dc une intruction d'affichage améliorée que l'on utilise régulièrement en phase dev. 

/* 
strpos() est une fonction permettant de trouver la position d'un carac ds une chaine: 
Valeure de retour: 
 Succès: int 
 Echec: bolean false
Argument(s): 
 1- ns devons lui fournir une chaine sur laquelle nous souhaitons chercher
 2 - nous devons lui fournir l'info a chercher
Contexte: ns pourrons l'utiliser pr savoir si une ad mail a un format conforme. Il existe aussi des expression régulière (regex) */

$phrase = 'Mettez votre phrase à cet endroit';
echo iconv_strlen($phrase); // Affiche 37. iconv_strlen() est une fonction predef permettant de retourner la taille d'une chaine. 
// Argument1: nous devons fournir la chaine dont nous soihaitons connaitre la taille. Nous pourrons l'utiliser pour savoir si le pseudo et le mdp d'une inscription ont une taille conforme


$texte = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab ratione alias optio aliquid, iure molestiae hic. Enim sed consequuntur, fugit, culpa impedit delectus, porro magnam nulla amet sint corporis inventore?";
echo substr($texte, 0, 20) . " ... <a href='#' > Lire la suite </a>"; // Retourne une partie du texte seulement, avec un lien pour lire la suite de l'article.
/*
Subsrt() est une fonction prédéfinie permettant de retourner une partie de la chaîne.
Succès : string 
Echec : booleean FALSE
Arguments :
1. Nous devons lui fournir la chaîne que l'on souhaite couper
2. Nous devons lui préciser la position de début
3. Nous devons lui préciser la position de fin du
Contexte : substr est souvent utilisé pour afficher des actualités avec une "accroche". Sur internet, il y a le début de l'article puis ... lire la suite.
Pour ne pas couper un mot il existe un autre fonction prédéfinie substr_replace().
*/


// --------------------------------
// 10 - Fonctions utilisateurs
// --------------------------------
echo '<hr><h2>Fonctions utilisateurs</h2>';

function separation() // declaration d'une fonction prevue pour ne pas recevoir d'argument
{
echo "<hr><hr><hr>"; //voici une simple fonction permettant de tirer un trait sur la page web
}
separation(); //Execution de la fonction

//-----------------------------------------------
function bonjour($qui) //$qui sort de nul part
{
    return "bonjour $qui <br>\n";
}
echo bonjour("Pierre");// Si la fonction reçoit un argument, il faut lui envoyer un argument.
echo bonjour("Jacques");// Quand il y a un "return" dans la fonction, il faut faire un echo avant pour afficher
echo bonjour($prenom); // L'argument peut être un variable.

//-----------------------------------------------
function appliqueTva($nombre)
     {
         return $nombre*1.2 . '<br>';
     }
echo appliqueTva(100);

 function appliqueTva2($nombre, $taux = 1.196)// Argument initialisé par défaut si l'on en reçoit pas 
     {
        return $nombre*$taux . '<br>';
     }
echo '10 Euros avec tva 19.6% font : ' . appliqueTva2(10) . '<br>';
echo '100 Euros avec tva 5.5% font : ' . appliqueTva2(100, 1.055) . '<br>';// attention nous l'avons appellée appliqueTva2() car 2 fonctions de doivent pas posséder le même nom.

//-----------------------------------------------
exoMeteo("hiver", -1);
function exoMeteo($saison, $temperature)
    {
        echo "Nous sommes en $saison et il fait $temperature";
        // condition dans le cas ou affiche la température en degré 
        // dans le cas ou j'ai plus d'un degrès il faudra mettre un S à degrès
        // Sinon c'est la temperature est comprise en -1 et 1 degrè il n'y a pas de S
    }

//-----------------------------------------------
function joursemaine()
 {
     $jour = 'lundi';// variable locale.
     return $jour; // une fonction peut retourner qqchose (à ce moment là on quitte la fonction)
    //  echo 'ALLO'; // /!\ cette ligne ne sera pas éxécutée car il y a un return devant
 }
//  echo $jour; // /!\ ne fonctionne pas car cette variable n'est connu qu'a l'intérieur de la fonction
$recup = joursemaine();// on récupère la fonction
echo $recup . '<br>'; // on affiche la variable qui contient notre fonction joursemaine()

//-----------------------------------------------
$pays = 'France';
function affichePays()
{
    global $pays;
    echo $pays;

}
affichePays();

echo '<br>';

//-----------------------------------------------
function facultatif()
{
    // print "<pre>"; print_r(func_get_args()); "</pre>";
    foreach(func_get_args() as $indice => $element )// func_get_args() permet d'obtenir un tableau array avec les arguements passés.
    {
        echo $indice, " -> ", $element, "<br>";
    }
    // echo func_get_arg(0) , '<br>'; // permet d'afficher l'arg 0
}
facultatif();
facultatif("France", "Italie", "Espagne", 1);

//-----------------------------------------------
function identite(string $nom, int $age)// Ici on force le typage on demande une chaine, un entier
{
    return $nom. ' a ' . $age .' ans';
}
echo identite('Arnaud', 39);

//-----------------------------------------------
function isAdult(int $age) : bool
{
    return $age >= 18;
}
var_dump(isAdult(18));



// --------------------------------
// 11 - Structures itérative : Boucle
// --------------------------------
echo '<hr><h2>Structures itérative : Boucle</h2>';




// --------------------------------
// ----- A - While:
// -------------------------------- 

$i = 0; //Valeur de départ
while ($i<3) // Tant que $i est inférieur à 3 
{
    echo "$i--";
    $i++;// Ceci est une forme contractée de : $i = $i+1; l'incrémentation du compteur est éffectué à chaque tour de boucle.
}

//-----------------------------------------------

// Affiche "0--1--2--"
$j = 0;
while ($j<=3) //tant que $j inf à 3
{
    if($j==2)
     echo $j; //je rentre une fois
    else
     echo "$j--"; //je rentre 3 fois
    $j++;
}
echo '<br>';


// --------------------------------
// ----- B - For:
// -------------------------------- 

for ($j=0;$j<16;$j++) //pour (val de départ; condition d'entrée; sens (incrémentation ou décrémentation))
{
    print $j . "<br>";
}

// -------------------------------- 
// Exo: Afficher les jours de février: 
for ($j=1;$j<=28;$j++)
{
    echo "<option>$j</option>";
}
echo '</select>';

// -------------------------------- 
// Exo: Faire une boucle For qui affiche 0 à 9 sur la mm ligne: 
for($j=0;$j<=9;$j++)
{
    echo "<span>$j</span>";
}

// -------------------------------- 
// Exo: Faire une boucle For qui affiche 0 à 9 dans une table HTML (<table border ="1">) : 
echo '<table border ="1"><tr>';
for($i=0;$i<=9;$i++)
{
    echo "<td>$i<td>";
}
echo '</tr></table>' . '<br>';

// --------------------------------
// ----- C - Boucles imbriquées:
// -------------------------------- 
echo '<hr><h2>Boucle imbriquées</h2>';

//méthode 1:

print "<table border='1'><tr>";  //ouverture du tableau
for($ligne = 0; $ligne < 10; $ligne++){ // ligne est égale à 0
    print '<tr>';
    for($cellule = 0; $cellule < 10; $cellule++) { // tant que ligne est à 0, cellule s'incrémente 10 fois - ligne à 1, cellule s'incrémente 10 fois - ligne est 2, cellule s'incrémente 10 fois, ...
        print "<td>". (10 * $ligne + $cellule) . "</td>"; // 10 * £0 + 0, 10 * 0 +1, 10 * 0 + 2, etc ...  --- 10 * 1 + 0, 10 * 1 + 1, 10 * 1 + 2, etc . Permet d'avoir les multiples de 10
    }
    print '</tr>'; // Fermeture de notre balise </tr>
}
print '</table>'; // Fermeture de notre balisee </table> 'hors des boucles
echo '<hr>';

// -------------------------------- 
//methode 2:

$z=0; //On part de 0 en lui donnant un index
print '<table border="1">';  //ouverture du tableau
for($ligne=0; $ligne<10; $ligne++)
{
    print "<tr>"; //tr: ligne
    for($cellule=0;$cellule<10;$cellule++) //tant que ligne est à 0, cellule s'incremente 10x; tant que ligne est à 1, cellule s'incrémente 1àx, etc
    {
        print"<td>" . $z . "</td>"; //td: cellule
        $z++;
    }
    print "</tr>";
}
echo '<table>';

// -------------------------------- 
//methode 3:

echo '<hr>';
print '<table border="1"><tr>';  //ouverture du tableau
for($i=0;$i<100;$i++)
 {
  if ($i%10==0) //reste de $i divisé par 10
   {
    print "<tr>";
   }
     echo '<table>';
}

// -------------------------------- 
//methode 4:
echo '<hr>';
echo '<table border="1">'; //ouverture du tableau
$i=0;
while($i<=99)
{
    echo '<tr>';
    for($k=0;$k<=9;$k++)
    {
        echo "<td>$i</td>";
        $i++;
    }
    echo '</tr>';
}
echo '</table>';


// --------------------------------
// 12 - Inclusion
// --------------------------------
echo '<hr><h2>Inclusion de fichier</h2>';

echo "Première fois:";
include("exemple.inc.php"); //ici le fichier est inclus
echo '<br>';
echo "Deuxième fois :";
include_once("exemple.inc.php"); //le once verifie que le fichier a déjà été inclu et ne le réinclue pas
echo '<br>';
echo "Troisième fois : "; 
require("exemple.inc.php");// Require est nécessaire pour l'execution du code 
echo '<br>'; 
echo 'Quatrième fois: ';
require_once("exemple.inc.php");
echo '<br>';

// --------------------------------
// 12 - Tableau de donnés
// --------------------------------
echo '<hr><h2>Tableau de donnés</h2>';

$liste=array("Antoine","Karine","Armelle","John","Todor");
// echo '<pre>';
// var_dump($liste); affiche le contenu du tableau plus certaine info comme le type de var.
// echo '</pre>';
echo '<pre>';
print_r($liste); //print_r affiche les donnés du tableau
echo '</pre>';

// --------------------------------
// ---- A - Boucle FOREACH pour les tableaux de donnés ARRAY
// --------------------------------
echo '<hr><h2>Boucle FOREACH</h2>';

$tab[]="France"; //Autre moyen d'affecter une valeure dans un tableau. Nous ne mettons pas ARRAY mais les crochetx []. Pratique pour ajouter des infos en cours de route (après que le tableau array ait été déclaré partiellement avec qq valeurs)
$tab[]="Italie";
$tab[]="Maroc";
$tab[]="Bresil";
$tab[]="Haïti";
print "<pre>"; print_r($tab); print "</pre>"; //print_r affiche les donnés du tableau
echo $tab[1]; //Exemple pour afficher une valeure par son index
foreach($tab as $info) //le mot AS fait partie du langage et est obligatoire. $info vient parcourir les valeurs. 
{
    echo $info . '<br>'; //on affiche successivement les elements du tableau 
}
foreach($tab as $indice => $valeur)// Quand il y a 2 variable, la première parcours la colonne des indices et la seconde variable parcours les valeurs.
{
    echo $indice . ' - ' . $valeur . "<br>";// On affiche l'élément du tableau parcourru via $indice et $valeur.
}
$pays = array(
    "fr" => "France", 
    "en" => "angleterre", 
    "es" => "espagne"
);//

echo 'Taille du tableau: ' . count($pays) . "<br>"; // Affiche 3
echo 'Taille du tableau: ' . sizeof($pays) . "<br>"; // sizeof est la taille du tableau, pas de différence
print implode ("-", $pays) . "<br>"; //Implode() est une fonction predefinie qui rassemble les elmt d'un tableau en une chaine (séparée par un symbole). L'inverse: explode


// --------------------------------
// ---- B - Tableau Multidimensionnel
// --------------------------------
//Ns parlons de tableau multidimensionnel quand un tableau est contenu ds un autre tableau

$tab_multi = array(
    0 => array(
        "prenom" => "julien",
        "nom" => "Cottet"
    ),
    1 => array(
        "prenom" => "Nicolas",
        "nom" => "Lafaye"
    ) // il est possible de choisir le nom des indices d'un array
    );
echo "<pre>"; print_r($tab_multi); echo "</pre>";
print $tab_multi[1]['prenom'] . '<br>'; //Ns rentrons d'abord à l'indice 1 pour aller ensuite ds l'autre tableau à l'indice prenom 
for($i=0;$i<sizeof($tab_multi);$i++) // tant que $i est inférieur au nombre d'éléments du tableau... et non pas inférieur ou égal (<=) car s'il y a 2 éléments dans le tableau, nous voulon faire 0,1 soit 2 tours mais nous n'irons pas à 2
{
    print $tab_multi [$i]['prenom'] . '<br>'; //on affiche l'élement du tableau d'indice $i. $i va successivement prendre la valeure 0 puis 1. 
    // nous aurion spu le faire avec deux foreach imbriques.
    // Le 1er tour est l'indice 0, le 2eme l'indice 1. Il y a toujours un décalage. 
}

// --------------------------------
// ---- 13 - Les objets
// --------------------------------
echo '<hr><h2>Les objets</h2>';
// un obj est un autre type de donnes. Un peu à la manière d'un ARRAY, il permet de regrouper des infos. 
// Cpdt, cela va bcp plus loin car on peut y declarer des variables (appelées : attribut ou propriete) mais aussi des fonctions (appelées : methode)
class Etudiant
{
    public $prenom = "julien"; // public permet de preciser que l'element sera accessible de partout (il y a aussi protected et private, utile en cas d'heritage et d'encapsulation). Cependant, nous voyons les obj sans voir tt les concepts de la programmation obj, nous retiendrons seulement "public"
    public $age = 25;
    public function pays()
    {
        return "France";
    }
} // un objet est un conteneur symbolique, qui possède sa propre existence et incorpore des information et des mecanisme
$object = new Etudiant(); //new est un mot cle permettant d'instancier la class et d'en faire un objet. C'est ce qui ns permet de le déployer afin de pouvoir s'en servir. On se sert de ce qui est dans la class via l'objet. 
print '<pre>'; var_dump($object); print "</pre>"; // nous pouvons observer le type, la reference et l'objet1 et le nom de la class dont il est issu. 
echo $object->prenom . "<br>"; //nous pouvons piocher dans un ARRAY avec les crochets, nous devons piocher dans un objet avec les fleches. 
echo $object->pays() . "<br>"; //Appel d'une methode toujours avc des parenthèse