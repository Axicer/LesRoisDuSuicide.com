<link rel="stylesheet" type="text/css" href="styles/produits/produits.css">
<div class="list_produits">
	<p>Liste des produits :</p>

	<?php
	foreach ($products as $p) {
		?>
		<div class="un_produit">
			<div class="info_produit">
				<div> <?php echo $p->nom; ?></div>
				<div> <?php echo $p->prix; ?>€</div>

				<div> <?php echo $p->description; ?></div>

				<img class="image_P" src=res/imgs/<?php echo $p->imageProduit ?>>
			</div>
			<a href="./?page=produit&action=specific&id=<?php echo $p->idProduit;?>">En savoir plus !</a>
			<a href="./?page=panier&action=add&id=<?php echo $p->idProduit;?>">Ajouter au panier !</a>
		</div>
		<hr>
		<?php
	}
	?>
</div>