<?php
	require_once File::build_path(array("model", "Model.php"));
	require_once File::build_path(array("controller", "Util.php"));

	$pagesValide = ["accueil", "contact", "login", "admin", "produits", "panier", "about", "admin"];
	$page = Util::getFromGETorPOST("page");
	if($page == NULL)$page = "accueil";
	//init DB
	Model::Init();
	//init session
	session_start();
	//check for page valid
	if(in_array($page, $pagesValide)){
		//controller name
		$cname = "Controller".ucfirst($page);
		if(file_exists(File::build_path(array("controller", $cname.".php")))){
			//require new controller
            require File::build_path(array("controller", $cname.".php"));
        }else{
        	$title = "404 Error";
            //call 404
			$view = "404";
			require File::build_path(array("view", "view.php"));
        }
	}else{
		$title = "404 Error";
		//call 404
		$view = "404";
		require File::build_path(array("view", "view.php"));
	}
?>