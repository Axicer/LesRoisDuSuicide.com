<?php
	require_once File::build_path(array("controller", "Query.php"));
	require_once File::build_path(array("controller", "Util.php"));	

	class ControllerProduit{

		public function __construct(){
			
			$validAction = ["form", "logged", "deconnect"];

			$action = Util::getFromGETorPOST("action");
			if($action == NULL)$action = "form";
			if(!in_array($action, $validAction)){
				$title = "404";
				//call 404
				$view = "404";
				require File::build_path(array("view", "view.php"));
			}else{
				switch ($action) {
					case "form":
						$title = "Connexion";
						//call view with view arg to "LOGIN_FORM"
						$view = "LOGIN_FORM";
						require File::build_path(array("view", "view.php"));
						break;
					case "logged":
						$id = Util::getFromGETorPOST("login");
						$mdp = Util::getFromGETorPOST("mdp");
						$mdp2 = Util::getFromGETorPOST("mdp2");

						//check login
						$valid = Query::login($id, $mdp);
						if($valid){
							$title = "Connexion reussie !";
							$view = "LOGIN_LOGGED";
							setcookie("connected", true);
							$_COOKIE["connected"] = true;
							setcookie("login", $id);
							$_COOKIE["connected"] = $id;
						}else{
							$title = "Echec connexion";
							$view = "LOGIN_FORM_ERROR";
						}

						require File::build_path(array("view", "view.php"));
						break;
					case "deconnect":
						//set connected
						setcookie("connected", false);
						$_COOKIE["connected"] = false;

						$title = "Deconnecté";
						//call view with view arg to "LOGIN_DECONNECT"
						$view = "LOGIN_DECONNECT";
						require File::build_path(array("view", "view.php"));
						break;
				}
			}
		}
	}

	//call a new controller
	$controller = new ControllerProduit();

?>