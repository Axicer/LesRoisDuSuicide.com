<?php
	require_once File::build_path(array("controller", "Util.php"));

	$pagesValide = ["accueil", "contact", "login", "admin", "produits"];

	$page = Util::getFromGETorPOST("page");
	//if not defined then send 404 page
	if($page == NULL){
		//send to page not found (error 404)
		require File::build_path(array("view", "error", "404.php"));
	}

	//check for page valid
	if(in_array($page, $pagesValide)){
		//controller name
		$cname = "Controller".ucfirst($controller);
		if(class_exists($cname)){
			//require new controller
            require File::build_path(array("controller", $cname));
        }else{
            //send to page not found (error 404)
			require File::build_path(array("view", "error", "404.php"));
        }
	}else{
		//send to page not found (error 404)
		require File::build_path(array("view", "error", "404.php"));
	}
?>