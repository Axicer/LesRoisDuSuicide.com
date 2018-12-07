<?php
	require_once File::build_path(array("controller", "Query.php"));
	require_once File::build_path(array("controller", "Util.php"));	
	require_once File::build_path(array("model", "Client.php"));	

	class ControllerProduit{

		public function __construct(){
			
			$validAction = ["form", "logged", "deconnect", "create_form", "create"];

			$action = Util::getFromGETorPOST("action");
			if($action == NULL)$action = "form";
			if(!in_array($action, $validAction)){
				$title = "404 - action not found";
				$view = "ERROR_404";
			}else{
				switch ($action) {
					case "form":
						$title = "Connexion";
						$view = "LOGIN_FORM";
						break;
					case "create_form":
						$title = "Creation de compte";
						$view = "LOGIN_CREATE";
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
							$title = "Erreur - Creation de compte";
							$view = "LOGIN_CREATE_ERROR";
						}else{
							$created = Query::pushNewClient(array("login" => $login,
														"nom" => $nom,
														"prenom" => $prenom,
														"adresse" => $adresse,
														"codePostal" => $codePostal,
														"ville" => $ville,
														"mdp" => hash("sha256", $mdp1)));
							if($created){
								$title = "Compte crée ! - Creation de compte";
								$view = "LOGIN_CREATED";
							}else{
								$title = "Erreur - creation de compte";
								$view = "LOGIN_CREATE_ERROR";
							}
						}
						break;
					case "logged":
						$id = Util::getFromGETorPOST("login");
						$mdp = Util::getFromGETorPOST("mdp");

						//check login
						$client = Query::login($id, $mdp);
						if($client != NULL){
							$title = "Connexion reussie !";
							$view = "LOGIN_LOGGED";
							$_SESSION["connected"] = true;
							$_SESSION["login"] = $id;
							$_SESSION["admin"] = $client->privileges;
						}else{
							$title = "Echec connexion";
							$view = "LOGIN_FORM_ERROR";
						}
						break;
					case "deconnect":
						//set disconnected
						unset($_SESSION['connected']);
						unset($_SESSION["login"]);
						unset($_SESSION["admin"]);
						
						$title = "Deconnecté";
						$view = "LOGIN_DECONNECT";
						break;
				}
			}
			require File::build_path(array("view", "view.php"));
		}
	}

	//call a new controller
	$controller = new ControllerProduit();

?>