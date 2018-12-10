<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="res/imgs/favicon.ico" />
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
		$fileName = strtolower($view).".php";
		$pageRelated = strtolower(explode("_", $view)[0]);
		try{
			//try to get the needed view
			require File::build_path(array("view", $pageRelated, $fileName));
		}catch(Exception $e){
			//send 404 if not found
			$title	= "404 - view not found";
			require File::build_path(array("view", "error", "error_404.php"));
		}
	?>
</body>
</html>