<?php
	require_once File::build_path(array("model", "Produit.php"));

	class PanierItem{

		public $id;
		public $quantity;

		public function __construct($id, $quantity){
			$this->id = $id;
			$this->quantity = $quantity;
		}

		
	}
?>