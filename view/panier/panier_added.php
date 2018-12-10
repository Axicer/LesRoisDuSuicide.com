<p class="un_produit"><b>Le produit a été ajouté a votre panier avec succès !</b></p>

<?php
$products = Query::getAllProducts(50);
require(File::build_path(array('view', 'produits', 'produits_list.php')))
?>