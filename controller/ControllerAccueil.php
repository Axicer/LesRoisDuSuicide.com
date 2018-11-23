<?php
	require_once File::build_path(array("model", "Produit.php"));
	require_once File::build_path(array("controller", "Query.php"));
	
	class ControllerAccueil{

		public function __construct(){
			$p1 = new Produit(["idProduit" => "p1",
								"nom" => "produit 1",
								"qteStock" => 20,
								"prix" => 6.66,
								"description" => "OwO"]);
			$p2 = new Produit(["idProduit" => "p2", "nom" => "produit 2",
								"qteStock" => 20,
								"prix" => 69,
								"description" => "OwO"]);
			$p3 = new Produit(["idProduit" => "p3", "nom" => "produit 3",
								"qteStock" => 20,
								"prix" => 42,
								"description" => "OwO"]);
			$p4 = new Produit(["idProduit" => "p4", "nom" => "produit 4",
								"qteStock" => 20,
								"prix" => 21,
								"description" => "OwO"]);
			
			$new_produits = array($p1,$p2,$p3,$p4);

			echo Query::getMainImgFromProduit(1);

			//require File::build_path(array("view", "accueil", "accueil.php"));
		}
	}

	$controller = new ControllerAccueil();

?>