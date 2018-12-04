<?php
	require_once File::build_path(array("model", "Produit.php"));
	require_once File::build_path(array("controller", "Query.php"));
	require_once File::build_path(array("controller", "Util.php"));	

	class ControllerProduit{

		public function __construct(){

			$validAction = ["list", "specific", "search", "form"];

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
						$title = "Liste des produits";
						$products = Query::getAllProducts(50);
						$productsAmount = sizeof($products);
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
							$title = $product->nom;
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
							$products = Query::rechercheProduit($name);
							$productsAmount = sizeof($products);
							$title = "Recherche produit";
							//call view with view arg to "PRODUITS_SEARCH"
							$view = "PRODUITS_SEARCH";
							require File::build_path(array("view", "view.php"));
						}
						break;
					case "form":
						$title = "Recherche produit";
						//call view with view arg to "PRODUITS_FORM"
						$view = "PRODUITS_FORM";
						require File::build_path(array("view", "view.php"));
						break;
				}
			}
		}
	}

	//call a new controller
	$controller = new ControllerProduit();

?>