<link rel="stylesheet" type="text/css" href="styles/produits/produits.css">
<div class='un_produit'>
	<div>
		<div class="info_produit">
			<div><?php echo $product->nom;?></div>
			<div><?php echo $product->description ?></div>
			<div class="prix"><?php echo $product->prix."€"?></div>
			
			<img class="image_P" src="res/imgs/<?php echo $product->imageProduit ?>">
		</div>
	</div>
</div>

<?php
	echo "Show product: $product->nom";
?>