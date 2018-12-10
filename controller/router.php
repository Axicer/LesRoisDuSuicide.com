<?php
	require_once File::build_path(array("model", "Model.php"));
	require_once File::build_path(array("controller", "Util.php"));

	$pagesValide = ["accueil", "contact", "login", "admin", "produits", "panier", "admin"];
	$page = Util::getFromGETorPOST("page");
	if($page == NULL)$page = "accueil";
	//init DB
	Model::Init();
	//init session
	session_start();
	
	$cname = "Controller".ucfirst($page);
	$path = File::build_path(array("controller", $cname.".php"));
	if(file_exists($path)){
		require $path;
	}else{
		$title = "404 - Page not found";
		$view = "ERROR_404";
		require File::build_path(array("view", "view.php"));
	}
?>