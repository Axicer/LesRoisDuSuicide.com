<link rel="stylesheet" type="text/css" href="styles/produits/produits.css">
<div class="list_produits">
	<p>Liste des produits :</p>

	<?php
		foreach ($products as $p) {
			echo "<div class=\"un_produit\">
				<div class=\"info_produit\">
					<div>".$p->nom."</div>
					<div>".$p->prix."€</div>
					<div>".$p->description."</div>
					<img class=\"image_P\" src=\"res/imgs/".$p->imageProduit."\" alt=\"".$p->nom."\">
				</div>
				<div class=\"param\">
					<a href=\"./?page=produits&action=specific&id=".$p->idProduit."\">En savoir plus !</a>
					<a href=\"./?page=panier&action=add&id=".$p->idProduit."\">Ajouter au panier !</a>
				</div>
			</div>
			<hr>";
		}
	?>
</div>