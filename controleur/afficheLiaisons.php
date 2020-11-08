<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
/*include_once "$racine/modele/bd.liaison.inc.php";*/

require_once "$racine/modele/PortManager.php";
require_once "$racine/modele/Port.php";
require_once "$racine/modele/LiaisonManager.php";
require_once "$racine/modele/Liaison.php";

/*if (isset($_GET['id'])){
    $idSecteur = $_GET['id'];
    $nomSecteur = getSecteurById($idSecteur)['nom'];
    $titre = "Liaisons du secteur ". $nomSecteur;
    $secteurs = getLiaisonsBySecteur($idSecteur);
} else {
    $titre = "Liaisons par secteur";
    $secteurs = getLiaisons();
}*/

$liaisonManager = new LiaisonManager(); // Création d'un objet
$liaisons = $liaisonManager->getList(); // Appel d'une fonction de cet objet


// appel du script de vue qui permet de gerer l'affichage des donnees
include "$racine/vue/header.php";
include "$racine/vue/vueAfficheLiaisons.php";
include "$racine/vue/footer.php";
?>

