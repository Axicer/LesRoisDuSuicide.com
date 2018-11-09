<?php
	require_once File::build_path(array("model", "Categorie.php"));
	require_once File::build_path(array("model", "Client.php"));
	require_once File::build_path(array("model", "Commande.php"));
	require_once File::build_path(array("model", "Produit.php"));
	require_once File::build_path(array("model", "Type.php"));

	class DatabaseGetter{

		public function getCategorie($id){
			try{
				$sql		=	"SELECT * FROM Categories WHERE idCategorie = :id";
		    	$req_prep	=	Model::$pdo->prepare($sql);
		    	$values		=	array("id" => $id);
	            $req_prep 	->	execute($values);
	            $req_prep 	->	setFetchMode(PDO::FETCH_CLASS, "Categorie");
	            $tab		=	$req_prep->fetchAll();
	            //get first and only val
            	return $tab[0];
        	}catch(Exception $e){
        		//error returns null
        		return null;
        	}
		}

		public function getClient($id){
			try{
				$sql		=	"SELECT * FROM Clients WHERE idClient = :id";
		    	$req_prep	=	Model::$pdo->prepare($sql);
		    	$values		=	array("id" => $id);
	            $req_prep 	->	execute($values);
	            $req_prep 	->	setFetchMode(PDO::FETCH_CLASS, "Client");
	            $tab		=	$req_prep->fetchAll();
	            //get first and only val
            	return $tab[0];
        	}catch(Exception $e){
        		//error returns null
        		return null;
        	}
		}

		public function getCommande($id){
			try{
				$sql		=	"SELECT * FROM Commandes WHERE idCommande = :id";
		    	$req_prep	=	Model::$pdo->prepare($sql);
		    	$values		=	array("id" => $id);
	            $req_prep 	->	execute($values);
	            $req_prep 	->	setFetchMode(PDO::FETCH_CLASS, "Commande");
	            $tab		=	$req_prep->fetchAll();
	            //get first and only val
            	return $tab[0];
        	}catch(Exception $e){
        		//error returns null
        		return null;
        	}
		}

		public function getProduit($id){
			try{
				$sql		=	"SELECT * FROM Produits WHERE idProduit = :id";
		    	$req_prep	=	Model::$pdo->prepare($sql);
		    	$values		=	array("id" => $id);
	            $req_prep 	->	execute($values);
	            $req_prep 	->	setFetchMode(PDO::FETCH_CLASS, "Produit");
	            $tab		=	$req_prep->fetchAll();
	            //get first and only val
            	return $tab[0];
        	}catch(Exception $e){
        		//error returns null
        		return null;
        	}
		}

		public function getType($id){
			try{
				$sql		=	"SELECT * FROM Types WHERE idType = :id";
		    	$req_prep	=	Model::$pdo->prepare($sql);
		    	$values		=	array("id" => $id);
	            $req_prep 	->	execute($values);
	            $req_prep 	->	setFetchMode(PDO::FETCH_CLASS, "Type");
	            $tab		=	$req_prep->fetchAll();
	            //get first and only val
            	return $tab[0];
        	}catch(Exception $e){
        		//error returns null
        		return null;
        	}
		}
	}
?>