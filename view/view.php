<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="res/imgs/favicon.ico" />
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
	<div class ="false_header"></div>
	<header>
		<?php
			if(array_key_exists("connected", $_SESSION)){
				$connected = $_SESSION["connected"];
				if($connected){
					$login = $_SESSION["login"];
					echo "<p id=\"connexion_status\">connecté en tant que $login</p>";
				}
			}
		?>
		<div id="pres">
			<img src="res/imgs/icon.png" alt="icon">
			<div>
				<h1>Le Petit Occultiste.com</h1>
				<p>Les arts occultes à portée de main !</p>
			</div>
		</div>
		<div id="navbar">
			<div class="navbar_main_item" id="accueil">
				<a href="./?page=accueil">Accueil</a>
			</div>
			<div class="navbar_main_item" id="produits">
				<a href="./?page=produits">Produits</a>
				<div class="navbar_sub_item" id="produits_search">
					<a href="./?page=produits&action=form">Recherche</a>
				</div>
			</div>
			<div class="navbar_main_item" id="panier">
				<a href="./?page=panier">Panier</a>
			</div>
			<div class="navbar_main_item" id="about">
				<a href="./?page=about">A propos</a>
			</div>
			<div class="navbar_main_item" id="contact">
				<a href="./?page=contact">Contact</a>
			</div>
			<?php
				if(array_key_exists("connected", $_SESSION)){
					$connected = $_SESSION["connected"];
					if($connected) {
						echo "<div class=\"navbar_main_item\" id=\"deconnect\">";
						echo "	<a href=\"./?page=login&action=deconnect\">Deconnexion</a>";
						
						//add admin page if admin
						if(array_key_exists("admin", $_SESSION)){
							$admin = $_SESSION["admin"] == 1;
							if($admin){
								echo "	<div class=\"navbar_sub_item\" id=\"admin\">";
								echo "		<a href=\"./?page=admin&action=show\" >Administration</a>";
								echo "	</div>";
							}
						}

						echo "</div>";
					}else{
						echo "<div class=\"navbar_main_item\" id=\"login\">";
						echo "	<a href=\"./?page=login\">Connexion</a>";
						echo "	<div class=\"navbar_sub_item\" id=\"login_create\">";
						echo "		<a href=\"./?page=login&action=create_form\">Creer un compte</a>";
						echo "	</div>";
						echo "</div>";
					}
				}else{
					echo "<div class=\"navbar_main_item\" id=\"login\">";
					echo "	<a href=\"./?page=login\">Connexion</a>";
					echo "	<div class=\"navbar_sub_item\" id=\"login_create\">";
					echo "		<a href=\"./?page=login&action=create_form\">Creer un compte</a>";
					echo "	</div>";
					echo "</div>";
				}
			?>
		</div>
	</header>
	<?php
	$validViews = ["ACCUEIL",
	"PRODUITS_LIST", "PRODUITS_SHOW", "PRODUITS_SEARCH", "PRODUITS_FORM",
	"LOGIN_FORM", "LOGIN_FORM_ERROR", "LOGIN_LOGGED", "LOGIN_DECONNECT", "LOGIN_CREATE", "LOGIN_CREATED", "LOGIN_CREATE_ERROR",
	"CONTACT_FORM", "CONTACT_SEND",
	"PANIER", "PANIER_LIST", "PANIER_ADDED", "PANIER_DELETED",
	"ABOUT", 
	"ADMIN", 
	"404", "403"];

	if (in_array($view, $validViews)) {
		switch ($view) {
			case "ACCUEIL":
			require File::build_path(array("view", "accueil", "accueil.php"));
			break;
			case "PRODUITS_LIST":
			require File::build_path(array("view", "produits", "list.php"));
			break;
			case "PRODUITS_SHOW":
			require File::build_path(array("view", "produits", "show.php"));
			break;
			case "PRODUITS_SEARCH":
			require File::build_path(array("view", "produits", "search.php"));
			break;
			case "PRODUITS_FORM":
			require File::build_path(array("view", "produits", "search-form.php"));
			break;
			case "LOGIN_FORM":
			require File::build_path(array("view", "login", "login.php"));
			break;
			case "LOGIN_FORM_ERROR":
			require File::build_path(array("view", "login", "form-error.php"));
			break;
			case "LOGIN_LOGGED":
			require File::build_path(array("view", "login", "logged.php"));
			break;
			case "LOGIN_DECONNECT":
			require File::build_path(array("view", "login", "disconnected.php"));
			break;
			case "LOGIN_CREATE":
			require File::build_path(array("view", "login", "create.php"));
			break;
			case "LOGIN_CREATE_ERROR":
			require File::build_path(array("view", "login", "create_error.php"));
			break;
			case "LOGIN_CREATED":
			require File::build_path(array("view", "login", "created.php"));
			break;
			case "CONTACT_FORM":
			require File::build_path(array("view", "contact", "contact.php"));
			break;
			case "CONTACT_SEND":
			require File::build_path(array("view", "contact", "contacted.php"));
			break;
			case "PANIER":
			require File::build_path(array("view", "panier", "panier.php"));
			break;
			case "ABOUT":
			require File::build_path(array("view", "about", "about.php"));
			break;
			case "PANIER_LIST":
			require File::build_path(array("view", "panier", "panier_list.php"));
			break;
			case "PANIER_ADDED":
			require File::build_path(array("view", "panier", "panier_added.php"));
			break;
			case "PANIER_DELETED":
			require File::build_path(array("view", "panier", "panier_list.php"));
			break;
			case "ADMIN":
			require File::build_path(array("view", "admin", "admin.php"));
			break;
			case "403":
			require File::build_path(array("view", "error", "403.php"));
			break;
			case "404":
			require File::build_path(array("view", "error", "404.php"));
			break;
		}
	}else{
		$title	= "404";
		require File::build_path(array("view", "error", "404.php"));
	}
	?>
</body>
</html>