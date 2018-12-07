<link rel="stylesheet" type="text/css" href="styles/connexion/main.css">
<p>Connectez vous a votre site favori de science occulte !</p>
<form action="./?page=login" method="post">
	<fieldset>
		<div id="login_field">
		    <label for="login">Login</label> :
		    <input type="text" placeholder="login" name="login" id="login_field" required/>
		</div>
		<div id="mdp">
		    <label for="mdp">Mot de passe</label> :
		    <input type="password" placeholder="Mot de passe" name="mdp" id="mdp" required/>
		</div>

		<input type="hidden" name="action" value="logged"/>
		<input type="submit" value="Envoyer"/>
	</fieldset>
</form>
