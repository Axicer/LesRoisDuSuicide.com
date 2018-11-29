<?php
	require_once File::build_path(array("controller", "Query.php"));
	require_once File::build_path(array("controller", "Util.php"));	

	class ControllerProduit{

		public function __construct(){
			
			$validAction = ["form", "send"];
			
			$action = Util::getFromGETorPOST("action");
			if($action == NULL)$action = "form";
			if(!in_array($action, $validAction)){
				//call 404
				$view = "404";
				require File::build_path(array("view", "view.php"));
			}else{
				switch ($action) {
					case "form":
						$title = "Formulaire de contact";
						//call view with view arg to "CONTACT_FORM"
						$view = "CONTACT_FORM";
						require File::build_path(array("view", "view.php"));
						break;
					case "send":
						$name = Util::getFromPost("nom");
						$prenom = Util::getFromPost("prenom");
						$email = Util::getFromPost("email");
						$message = Util::getFromPost("message");

						//TODO envoyer le message

						$title= "Message envoyé";
						//call view with view arg to "CONTACT_SEND"
						$view = "CONTACT_SEND";
						require File::build_path(array("view", "view.php"));
						break;
				}
			}
		}
	}

	//call a new controller
	$controller = new ControllerProduit();

?>