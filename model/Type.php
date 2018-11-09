<?php
	require_once File::build_path(array("model", "Model.php"));

	class Type{

		private $idType;
		private $nom;

		public function __construct($data){
		    if(!is_null($data)){
		    	$idCategorie 	= 	$data["idType"];
		    	$nom 			= 	$data["nom"];
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