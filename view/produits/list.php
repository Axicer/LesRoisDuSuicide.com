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

				<?php
				//-----------------------------TEST-----------------------------//
				$id = $p->idProduit;
				echo "TEST : $id";
				echo "<br>";
				?>

				<img class="image_P" src=res/imgs/<?php echo $p->imageProduit ?>>
			</div>
			<div class="param">
				<a href="./?page=produit&action=specific&id=<?php echo $id; ?>">En savoir plus !</a>
				<a href="./?page=panier&action=add&id=<?php echo $id; ?>">Ajouter au panier !</a>
			</div>
		</div>
		<hr>
		<?php
	}
	?>
</div>