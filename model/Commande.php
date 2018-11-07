<?php
	require_once File::build_path(array("model", "Model.php"));
	require_once File::build_path(array("model", "LignesCommandes.php"));

	class Commande{

		private $idCommande;
		private $date;
		private $etat;
		private $lignes;

		public function __construct($data){
		    if(!is_null($data)){
		    	$idCommande	=	$data["idCommande"];
		    	$date		=	$data["date"];
		    	$etat		=	$data["etat"];
		    	
		    	$sql		=	"SELECT * FROM LignesCommandes WHERE idCommande = :id";
		    	$req_prep	=	Model::$pdo->prepare($sql);
		    	$values		=	array("id" => $idCommande);
                $req_prep 	->	execute($values);
                $req_prep 	->	setFetchMode(PDO::FETCH_CLASS, "LigneCommande");
                $tab		=	$req_prep->fetchAll();
		    }
		}

		public function __get($att){
			return $this->$att;
		}

		public function __set($att,$val){
			$this->$att = $val;
		}


	}



?>