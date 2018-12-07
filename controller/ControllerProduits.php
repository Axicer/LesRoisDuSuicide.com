<?php
	require_once File::build_path(array("model", "Produit.php"));
	require_once File::build_path(array("controller", "Query.php"));
	require_once File::build_path(array("controller", "Util.php"));

	$validAction = ["list", "specific", "search", "form"];

	$action = Util::getFromGETorPOST("action");
	if ($action == NULL) $action = "list";
	if (!in_array($action, $validAction)) {
		$title = "404 - Action not found";
		$view = "ERROR_404";
	} else {
		switch ($action) {

			//Consulter la liste des produits
			case "list":
				$products = Query::getAllProducts(50);
				$productsAmount = sizeof($products);

				$title = "Liste des produits";
				$view = "PRODUITS_LIST";
				break;

			//Consulter un produit en particulier
			case "specific":
				$id = Util::getFromGETorPOST("id");
				if ($id == NULL) {
					$title = "404 - id not found";
					$view = "ERROR_404";
				} else {
					$product = Query::getSpecificProduct($id);
					$title = $product->nom;
					
					$title = "Affichage produit";
					$view = "PRODUITS_SHOW";
				}
				break;


			//Accès au formulaire pour rechercher un produit
			case "form":
				$title = "Recherche produit";
				$view = "PRODUITS_FORM";
				break;
			
			//Rechercher un produit
			case "search":
				$name = Util::getFromGETorPOST("name");
				if ($name == NULL) {
					$title = "404 - term not found";
					$view = "ERROR_404";
				} else {
					$products = Query::rechercheProduit($name);
					if($products == NULL){
						$title = "no products found";
						$view = "PRODUITS_FORM_ERROR";
					}else{
						$productsAmount = sizeof($products);
						$title = "Recherche produit";
						$view = "PRODUITS_SEARCH";
					}

				}
				break;
		}
	}
	require File::build_path(array("view", "view.php"));
?>