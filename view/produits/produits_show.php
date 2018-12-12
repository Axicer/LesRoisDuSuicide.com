<link rel="stylesheet" type="text/css" href="styles/produits/produits.css">
<div class='un_produit'>
    <div>
        <div class="info_produit">
            <div><?php echo $product->nom; ?></div>
            <div><?php echo $product->description ?></div>
            <div class="prix"><?php echo $product->prix . "€" ?></div>

            <img class="image_P" src="res/imgs/<?php echo $product->imageProduit ?>">

        </div>
        <div class="param">
            <a href="./?page=panier&action=add&id=<?php echo $product->idProduit ?>&retour=oui">Ajouter au panier !</a>
        </div>

    </div>
</div>
