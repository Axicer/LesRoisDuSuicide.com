<?php
	require_once File::build_path(array("controller", "Query.php"));
	require_once File::build_path(array("controller", "Util.php"));	

	$validAction = ["form", "logged"];

	class ControllerProduit{

		public function __construct(){
			
			$action = Util::getFromGETorPOST("action");
			if($action == NULL || !in_array($action, $validAction)){
				//call 404
				$view = "404";
				require File::build_path(array("view", "view.php"));
			}else{
				switch ($action) {
					case "form":
						$title = "Formulaire de contact";
						//call view with view arg to "LOGIN_FORM"
						$view = "LOGIN_FORM";
						require File::build_path(array("view", "view.php"));
						break;
					case "logged":
						$id = Util::getFromPost("id");
						$mdp = Util::getFromPost("mdp");

						//check login
						$valid = Query::login($id, $mdp);

						//call view with view arg to "LOGIN_LOGGED"
						$view = "LOGIN_LOGGED";
						require File::build_path(array("view", "view.php"));
						break;
				}
			}
		}
	}

	//call a new controller
	$controller = new ControllerProduit();

?>