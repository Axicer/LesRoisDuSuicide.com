<?php
	require_once File::build_path(array("model", "Model.php"));

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
		    	
		    	//TODO get lignes by sql request
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