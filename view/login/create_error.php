<p>Creer un compte sur votre site favori de science occulte !</p>
<p>Une erreur est survenu dans l'inscription !</p>
<form action="./?page=login&action=create" method="post">
	<fieldset>
		<div id="login_field">
		    <label for="login">Login</label> :
		    <input type="text" placeholder="login" name="login" id="login_field" required/>
		</div>
	<fieldset>
		<div id="data">
			<label for="nom">Nom</label> :
			<input type="text" placeholder="Le Pen" name="nom" id="nom" required/>
			<label for="prenom">Prenom</label> :
			<input type="text" placeholder="Jean-Marie" name="prenom" id="prenom" required/>
			<label for="adresse">Adresse</label> :
			<input type="text" placeholder="4 Avenue Georges Clemenceau" name="adresse" id="adresse" required/>
			<label for="codePostal">Code postal</label> :
			<input type="number" placeholder="34000" min="1000" max="100000" step="1000" name="codePostal" id="codePostal" required/>
			<label for="ville">Ville</label> :
			<input type="text" placeholder="Montpellier" name="ville" id="ville" required/>
		</div>
	</fieldset>
		<div id="mdp">
		    <label for="mdp">Mot de passe</label> :
		    <input type="password" placeholder="Mot de passe" name="mdp" id="mdp" required/>
		</div>
		<div id="mdp2">
		    <label for="mdp2">retapez votre mot de passe</label> :
		    <input type="password" placeholder="Mot de passe" name="mdp2" id="mdp2" required/>
		</div>
		<!--Formulaire "caché" pour pouvoir envoyer action=created à routeur.php-->
		<input type="hidden" name="action" value="logged"/>
		<input type="submit" value="Envoyer"/>
	</fieldset>
</form>