<?php
	require_once File::build_path(array("model", "Produit.php"));
	require_once File::build_path(array("controller", "Query.php"));
	
	class ControllerAdmin{

		public function __construct(){
			//add admin page if admin
			if(array_key_exists("admin", $_SESSION)){
				$admin = $_SESSION["admin"] == 1;
				if($admin){
					$title = "Administration";
					$view = "ADMIN";
				}else{
					$title = "403";
					$view = "403";
				}
			}else{
				$title = "403";
				$view = "403";
			}
			require File::build_path(array("view", "view.php"));
		}
	}

	$controller = new ControllerAdmin();
?>