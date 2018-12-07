<p>Trouver votre produit !</p>
<form action="./page=produits" method="POST">

	<label for="name">Recherche</label>:
	<input type="text" placeholder="Entrer un terme de recherche" name="name" id="name" required/>

	<input type="hidden" name="action" value="search"/>
	<input type="submit" value="Connexion"/>
</form>