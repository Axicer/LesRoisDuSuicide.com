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
	    //Le % représentent tous les caractères autour du mot recherché
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

    /*
     *  On va réaliser une recherche de produits via plusieurs mots clés
     *  $mots est un tableau contenant les différents mots clés
     */

    public function rechercheProduitMotsMultiples($mots) {
	try {
	    //Construction de la requête à partir des éléments du tableau
	    $sql_1 = "SELECT * FROM Produits WHERE nom LIKE ";  //Première partie qui va chercher dans les noms de produits
	    $sql_2 = "SELECT * FROM Produits WHERE description LIKE "; //Deuxième partie qui va chercher dans les descriptions de produits
	    for ($i = 1; $index < count($mots); $i++) {
		$text = ":tag_nom" . $i; //tag_nom1, tag_nom2...

		if ($index < count($mots) - 1) {
		    //SELECT... ...nom LIKE tag_nom1 OR nom LIKE tag_nom2
		    $sql_1 = $sql_1 . $text;

		    $sql_2 = $sql_2 . $text . ";";
		} else {
		    $sql_1 = $sql_1 . $text . "OR nom LIKE";

		    $sql_2 = $sql_2 . $text . "OR description LIKE";
		}
	    }
	    //$sql_1 = SELECT * FROM Produits WHERE nom LIKE :tag_nom1 OR nom LIKE :tag_nom2...
	    //$sql_1 = SELECT * FROM Produits WHERE description LIKE :tag_nom1 OR description LIKE :tag_nom2...

	    //On concatene les deux chaînes avec le UNION entre les deux, ce qui nous donne notre requête à exécuter
	    $sql = $sql_1 . "UNION" . $sql_2; 
	    
	    $req_prep = Model::$pdo->prepare($sql);
	    $values = array();
	    for ($i = 1; $i < count($mots); $i++) {
		$values["tag_nom$i"] = $mots[$i];
	    }
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, "Produit");
	    $tab = $req_prep->fetchAll();

	    return $tab;
	} catch (Exception $ex) {
	    return false;
	}
    }

}
