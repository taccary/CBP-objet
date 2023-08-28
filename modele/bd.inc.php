<?php

function connexionPDO() {
    $PARAM_hote= $_ENV["hote"]; 
    $PARAM_port= $_ENV["port"];
    $PARAM_nom_bd= $_ENV["nom_bdd"]; 
    $PARAM_utilisateur= $_ENV["nom_utilisateur"];
    $PARAM_mot_passe= $_ENV["mdp"];
    try {
        $conn = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
		$conn->exec('SET NAMES utf8');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        print "Erreur de connexion PDO ";
        die();
    }
}


// Return the current PDO if exists or create one otherwise
function getPDO() {
	static $pdo = null;
	if ($pdo == null) {
		$pdo = connexionPDO();
	}
	return $pdo;
}


if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog de test
    header('Content-Type:text/plain');

    echo "connexionPDO() : \n";
    print_r(connexionPDO());
}
?>
