<h1>Page 1 </h1>
<a href="./page2.php?article=jean&couleur=bleu&prix=10">Lien vers la page 2</a>

<!-- // ?cle=valeur&cle=valeur&cle=valeur - pour montrer la valeur il faut préciser la clé entre cochets, car $_GET, comme toutes les superglobales sont des tableaux ARRAY -->

<!-- //Contexte et cas d'utilisation : $_GET est très pratique sur une boutique pour savoir ce que l'on doit afficher  dans le fichier "fiche_produit". Nous passons par le numéro qui se trouve sur l'url. Vous n'y pretez peut être pas attention mais si vous vous rendez sur une boutique, vous verrez que des informations passe continuellement dans l'url. Elles sont véhiculées de manière légèrement différentes car souvent il y a une activation des urls simplifiées mais le principe reste le même pour tout les sites.