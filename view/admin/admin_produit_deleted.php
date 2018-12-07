<h1>Administration</h1>

<p id="success">Le produit a été correctement supprimé !</p>

<div id="produits">
	<p>Manipulation de produits :</p>
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
			<input type="submit" value="Envoyer"/>
		</fieldset>
	</form>

	<form action="./" method="POST">
		<input type="hidden" name="page" value="admin"/>
		<input type="hidden" name="action" value="product_del"/>
		<fieldset>
			<legend>Supprimer un produit</legend>
			<label for="id">ID</label> :
			<input type="text" id="id" name="id" required/>
			<input type="submit" value="Envoyer"/>
		</fieldset>
	</form>
</div>
<div id="clients">
	<p>Manipulation de Clients :</p>
	<form action="./" method="POST">
		<input type="hidden" name="page" value="admin"/>
		<input type="hidden" name="action" value="client_add"/>
		<fieldset>
			<legend>Creer un client</legend>
			<label for="login">Login</label> :
			<input type="text" placeholder="login" name="login" id="login_field" required/>
			<label for="nom">Nom</label> :
			<input type="text" placeholder="Van Damme" name="nom" id="nom" required/>
			<label for="prenom">Prenom</label> :
			<input type="text" placeholder="Jean-Claude" name="prenom" id="prenom" required/>
			<label for="adresse">Adresse</label> :
			<input type="text" placeholder="4 Avenue Georges Clemenceau" name="adresse" id="adresse" required/>
			<label for="codePostal">Code postal</label> :
			<input type="number" placeholder="34000" min="1000" max="100000" name="codePostal" id="codePostal" required/>
			<label for="ville">Ville</label> :
			<input type="text" placeholder="Montpellier" name="ville" id="ville" required/>
			<label for="mdp1">Mot de passe</label> :
			<input type="password" placeholder="Mot de passe" name="mdp1" id="mdp1" required/>
			<label for="mdp2">Confirmez votre mot de passe</label> :
			<input type="password" placeholder="Mot de passe" name="mdp2" id="mdp2" required/>

			<input type="submit" value="Envoyer"/>
		</fieldset>
	</form>

	<form action="./" method="POST">
		<input type="hidden" name="page" value="admin"/>
		<input type="hidden" name="action" value="client_del"/>
		<fieldset>
			<legend>Supprimer un client</legend>
			<label for="id">ID</label> :
			<input type="text" id="id" name="id" required/>
			<input type="submit" value="Envoyer"/>
		</fieldset>
	</form>
</div>