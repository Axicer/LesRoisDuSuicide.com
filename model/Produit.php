<?php
	require_once File::build_path(array("model", "Model.php"));

	class Produit{

		public $idProduit;
		public $nom;
		public $qteStock;
		public $prix;
		public $description;
		public $imageProduit;

		public function __construct($data = NULL){
			if(!empty($data)){

		    	$this->idProduit	=	$data["idProduit"];
		    	$this->nom			=	$data["nom"];
		    	$this->qteStock		=	$data["qteStock"];
		    	$this->prix			=	$data["prix"];
				$this->description	=	$data["description"];
				$this->imageProduit	=	$data["imageProduit"];
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