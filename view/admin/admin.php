<h1>Administration</h1>

<p></p>
<form action="./" method="POST">
	<input type="hidden" name="page" value="admin"/>
	<input type="hidden" name="action" value="product_add"/>
	<fieldset>
		<legend>Creer un produit</legend>
		<label for="nom">Nom</label> :
		<input type="text" id="nom" name="nom" required/>
		<label for="qte">quantité</label> :
		<input type="number" id="qte" name="qte" required/>
		<label for="prix">Prix</label> :
		<input type="number" id="prix" name="prix" required/>
		<label for="desc">Description</label> :
		<input type="text" id="desc" name="desc" required/>
		<label for="image">Chemin d'accés de l'image</label> :
		<input type="text" id="image" name="image" required/>
	</fieldset>
</form>

<form action="./" method="POST">
	<input type="hidden" name="page" value="admin"/>
	<input type="hidden" name="action" value="product_del"/>
	<fieldset>
		<legend>Supprimer un produit</legend>
		<label for="id">ID</label> :
		<input type="text" id="id" name="id" required/>
	</fieldset>
</form>