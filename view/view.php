<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="res/imgs/favicon.ico" />
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
	<header>
		<img src="res/imgs/icon.png">
		<div>
			<h1>Supernatural.com</h1>
			<p>Le leader du surnaturel</p>
		</div>
	</header>
	<?php
	$validViews = ["ACCUEIL", "PRODUITS_LIST", "PRODUITS_SHOW", "PRODUITS_SEARCH"];

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
		}
	}else{
		//call 404
		$view = "404";
		require File::build_path(array("view", "error", "404.php"));
	}
	?>
</body>
</html>