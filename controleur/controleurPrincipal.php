<?php
function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["accueil"] = "accueil.php";
    $lesActions["liaisons"]= "afficheLiaisons.php";
    $lesActions["tarifs"]= "afficheTarifs.php";
    $lesActions["traversees"]= "afficheTraversees.php";
    $lesActions["bateaux"]= "afficheBateaux.php";
    $lesActions["ports"]= "affichePorts.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}
?>

