<?php
	require_once File::build_path(array("model", "Categorie.php"));
	require_once File::build_path(array("model", "Client.php"));
	require_once File::build_path(array("model", "Commande.php"));
	require_once File::build_path(array("model", "Produit.php"));
	require_once File::build_path(array("model", "Type.php"));

	class DatabaseSetter{

		public function addCategorie($cat){
			try{
				$sql		=	"INSERT INTO Categories(idCategorie, nom) VALUES (:id, :nom);";
		    	$req_prep	=	Model::$pdo->prepare($sql);
		    	$values		=	array("id" => $cat->$idCategorie, "nom" => $cat->$nom);
	            $req_prep 	->	execute($values);
	            return true;
        	}catch(Exception $e){
        		//error returns false
        		return false;
        	}
		}

		public function addClient($client){
			try{
				$sql		=	"INSERT INTO Clients(idClient, nom, prenom, adresse, codePostal, ville, privileges) VALUES (:id, :nom, :prenom, :adresse, :codePostal, :ville, :privileges);";
		    	$req_prep	=	Model::$pdo->prepare($sql);
		    	$values		=	array("id" 			=> 	$client->$idClient,
		    						  "nom" 		=> 	$client->$nom,
		    						  "prenom"		=> 	$client->$prenom,
		    						  "adresse"		=>	$client->$adresse,
		    						  "codePostal"	=>	$client->codePostal,
		    						  "ville"		=> 	$client->ville,
		    						  "privileges"	=> 	$client->privileges);
	            $req_prep 	->	execute($values);
	            return true;
        	}catch(Exception $e){
        		//error returns false
        		return false;
        	}
		}

		public function addCommande($commande){
			try{
				//first add commande inside Commandes table
				$sql		=	"INSERT INTO Commandes(idCommande, date, etat) VALUES (:id, :date, :etat);";
		    	$req_prep	=	Model::$pdo->prepare($sql);
		    	$values		=	array("id" 			=> 	$commande->$idCommande,
		    						  "date" 		=> 	$commande->$date,
		    						  "etat"		=> 	$commande->$etat);
	            $req_prep 	->	execute($values);

	            //then add lignes inside LignesCommandes table
	            foreach ($commande->$lignes as $line) {
	            	if(!addLigneCommande($line)){
	            		return false;
	            	}
	            }
	            return true;
        	}catch(Exception $e){
        		//error returns false
        		return false;
        	}
		}

		public function addLigneCommande($line){
			try{
				$sql		=	"INSERT INTO LignesCommandes(idClient, idProduit, idCommande, qte) VALUES (:idClient, :idProduit, :idCommande, :qte);";
		    	$req_prep	=	Model::$pdo->prepare($sql);
		    	$values		=	array("idClient" 	=> 	$line->$idClient,
		    						  "idProduit" 	=> 	$line->$idProduit,
		    						  "idCommande"	=> 	$line->$idCommande,
		    						  "qte"			=>	$line->$qte);
	            $req_prep 	->	execute($values);
	            return true;
        	}catch(Exception $e){
        		//error returns false
        		return false;
        	}
		}


		public function addProduit($produit){
			try{
				$sql		=	"INSERT INTO Produits(idProduit, nom, qteStock, prix) VALUES (:idproduit, :nom, :qteStock, :prix,:desc);";
		    	$req_prep	=	Model::$pdo->prepare($sql);
		    	$values		=	array("idProduit"   => 	$produit->$iProduit,
						      "nom"	    => 	$produit->$nom,
						      "qteStock"    => 	$produit->$qteStock,
						      "prix"	    =>	$produit->$prix,
						      "desc"	    =>	$produit->$description);
	            $req_prep 	->	execute($values);
	            return true;
        	}catch(Exception $e){
        		//error returns false
        		return false;
        	}
		}
		
		public function addType($type){
			try{
				$sql		=	"INSERT INTO Types(idType, nom) VALUES (:id, :nom);";
		    	$req_prep	=	Model::$pdo->prepare($sql);
		    	$values		=	array("id" => $type->$idType, "nom" => $type->$nom);
	            $req_prep 	->	execute($values);
	            return true;
        	}catch(Exception $e){
        		//error returns false
        		return false;
        	}
		}

	}
?>