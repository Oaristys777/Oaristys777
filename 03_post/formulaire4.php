<?php
// Vous êtes rediriger par le formulaire3.php et vous pouvez afficher les données postés 
if($_POST) {
    //echo "pseudo: " . $_POST['pseudo'] . "<br>";
    //echo "Votre texte : " . $_POST['texte'] . "<br>";


    if(strlen($_POST['pseudo']) == 0) { // Si la longueur (retournée grâce à la fonction prédéfinie strlen() est égale à 0)
        print "Vous devez saisir un pseudo"; //Affiche cette phrase.
    } 
    
    else { // Sinon... on affiche les saisies provenant du formulaire3.php
        echo "<table border='1'>";
        foreach($_POST as $indice => $saisie) {
            echo "<tr>";
                echo '<th>';
                    echo $indice; 
                echo'</th>';
                echo '<td>';
                    echo $saisie; 
                echo'</td>';
            echo "</tr>";
        }
        echo "</table>";
    }

    // écriture dans un fichier crée dynamiquement (vérifier votre dosser /03-post/)  et l'ouvrir éditeur de texte
    $f = fopen("liste.txt", "a"); // ouvrir un fichier si il n'existe pas on va le créer -- fopen() en mode "a" permet de créer le fichier s'il n'est pas trouvé, sinon il l'ouvrir.

    fwrite($f, $_POST['pseudo'] . " - "); // fwrite() permet d'écrire dasn le fichier représenter par $f.
    fwrite($f, $_POST['texte'] . " \n"); // \n entre guillemets permet de sauter une ligne dans un fichier. 
    $f = fclose($f);// fclose(), qui n'est pas indispensable, permet de fermer le fichier et ainsi libérer la resource.
    // Contexte et cas d'utilisation: Si l'on souhaite enregister des des membres à une newsletter et que l'on ne possède pas de BDD, il serait intéréssant de le faire via ce fichier texte.
}
?>