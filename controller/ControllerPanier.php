<?php
	require_once File::build_path(array("model", "Produit.php"));
	// require_once File::build_path(array("controller", "Query.php"));
	
	class ControllerPanier{

		public function __construct(){
			//TODO

			$title = "Panier";
			//require view
			$view = "PANIER";
			require File::build_path(array("view", "view.php"));
		}
	}

	$controller = new ControllerPanier();
?>