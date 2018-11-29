<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="res/imgs/favicon.ico" />
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
	<header>
		<div id="pres">
			<img src="res/imgs/icon.png">
			<div>
				<h1>Supernatural.com</h1>
				<p>Le leader du surnaturel</p>
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
			<div class="navbar_main_item" id="login">
				<a href="./?page=login">Login</a>
			</div>
			<div class="navbar_main_item" id="contact">
				<a href="./?page=contact">Contact</a>
			</div>
		</div>
	</header>
	<?php
	$validViews = ["ACCUEIL", "PRODUITS_LIST", "PRODUITS_SHOW", "PRODUITS_SEARCH", "PRODUITS_FORM"];

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
		}
	}else{
		//call 404
		$view = "404";
		require File::build_path(array("view", "error", "404.php"));
	}
	?>
</body>
</html>