<p>Connectez vous a votre site favori de science occulte !</p>
<p id="error">Combinaison login/mot de passe invalide ou inexistant !</p>
<form action="./?page=login" method="post">
	<fieldset>
		<!--Formulaire "caché" pour pouvoir envoyer action=created à routeur.php-->
		<div id="login_field">
		    <label for="login">Login</label> :
		    <input type="text" placeholder="login" name="login" id="login_field" required/>
		</div>
		<div id="mdp">
		    <label for="mdp">Mot de passe</label> :
		    <input type="password" placeholder="Mot de passe" name="mdp" id="mdp" required/>
		</div>
		<div id="mdp2">
		    <label for="mdp2">Confirmez votre mot de passe</label> :
		    <input type="password" placeholder="Mot de passe" name="mdp2" id="mdp2" required/>
		</div>
		<input type="hidden" name="action" value="logged"/>
		<input type="submit" value="Envoyer"/>
	</fieldset>
</form>
