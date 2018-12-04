<?php
	require_once File::build_path(array("model", "Produit.php"));
	// require_once File::build_path(array("controller", "Query.php"));
	
	class ControllerPanier{

		public function __construct(){
			
			$validAction = ["list", "delete", "add", "update"];

			$action = Util::getFromGETorPOST("action");
			if($action == NULL)$action = "list";
			if(!in_array($action, $validAction)){
				$title = "404";
				//call 404
				$view = "404";
				require File::build_path(array("view", "view.php"));
			}else{
				switch ($action) {
					case "list":
						//TODO
						break;
					case "delete":
						//TODO
						break;
					case "add":
						$new_product = json_decode($_COOKIE["new_product"]);

						//TODO
						break;
					case "update":
						//TODO
						break;
				}
			}
			$title = "Panier";
			//require view
			$view = "PANIER";
			require File::build_path(array("view", "view.php"));
		}
	}

	$controller = new ControllerPanier();
?>