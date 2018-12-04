<?php
	require_once File::build_path(array("model", "Produit.php"));
	require_once File::build_path(array("model", "PanierItem.php"));
	
	class ControllerPanier{

		public function __construct(){
			
			$validAction = ["list", "delete", "add"];
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
						//get panier content	
						$panierContent = array_key_exists("panier", $_COOKIE) ? $_COOKIE["panier"] : array();
						$panierAmount = count($panierContent);
						$title = "Panier";
						$view = "PANIER_LIST";
						require File::build_path(array("view", "view.php"));
						break;
					case "delete":
						//get id
						$to_del = Util::getFromGETorPOST("id");
						//get panier content
						$panierContent = array_key_exists("panier", $_COOKIE) ? $_COOKIE["panier"] : array();
						
						foreach ($panierContent as $key => $item) {
							//current product is $p
							$p = $item->product;
							//if id's are matching
							if($p->idProduit == $to_del){
								//unset content
								unset($panierContent[$key]);
								break;
							}
						}

						setcookie("panier", serialize($panierContent));
						

						$title = "Objet supprimé !";
						$view = "PANIER_DELETED";
						require File::build_path(array("view", "view.php"));
						break;
					case "add":
						//get new product
						$new_product = unserialize(Util::getFromGETorPOST("new_product"));
						$q = Util::getFromGETorPOST("quantity");
						if($new_product == NULL){
							$title = "404 - Product not found";
							//call 404
							$view = "404";
							require File::build_path(array("view", "view.php"));
						}
						if($q == NULL)$q = 1;
						
						//get panier content
						$panierContent = array_key_exists("panier", $_COOKIE) ? $_COOKIE["panier"] : array();
						
						$found = false;
						foreach ($panierContent as $key => $item) {
							//current product is $p
							$p = $item->product;
							//if id's are matching
							if($p->idProduit == $new_product->idProduit){
								//update quantity for this item
								$item->quantity += $q;
								$found = true;
								break;
							}
						}
						if(!$found){
							//add new product to panier
							$panierContent[] = new PanierItem($new_product, $q);
						}

						//set cookie
						setcookie("panier", serialize($panierContent));


						$title = "Objet ajouté !";
						$view = "PANIER_ADDED";
						require File::build_path(array("view", "view.php"));
						break;
				}
			}
		}
	}

	$controller = new ControllerPanier();
?>