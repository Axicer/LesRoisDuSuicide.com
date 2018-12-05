<?php
	require_once File::build_path(array("controller", "Query.php"));
	require_once File::build_path(array("controller", "Util.php"));	
	require_once File::build_path(array("model", "Client.php"));	

	class ControllerProduit{

		public function __construct(){
			
			$validAction = ["form", "logged", "deconnect", "create_form", "create", "create_form_error"];

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
					case "create_form":
						$title = "Creation de compte";
						$view = "LOGIN_CREATE";
						require File::build_path(array("view", "view.php"));
						break;
					case "create_form_error":
						$title = "Erreur - Creation de compte";
						$view = "LOGIN_CREATE_ERROR";
						require File::build_path(array("view", "view.php"));
						break;
					case "create":
						$login = Util::getFromGETorPOST("login");
						$nom = Util::getFromGETorPOST("nom");
						$prenom = Util::getFromGETorPOST("prenom");
						$adresse = Util::getFromGETorPOST("adresse");
						$codePostal = Util::getFromGETorPOST("codePostal");
						$ville = Util::getFromGETorPOST("ville");
						$mdp1 = Util::getFromGETorPOST("mdp1");
						$mdp2 = Util::getFromGETorPOST("mdp2");

						if($mdp1 != $mdp2){
							$title = "compte crée !";
							$view = "LOGIN_CREATE_ERROR";
							require File::build_path(array("view", "view.php"));
						}else{
							Query::pushNewClient(array("login" => $client->login,
														"nom" => $client->nom,
														"prenom" => $client->prenom,
														"adresse" => $client->adresse,
														"codePostal" => $client->codePostal,
														"ville" => $client->ville,
														"mdp" => hash("sha256", $client->mdp)));

							$title = "compte crée !";
							$view = "LOGIN_CREATED";
							require File::build_path(array("view", "view.php"));
							break;
						}
					case "logged":
						$id = Util::getFromGETorPOST("login");
						$mdp = Util::getFromGETorPOST("mdp");
						$mdp2 = Util::getFromGETorPOST("mdp2");

						//check login
						$valid = Query::login($id, $mdp);
						if($valid){
							$title = "Connexion reussie !";
							$view = "LOGIN_LOGGED";
							$_SESSION["connected"] = true;
							$_SESSION["login"] = $id;
						}else{
							$title = "Echec connexion";
							$view = "LOGIN_FORM_ERROR";
						}

						require File::build_path(array("view", "view.php"));
						break;
					case "deconnect":
						//set disconnected
						unset($_SESSION['connected']);

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