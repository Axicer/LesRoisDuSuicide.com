<?php

require_once File::build_path(array("model", "Categorie.php"));
require_once File::build_path(array("model", "Client.php"));
require_once File::build_path(array("model", "Commande.php"));
require_once File::build_path(array("model", "Produit.php"));
require_once File::build_path(array("model", "Type.php"));

class Query {
    /*
     * 	$mots est un tableau contenant les mots clés
     *  But : afficher le contenu de la table Produit correspondant aux mots clés inscrits
     * 
     *  Il s'agit d'une recherche simple, on ne peut utiliser qu'un seul mot clé
     */

    public function rechercheProduit($mot) {
	try {
	    
	    //Par cette requête, on va sélectionner tous les produits incluant $mot dans leur nom
	    //et ceux incluant ce mot-clé dans leur description.
	    $sql = "SELECT * FROM Produits WHERE nom LIKE %:nom_tag%"
		    . "UNION"
		  . "SELECT * FROM Produits WHERE description LIKE %:nom_tag% ";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
		"nom_tag" => $mot
	    );
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, "Produit");
	    $tab = $req_prep->fetchAll();

	    return $tab;
	} catch (Exception $ex) {
	    return false;
	}
    }

}
