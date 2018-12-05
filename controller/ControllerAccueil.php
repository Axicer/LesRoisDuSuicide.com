<?php
	require_once File::build_path(array("model", "Produit.php"));
	require_once File::build_path(array("controller", "Query.php"));
	
	class ControllerAccueil{

		public function __construct(){
			$new_produits = array();
			$promo_produits = array();

			for($i = 1 ; $i <= 4 ; $i++){
				$new_produits[] = Query::getSpecificProduct($i);
				$promo_produits[] = Query::getSpecificProduct($i);
			}
			
			$title = "Accueil";
			//require view
			$view = "ACCUEIL";
			require File::build_path(array("view", "view.php"));
		}
	}

	$controller = new ControllerAccueil();
?>