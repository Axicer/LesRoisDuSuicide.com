<?php
	require_once File::build_path(array("model", "Produit.php"));
	$p1 = new Produit(["idProduit" => "p1", "nom" => "produit 1"]);
	$p2 = new Produit(["idProduit" => "p2", "nom" => "produit 2"]);
	$p3 = new Produit(["idProduit" => "p3", "nom" => "produit 3"]);
	$p4 = new Produit(["idProduit" => "p4", "nom" => "produit 4"]);

	$produits = [$p1,$p2,$p3,$p4];
	require File::build_path(array("view", "accueil", "accueil.php"));
?>