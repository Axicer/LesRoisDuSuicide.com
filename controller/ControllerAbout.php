<?php
	require_once File::build_path(array("model", "Produit.php"));
	// require_once File::build_path(array("controller", "Query.php"));
	
	class ControllerPanier{

		public function __construct(){
			$title = "A propos";
			//require view
			$view = "ABOUT";
			require File::build_path(array("view", "view.php"));
		}
	}

	$controller = new ControllerPanier();
?>