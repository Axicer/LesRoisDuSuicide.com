<?php
	require_once File::build_path(array("model", "Model.php"));

	class Client{

		private $idCommande;
		private $date;
		private $etat;
		private $lignes;

		public function __construct($data){
		    //TODO
		}

		public function __get($att){
			return $this->$att;
		}

		public function __set($att,$val){
			$this->$att = $val;
		}


	}



?>