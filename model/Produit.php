<?php
	require File::build_path(array("model", "Model.php"));

	class Produit extends Model{
		protected static $ATTRIBUTES = ["idCategorie", "idType", "nomProduit", "descProduit"];
		protected static $PRIMARY = "idProduit";
		protected static $TABLE_NAME = "Produits";

		private $idProduit = NULL;
		private $idCategorie = NULL;
		private $idType = NULL;
		private $nomProduit = NULL;
		private $descProduit = NULL;

		public function __construct($data){
			if(!is_null($data)){
				$idProduit = $data["idProduit"];
				$idCategorie = $data["idCategorie"];
				$idType = $data["idType"];
				$nomProduit = $data["nomProduit"];
				$descProduit = $data["descProduit"];
			}
		}

		public function __get($att){
			return this->$att;
		}

		public function __set($att, $val){
			this->$att = $val;
		}
	}
?>