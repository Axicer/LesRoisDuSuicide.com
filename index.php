<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style/main.css">
		<link rel="icon" href="img/favicon.ico" />
		<title>Supernatural.com - Home</title>
	</head>
	<body>
		<header style = "text-align: center;">
			<h1>Supernatural.com</h1>
			<p>Le leader du surnaturel</p>
		</header>
		<main>
			<?php
				require_once "lib/File.php";
				require File::build_path(array("controller", "router.php"));
				echo "coucou-index ";
			?>
		</main>
		<footer>
			
		</footer>
	</body>
</html>
