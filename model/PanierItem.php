<?php
	require_once File::build_path(array("model", "Produit.php"));

	class PanierItem{

		public $product;
		public $quantity;

		public function __construct($product, $quantity){
			$this->product = $product;
			$this->quantity = $quantity;
		}

		
	}
?>