<link rel="stylesheet" type="text/css" href="styles/accueil/accueil.css">
<main>
	<h2>Nouveautés:</h2>
	<!-- recupere 2 tableaux : $new_produits - tableau des 4 produits et $new_imgs - tableau des 4 images associees -->
	<!-- tableau de 4 -->
	<div class = "tab_products" id = "new">
		<div id = "new_produit_1">
			<!-- img + lien -->
			<div class = "prod_img">
				<!-- recup image + lien href -->
				<a href = "?page=produits&action=specific&id=<?php echo $new_produits[0]->idProduit;?>">
					<img src = "res/imgs/<?php echo $new_produits[0]->imageProduit;?>" alt="img">
				</a>
			</div>
			<!-- nom + lien, prix -->
			<div class = "prod_nom&prix">
				<p> <!-- recup name --> 
					<a href="?page=produits&action=specific&id=<?php echo $new_produits[0]->idProduit;?>" >
						<?php echo $new_produits[0]->nom;?>
					</a>
				</p>
				<p> <!-- recup prix --> 
					<?php echo $new_produits[0]->prix."€";?>
				</p>
			</div>
		</div>
		<div id = "new_produit_2">
			<!-- img + lien -->
			<div class = "prod_img">
				<!-- recup image + lien href -->
				<a href = "?page=produits&action=specific&id=<?php echo $new_produits[1]->idProduit;?>">
					<img src = "res/imgs/<?php echo $new_produits[1]->imageProduit;?>" alt="img">
				</a>
			</div>
			<!-- nom + lien, prix -->
			<div class = "prod_nom&prix">
				<p> <!-- recup name --> 
					<a href="?page=produits&action=specific&id=<?php echo $new_produits[0]->idProduit;?>" >
						<?php echo $new_produits[1]->nom;?>
					</a>
				</p>
				<p> <!-- recup prix --> 
					<?php echo $new_produits[1]->prix."€";?>
				</p>
			</div>
		</div>
		<div id = "new_produit_3">
			<!-- img + lien -->
			<div class = "prod_img">
				<!-- recup image + lien href -->
				<a href = "?page=produits&action=specific&id=<?php echo $new_produits[2]->idProduit;?>">
					<img src = "res/imgs/<?php echo $new_produits[2]->imageProduit;?>" alt="img">
				</a>
			</div>
			<!-- nom + lien, prix -->
			<div class = "prod_nom&prix">
				<p> <!-- recup name --> 
					<a href="?page=produits&action=specific&id=<?php echo $new_produits[0]->idProduit;?>" >
						<?php echo $new_produits[2]->nom;?>
					</a>
				</p>
				<p> <!-- recup prix --> 
					<?php echo $new_produits[2]->prix."€";?>
				</p>
			</div>
		</div>
		<div id = "new_produit_4">
			<!-- img + lien -->
			<div class = "prod_img">
				<!-- recup image + lien href -->
				<a href = "?page=produits&action=specific&id=<?php echo $new_produits[3]->idProduit;?>">
					<img src = "res/imgs/<?php echo $new_produits[3]->imageProduit;?>" alt="img">
				</a>
			</div>
			<!-- nom + lien, prix -->
			<div class = "prod_nom&prix">
				<p> <!-- recup name --> 
					<a href="?page=produits&action=specific&id=<?php echo $new_produits[0]->idProduit;?>" >
						<?php echo $new_produits[3]->nom;?>
					</a>
				</p>
				<p> <!-- recup prix --> 
					<?php echo $new_produits[3]->prix."€";?>
				</p>
			</div>
		</div>	
	</div>

	<h2>En promo:</h2>

	<!-- recupere 2 tableaux : $promo_produits - tableau des 4 produits et $promo_imgs - tableau des 4 images associees -->
	<!-- tableau de 4 -->
	<div class = "tab_products" id = "promo">
		<div id = "promo_produit_1">
			<!-- img + lien -->
			<div class = "prod_img">
				<!-- recup image + lien href -->
				<a href = "?page=produits&action=specific&id=<?php echo $promo_produits[0]->idProduit;?>">
					<img src = "res/imgs/<?php echo $promo_produits[0]->imageProduit;?>" alt="img" >
				</a>
			</div>
			<!-- nom + lien, prix -->
			<div class = "prod_nom&prix">
				<p> <!-- recup name --> 
					<a href="?page=produits&action=specific&id=<?php echo $promo_produits[0]->idProduit;?>" >
						<?php echo $promo_produits[0]->nom;?>
					</a>
				</p>
				<p> <!-- recup prix --> 
					<?php echo $promo_produits[0]->prix."€";?>
				</p>
			</div>
		</div>
		<div id = "promo_produit_2">
			<!-- img + lien -->
			<div class = "prod_img">
				<!-- recup image + lien href -->
				<a href = "?page=produits&action=specific&id=<?php echo $promo_produits[1]->idProduit;?>">
					<img src = "res/imgs/<?php echo $promo_produits[1]->imageProduit;?>" alt="img">
				</a>
			</div>
			<!-- nom + lien, prix -->
			<div class = "prod_nom&prix">
				<p> <!-- recup name --> 
					<a href="?page=produits&action=specific&id=<?php echo $promo_produits[0]->idProduit;?>" >
						<?php echo $promo_produits[1]->nom;?>
					</a>
				</p>
				<p> <!-- recup prix --> 
					<?php echo $promo_produits[1]->prix."€";?>
				</p>
			</div>
		</div>
		<div id = "promo_produit_3">
			<!-- img + lien -->
			<div class = "prod_img">
				<!-- recup image + lien href -->
				<a href = "?page=produits&action=specific&id=<?php echo $promo_produits[2]->idProduit;?>">
					<img src = "res/imgs/<?php echo $promo_produits[2]->imageProduit;?>" alt="img">
				</a>
			</div>
			<!-- nom + lien, prix -->
			<div class = "prod_nom&prix">
				<p> <!-- recup name --> 
					<a href="?page=produits&action=specific&id=<?php echo $promo_produits[0]->idProduit;?>" >
						<?php echo $promo_produits[2]->nom;?>
					</a>
				</p>
				<p> <!-- recup prix --> 
					<?php echo $promo_produits[2]->prix."€";?>
				</p>
			</div>
		</div>
		<div id = "promo_produit_4">
			<!-- img + lien -->
			<div class = "prod_img">
				<!-- recup image + lien href -->
				<a href = "?page=produits&action=specific&id=<?php echo $promo_produits[3]->idProduit;?>">
					<img src = "res/imgs/<?php echo $promo_produits[3]->imageProduit;?>" alt="img">
				</a>
			</div>
			<!-- nom + lien, prix -->
			<div class = "prod_nom&prix">
				<p> <!-- recup name --> 
					<a href="?page=produits&action=specific&id=<?php echo $promo_produits[0]->idProduit;?>" >
						<?php echo $promo_produits[3]->nom;?>
					</a>
				</p>
				<p> <!-- recup prix --> 
					<?php echo $promo_produits[3]->prix."€";?>
				</p>
			</div>
		</div>	
	</div>
</main>