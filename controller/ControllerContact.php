<?php
	require_once File::build_path(array("controller", "Query.php"));
	require_once File::build_path(array("controller", "Util.php"));	

	class ControllerProduit{

		public function __construct(){
			
			$validAction = ["form", "send"];
			
			$action = Util::getFromGETorPOST("action");
			if($action == NULL)$action = "form";
			if(!in_array($action, $validAction)){
				$title = "404 - action not found"
				$view = "ERROR_404";
			}else{
				switch ($action) {
					case "form":
						$title = "Formulaire de contact";
						$view = "CONTACT_FORM";
						break;
					case "send":
						$name = Util::getFromGETorPOST("nom");
						$prenom = Util::getFromGETorPOST("prenom");
						$email = Util::getFromGETorPOST("email");
						$message = Util::getFromGETorPOST("message");

						$title= "Message envoyé - Contact";
						$view = "CONTACT_SEND";
						break;
				}
			}
			require File::build_path(array("view", "view.php"));
		}
	}

	//call a new controller
	$controller = new ControllerProduit();

?>