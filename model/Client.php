<?php
	require_once File::build_path(array("model", "Model.php"));

	class Client{

		private $idClient;
		private $nom;
		private $prenom;
		private $adresse;
		private $codePostal;
		private $ville;
		private $privileges;
		private $mdp;

		public function __construct($data){
		    if(!is_null($data)){
		    	$idClient	=	$data["idClient"];
		    	$nom		=	$data["nom"];
		    	$prenom		=	$data["prenom"];
		    	$adresse	=	$data["adresse"];
		    	$codePostal	=	$data["codePostal"];
		    	$ville		=	$data["ville"];
		    	$privileges	=	$data["privileges"];
		    	$mdp		=	$data["mdp"];
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