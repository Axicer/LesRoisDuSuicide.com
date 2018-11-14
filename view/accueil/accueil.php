<h2>Nouveautés</h2>
<!-- recupere 2 tableaux : $new_produits - tableau des 4 produits et $new_imgs - tableau des 4 images associees -->
	<!-- tableau de 4 -->
	<div class = "tab_new_products">
		<div id = "new_produit_1">
			<!-- img + lien -->
			<div id = "new_prod_img">
				<!-- recup image + lien href -->
				<a href = "?page=produits&id=<?php echo $new_produits[0]->idProduit;?>"> <img src = <?php echo $new_imgs[0];?> > </a>
			</div>
			<!-- nom + lien, prix -->
			<div id = "new_prod_nom&prix">
				<p> <!-- recup name --> 
					<a href="?page=produits&id=<?php echo $new_produits[0]->idProduit;?>" > <?php echo $new_produits[0]->nom;?> </a>
				</p>
				<p> <!-- recup prix --> 
					<?php echo $new_produits[0]->prix;?>
				</p>
			</div>
		</div>
		<div id = "new_produit_2">
			<!-- img + lien -->
			<div id = "new_prod_img">
				<!-- recup image + lien href -->
				<a href = "?page=produits&id=<?php echo $new_produits[1]->idProduit;?>"> <img src = <?php echo $new_imgs[1];?> > </a>
			</div>
			<!-- nom + lien, prix -->
			<div id = "new_prod_nom&prix">
				<p> <!-- recup name --> 
					<a href="?page=produits&id=<?php echo $new_produits[0]->idProduit;?>" > <?php echo $new_produits[1]->nom;?> </a>
				</p>
				<p> <!-- recup prix --> 
					<?php echo $new_produits[1]->prix;?>
				</p>
			</div>
		</div>
		<div id = "new_produit_3">
			<!-- img + lien -->
			<div id = "new_prod_img">
				<!-- recup image + lien href -->
				<a href = "?page=produits&id=<?php echo $new_produits[2]->idProduit;?>"> <img src = <?php echo $new_imgs[2];?> > </a>
			</div>
			<!-- nom + lien, prix -->
			<div id = "new_prod_nom&prix">
				<p> <!-- recup name --> 
					<a href="?page=produits&id=<?php echo $new_produits[0]->idProduit;?>" > <?php echo $new_produits[2]->nom;?> </a>
				</p>
				<p> <!-- recup prix --> 
					<?php echo $new_produits[2]->prix;?>
				</p>
			</div>
		</div>
		<div id = "new_produit_4">
			<!-- img + lien -->
			<div id = "new_prod_img">
				<!-- recup image + lien href -->
				<a href = "?page=produits&id=<?php echo $new_produits[3]->idProduit;?>"> <img src = <?php echo $new_imgs[3];?> > </a>
			</div>
			<!-- nom + lien, prix -->
			<div id = "new_prod_nom&prix">
				<p> <!-- recup name --> 
					<a href="?page=produits&id=<?php echo $new_produits[0]->idProduit;?>" > <?php echo $new_produits[3]->nom;?> </a>
				</p>
				<p> <!-- recup prix --> 
					<?php echo $new_produits[3]->prix;?>
				</p>
			</div>
		</div>	
	</div>

<h2>Les + mieux vendus</h2>
