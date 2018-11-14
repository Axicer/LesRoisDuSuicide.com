<?php
	require_once File::build_path(array("model", "Model.php"));
	
	class LigneCommande{
		
		private $idClient;
		private $idProduit;
		private $idCommande;
		private $qte;
		
		public function __construct($data){
			if(!is_null($data)){
				$idClient	=	$data['idClient'];
				$idProduit	=	$data['idProduit'];
				$idCommande	=	$data['idCommande'];
				$qte		=	$data['qte'];
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