<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="res/imgs/favicon.ico" />
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
	<header>
		<?php
			if(array_key_exists("connected", $_COOKIE)){
				$connected = $_COOKIE["connected"];
				if($connected){
					$login = $_COOKIE["login"];
					echo "<p id=\"connexion_status\">connecté en tant que $login</p>";
				}
			}
		?>
		<div id="pres">
			<img src="res/imgs/icon.png">
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
				if(array_key_exists("connected", $_COOKIE)){
					$connected = $_COOKIE["connected"];
					if($connected) {
						echo "<div class=\"navbar_main_item\" id=\"deconnect\">";
						echo "<a href=\"./?page=login&action=deconnect\">Deconnexion</a>";
						echo "</div>";
					}else{
						echo "<div class=\"navbar_main_item\" id=\"login\">";
						echo "<a href=\"./?page=login\">Connexion</a>";
						echo "</div>";
					}
				}else{
					echo "<div class=\"navbar_main_item\" id=\"login\">";
					echo "<a href=\"./?page=login\">Connexion</a>";
					echo "</div>";
				}
			?>
		</div>
	</header>
	<?php
	$validViews = ["ACCUEIL", "PRODUITS_LIST", "PRODUITS_SHOW", "PRODUITS_SEARCH",
	 "PRODUITS_FORM", "LOGIN_FORM", "LOGIN_FORM_ERROR", "LOGIN_LOGGED", "LOGIN_DECONNECT", "CONTACT_FORM", "CONTACT_SEND",
	 "PANIER", "ABOUT"];

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
		}
	}else{
		$title = "404";
		//call 404
		$view = "404";
		require File::build_path(array("view", "error", "404.php"));
	}
	?>
</body>
</html>