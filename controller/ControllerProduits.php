<?php
	require_once File::build_path(array("model", "Produit.php"));
	require_once File::build_path(array("controller", "Query.php"));
	require_once File::build_path(array("controller", "Util.php"));	

	$validAction = ["list", "specific"];

	class ControllerProduit{

		public function __construct(){
			
			$action = Util::getFromGETorPOST("action");
			if($action == NULL || !in_array($action, $validAction)){
				//call 404
				$view = "404";
				require File::build_path(array("view", "view.php"));
			}else{
				switch ($action) {
					case "list":
						$title = "Liste des produits";
						$productsAmount = 50;
						$products = Query::getAllProducts($productsAmount);
						//call view with view arg to "PRODUITS_LIST"
						$view = "PRODUITS_LIST";
						require File::build_path(array("view", "view.php"));
						break;
					case "specific":
						$id = Util::getFromGETorPOST("id");
						if($id == NULL){
							//send 404
							$view = "404";
							require File::build_path(array("view", "view.php"));
						}else{
							$product = Query::getSpecificProduct($id);
							$title = $id->nom;
							// call view with wiew arg to "PRODUITS_SHOW"
							$view = "PRODUITS_SHOW";
							require File::build_path(array("view", "view.php"));
						}
						break;
					case "search":
						$name = Util::getFromGETorPOST("name");
						if($name == NULL){
							//send 404
							$view = "404";
							require File::build_path(array("view", "view.php"));
						}else{
							$productsAmount = 50;
							$products = Query::rechercheProduit($name);
							$title = "Recherche produit";
							//call view with view arg to "PRODUITS_SEARCH"
							$view = "PRODUITS_SEARCH";
							require File::build_path(array("view", "view.php"));
						}
						break;
				}
			}
		}
	}

	//call a new controller
	$controller = new ControllerProduit();

?>