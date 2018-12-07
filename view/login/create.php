<p>Creer un compte sur votre site favori de science occulte !</p>
<form action="./?page=login" method="post">
	<fieldset>
		<div id="login_field">
		    <label for="login">Login</label> :
		    <input type="text" placeholder="login" name="login" id="login_field" required/>
		</div>
	<fieldset>
		<div id="data">
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
		</div>
	</fieldset>
		<div id="mdp1">
		    <label for="mdp1">Mot de passe</label> :
		    <input type="password" placeholder="Mot de passe" name="mdp1" id="mdp1" required/>
		</div>
		<div id="mdp2">
		    <label for="mdp2">Confirmez votre mot de passe</label> :
		    <input type="password" placeholder="Mot de passe" name="mdp2" id="mdp2" required/>
		</div>
		<!--Formulaire "caché" pour pouvoir envoyer action=created à routeur.php-->
		<input type="hidden" name="action" value="create"/>
		<input type="submit" value="Envoyer"/>
	</fieldset>
</form>