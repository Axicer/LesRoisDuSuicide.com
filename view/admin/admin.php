
<link rel="stylesheet" type="text/css" href="styles/admin/admin.css">

<h1 class="pageTitle">Administration</h1>

<div class="produits">
	<p class="ptit_titre">Manipulation de produits :</p>
	<div class="forms">
		<form action="./" method="POST">
			<input type="hidden" name="page" value="admin"/>
			<input type="hidden" name="action" value="product_add"/>
			<fieldset>
				<legend>Creer un produit</legend>
				<div class="field_content">
					<div>
						<label for="nom">Nom</label> 
						<input type="text" id="nom" name="nom" required/>
					</div>
					<div class="too_small">
						<label for="qte">Quantité</label> 
						<input type="number" id="qte" name="qte" required/>
					</div>
					<div class="too_small">
						<label for="prix">Prix</label> 
						<input type="number" id="prix" name="prix" required/>
					</div>
					<div>
						<label for="desc">Description</label> 
						<input type="text" id="desc" name="desc" required/>
					</div>
					<div>
						<label for="image">Chemin d'accès de l'image</label> 
						<input type="text" id="image" name="image" required/>
					</div>
				</div>
				<input type="submit" value="Envoyer"/>
			</fieldset>
		</form>

		<form action="./" method="POST">
			<input type="hidden" name="page" value="admin"/>
			<input type="hidden" name="action" value="product_del"/>
			<fieldset>
				<legend>Supprimer un produit</legend>
				<div class="suppress">
					<label for="id">ID du produit</label> 
					<input type="text" id="idProduct" name="idProd" required/>
				</div>
				<input type="submit" value="Envoyer"/>
			</fieldset>
		</form>
	</div>
</div>

<!-- ************************************************************************** -->

<div class="clients">
	<p class="ptit_titre">Manipulation de Clients :</p>
	<div class="forms">
		<form action="./" method="POST">
			<input type="hidden" name="page" value="admin"/>
			<input type="hidden" name="action" value="client_add"/>
			<fieldset>
				<legend>Creer un client</legend>
				<div class="field_content">
					<div>
						<label for="login">Login</label> 
						<input type="text" placeholder="login" name="login" id="login_field" required/>
					</div>
					<div>
						<label for="nom">Nom</label> 
						<input type="text" placeholder="Van Damme" name="nom" id="nomClient" required/>
					</div>
					<div>
						<label for="prenom">Prenom</label> 
						<input type="text" placeholder="Jean-Claude" name="prenom" id="prenom" required/>
					</div>
					<div>
						<label for="adresse">Adresse</label> 
						<input type="text" placeholder="4 Avenue Georges Clemenceau" name="adresse" id="adresse" required/>
					</div>
					<div class="code_postal">
						<label for="codePostal">Code postal</label> 
						<input type="number" placeholder="34000" min="1000" max="100000" name="codePostal" id="codePostal" required/>
					</div>
					<div>
						<label for="ville">Ville</label> 
						<input type="text" placeholder="Montpellier" name="ville" id="ville" required/>
					</div>
					<div>
						<label for="mdp1">Mot de passe</label> 
						<input type="password" placeholder="Mot de passe" name="mdp1" id="mdp1" required/>
					</div>
					<div>
						<label for="mdp2">Confirmez votre mot de passe</label> 
						<input type="password" placeholder="Mot de passe" name="mdp2" id="mdp2" required/>
					</div>
				</div>

				<input type="submit" value="Valider"/>
			
			</fieldset>
		</form>

		<form action="./" method="POST">
			<input type="hidden" name="page" value="admin"/>
			<input type="hidden" name="action" value="client_del"/>
			<fieldset>
				<legend>Supprimer un client</legend>
				<div class="suppress">
					<label for="id">ID du client</label> 
					<input type="text" id="idClient" name="idCl" required/>
				</div>
				<input type="submit" value="Envoyer"/>
			</fieldset>
		</form>
	</div>
</div>