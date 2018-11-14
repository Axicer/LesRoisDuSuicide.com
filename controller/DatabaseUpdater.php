<?php

require_once File::build_path(array("model", "Categorie.php"));
require_once File::build_path(array("model", "Client.php"));
require_once File::build_path(array("model", "Commande.php"));
require_once File::build_path(array("model", "Produit.php"));
require_once File::build_path(array("model", "Type.php"));

class DatabaseGetter {

    public function UpdateCategorie($categorie) {
		try {
		    $sql = "UPDATE Categories VALUES(:nom) WHERE idCategorie=:id;";
		    $req_prep = Model::$pdo->prepare($sql);
		    $values = array(
			"id"=> $categorie->$idCategorie,
			"nom" => $categorie->$nom
			    );
		    $req_prep->execute($values);

		    return true;
		} catch (Exception $e) {
		    //error returns false
		    return false;
		}
    }

    public function updateClient($client){
		try {
		    $sql = "UPDATE Clients values(:name,:prenom,:adress,:codePostal,:ville,:privilege) WHERE idClient=:id;";
		    $req_prep = Model::$pdo->prepare($sql);
		    $values = array(
			"id"	    =>$client->$idClient,
			"name"	    =>$client->$name,
			"prenom"    =>$client->$prenom,
			"adress"    =>$client->$adress,
			"codePostal"=>$client->$codePostal,
			"ville"	    =>$client->$ville,
			"privilege" =>$client->$privilege,
			    );
		    $req_prep->execute($values);
		    
		    return true;
		} catch (Exception $e) {
		    //error returns false
		    return false;
		}
    }

    public function updateCommande($commande) {
		try {
		    $sql = "UPDATE Commandes VALUES(:date,:etat,:lignes) WHERE idCommande = :id;";
		    $req_prep = Model::$pdo->prepare($sql);
		    $values = array(
			"id" => $commande->$idCommande,
			"date"=>$commande->$date,
			"etat"=>$commande->$etat,
			"lignes"=>$commande->$lignes
			    );
		    $req_prep->execute($values);
		    return true;
		} catch (Exception $e) {
		    //error returns false
		    return false;
		}
    }

    public function updateProduit($produit) {
		try {
		    $sql = "UPDATE Produits VALUES(:nom,:qteStock,:prix) WHERE idProduit = :id;";
		    $req_prep = Model::$pdo->prepare($sql);
		    $values = array(
			"id" => $produit->$idProduit,
			"nom"=> $produit->$nom,
			"qteStock"=> $produit->$qteStock,
			"prix"=> $produit->$prix
			    );
		    $req_prep->execute($values);
		    return true;
		} catch (Exception $e) {
		    //error returns false
		    return false;
		}
    }

    public function updateType($type) {
		try {
		    $sql = "UPDATE Types VALUES(:nom) WHERE idType = :id";
		    $req_prep = Model::$pdo->prepare($sql);
		    $values = array(
			"id" => $type->$idType,
			"nom"=> $type->$nom
			    );
		    $req_prep->execute($values);
		    return true;
		} catch (Exception $e) {
		    //error returns false
		    return false;
		}
    }

}

?>