<?php
	require_once File::build_path(array("model", "Model.php"));

	class Client{

		public $idClient;
		public $login;
		public $nom;
		public $prenom;
		public $adresse;
		public $codePostal;
		public $ville;
		public $privileges;
		public $mdp;

		public function __construct($data = NULL){
		    if(!is_null($data)){
		    	$this->idClient		=	$data["idClient"];
		    	$this->login		=	$data["login"];
		    	$this->nom			=	$data["nom"];
		    	$this->prenom		=	$data["prenom"];
		    	$this->adresse		=	$data["adresse"];
		    	$this->codePostal	=	$data["codePostal"];
		    	$this->ville		=	$data["ville"];
		    	$this->privileges	=	$data["privileges"];
		    	$this->mdp			=	$data["mdp"];
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