<?php
	require_once File::build_path(array("model", "Produit.php"));
	require_once File::build_path(array("controller", "Query.php"));
	require_once File::build_path(array("controller", "Util.php"));
	
	class ControllerAdmin{

		public function __construct(){
			//add admin page if admin
			if(array_key_exists("admin", $_SESSION)){
				$admin = $_SESSION["admin"] == 1;
				if($admin){

					$validAction = ["show", "product_add", "product_del", "client_add", "client_del"];
					$action = Util::getFromGETorPOST("action");
					if($action == NULL)$action = "list";

					if(in_array($action, $validAction)){
						switch ($action) {
							case "show":
								$title = "Administration";
								$view = "ADMIN";
								break;
							case "product_add":
								$nom = Util::getFromGETorPOST("nom");
								$qteStock = Util::getFromGETorPOST("qte");
								$prix = Util::getFromGETorPOST("prix");
								$description = Util::getFromGETorPOST("desc");
								$imageProduit = Util::getFromGETorPOST("image");

								$values = array("nom" => $nom,
												"qteStock" => $qteStock,
												"prix" => $prix,
												"description" => $description,
												"imageProduit" => $imageProduit);

								$created = Query::pushNewproduct($pushNewProduct);

								if($created){
									$title = "Produit ajouté - Administration";
									$view = "ADMIN_PRODUCT_ADDED";
								}else{
									$title = "Erreur - Administration";
									$view = "ADMIN_ERROR";
								}
								break;
							case "product_del":

								$id = Util::getFromGETorPOST("id");

								$deleted = Query::popProduct($id);

								if($deleted){
									$title = "Produit supprimé - Administration";
									$view = "ADMIN_PRODUCT_DELETED";
								}else{
									$title = "Erreur - Administration";
									$view = "ADMIN_ERROR";
								}
								break;
							case "client_add":
								$login = Util::getFromGETorPOST("login");
								$nom = Util::getFromGETorPOST("nom");
								$prenom = Util::getFromGETorPOST("prenom");
								$addresse = Util::getFromGETorPOST("addresse");
								$codePostal = Util::getFromGETorPOST("codePostal");
								$ville = Util::getFromGETorPOST("ville");
								$mdp1 = Util::getFromGETorPOST("mdp1");
								$mdp2 = Util::getFromGETorPOST("mdp2");

								if($mdp1 != $mdp2){
									$title = "Erreur - Administration";
									$view = "ADMIN_ERROR";
								}else{
									$values = array("login" => $login,
													"nom" => $nom,
													"prenom" => $prenom,
													"addresse" => $addresse,
													"codePostal" => $codePostal,
													"ville" => $ville,
													"mdp" => hash("sha256", $mdp1));
									$created = Query::pushNewClient($values);
									if($created){
										$title = "Client crée ! - Administration";
										$view = "ADMIN_CLIENT_ADDED";
									}else{
										$title = "Erreur - Administration";
										$view = "ADMIN_ERROR";
									}
								}
								break;
							case "client_del":

								$id = Util::getFromGETorPOST("id");

								$deleted = Query::popClient($id);

								if($id){
									$title = "Client supprimé ! - Administration";
									$view = "ADMIN_CLIENT_DELETED";
								}else{
									$title = "Erreur - Administration";
									$view = "ADMIN_ERROR";
								}

								break;
						}
					}else{
						$title= "404";
						$view = "ERROR_404";
					}
				}else{
					$title = "403";
					$view = "ERROR_403";
				}
			}else{
				$title = "403";
				$view = "ERROR_403";
			}
			require File::build_path(array("view", "view.php"));
		}
	}

	$controller = new ControllerAdmin();
?>