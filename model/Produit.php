<?php
	require_once File::build_path(array("model", "Model.php"));

	class Produit{

		private $idProduit;
		private $nom;
		private $qteStock;
		private $prix;
		private $description;

		public function __construct($data){
			if(!is_null($data)){
		    	$idProduit	=	$data["idProduit"];
		    	$nom		=	$data["nom"];
		    	$qteStock	=	$data["qteStock"];
		    	$prix		=	$data["prix"];
			$description	=	$data["description"];
		    }
		}

		public function __get($att){
			return $this->$att;
		}

		public function __set($att, $val){
			$this->$att = $val;
		}
	}
?>