<link rel="stylesheet" type="text/css" href="styles/connexion/create.css">
<p class= "petit_mot_gentil">Creer un compte sur votre site favori de science occulte !</p>
<form action="./?page=login" method="post">
	<fieldset>
		<div class="login_field">
			<div>
			    <label for="login">Login</label> :
			    <input type="text" placeholder="login" name="login" id="login_field" required/>
			</div>
			<div>
				<label for="nom">Nom :</label> 
				<input type="text" placeholder="Van Damme" name="nom" id="nom" required/>
			</div>
			<div>
				<label for="prenom">Prenom :</label> 
				<input type="text" placeholder="Jean-Claude" name="prenom" id="prenom" required/>
			</div>
			<div>
				<label for="adresse">Adresse :</label> 
				<input type="text" placeholder="4 Avenue Georges Clemenceau" name="adresse" id="adresse" required/>
			</div>
			<div class = "Code_Postal">
				<label for="codePostal">Code postal :</label>
				<input type="number" placeholder="34000" min="1000" max="100000" name="codePostal" id="codePostal" required/>
			</div>
			<div>
				<label for="ville">Ville :</label> 
				<input type="text" placeholder="Montpellier" name="ville" id="ville" required/>
			</div>
			<div>
			    <label for="mdp1">Mot de passe</label> :
			    <input type="password" placeholder="Mot de passe" name="mdp1" id="mdp1" required/>
			</div>
			<div>
			    <label for="mdp2">Confirmation</label> :
			    <input type="password" placeholder="Mot de passe" name="mdp2" id="mdp2" required/>
			</div>
		</div>
		<!--Formulaire "caché" pour pouvoir envoyer action=created à routeur.php-->
		<input type="hidden" name="action" value="create"/>
		<input type="submit" value="Envoyer"/>
	</fieldset>
</form>