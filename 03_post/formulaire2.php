solution 1:
<!-- <?php
// if($_POST)
// {
//     // echo "ville: " . $_POST['ville'] . "<br>";
//     // echo "code postale: " . $_POST['CP'] . "<br>";
//     // echo "adresse: " . $_POST['adresse'] . "<br>";
// }
?> -->

solution2: 
<?php
// if($_POST)
// {
//     foreach($_POST as $indice => $saisie)
//     {
//         echo $indice . ":" . $saisie . "<br>";
//     }
// }
?>

solution 3: 
<?php
if($_POST)
{
    echo '<table border="1"><tr>';
    foreach($_POST as $indice => $saisie)
    {
    echo '<th>'. $indice  . "</th>";
    echo '<td>' . $saisie . "</td>"; 
    echo '</tr>';
}
echo '</table>';
}
?>

<hr>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <h1>Formulaire exercice</h1>
    <!-- 
    Exercice: A vous de créez le formulaire et de récupérer les saisies juste au dessus en précisant l'etiquette correspondante: 
        -   Vous avez votre formulaire au format HTML.
        -   Procéder à la récupération des des information du $_POST.
        -   Corriger les erreurs indefine index lors de la 1ère fois sur la page.
    -->
    <form method="post" action="">
        <label for="ville">ville</label>
        <input type="text" name="ville" id="ville" value="">
        <br>
        <label for="CP">code postal</label>
        <input type="text" name="cp" id="CP" value="">
        <br>
        <label for="adresse">adresse</label>
        <textarea name="adresse" id="adresse" cols="50" rows="10"></textarea>
        <br>
        <input type="submit" name="envoi" value="envoi">
    </form>
</body>
</html>