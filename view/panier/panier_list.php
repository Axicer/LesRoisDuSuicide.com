<link rel="stylesheet" type="text/css" href="styles/produits/produits.css">

<?php
if (count($panierContent) == 0) {
	echo "<div class=\"big_text\">Votre panier est actuellement vide.</div>";
	echo "<img class=\"imgError\" src=\"res/imgs/shrug.png\">";
} else {


	foreach ($panierContent as $item) {
		$p = Query::getSpecificProduct($item->id);
		$total = $item->quantity * $p->prix;
		echo "
			<div class=\"un_produit\">
			<div class=\"info_produit\">
					<div>" . $p->nom . "</div>
					<div class=\"prix\">" . $p->prix . "€</div>
					<div>" . $p->description . "</div>
					<img class=\"image_P\" src=\"res/imgs/" . $p->imageProduit . "\" alt=\"" . $p->nom . "\">
				</div>
				<div class=\"param\">
					<div>Quantité : $item->quantity</div>
					<div>Prix total : " . $total . "€
				</div>
			</div>
                            <div class=\"param\">
                                <a href=\"./?page=panier&action=delete&id=" . $p->idProduit . "\">Retirer du panier.</a>
                            </div>
			</div>
			<hr>";
	}
}
?>