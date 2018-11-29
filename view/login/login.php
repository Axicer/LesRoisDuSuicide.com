<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<fieldset>
		<!-- Légende du cadre entourant le formulaire -->
		<legend>Se connecter</legend>
		<p>Vous souhaitez nous contacter ? Nous envoyer un gentil message ? Voici un formulaire pour y remédier ! </p>
		<!--Formulaire "caché" pour pouvoir envoyer action=created à routeur.php-->
		<input type="hidden" name="action" value="connected"/>
		<p>
		    <label for="login">Login</label> :
		    <input type="text" placeholder="login" name="login" id="login" required/>
		</p>
		
		<p>
		    <label for="mdp">Mot de passe</label> :
		    <input type="password" placeholder="Mot de passe" name="mdp" id="mdp" required/>
		</p>

		<p>
		    <input type="submit" value="Envoyer"/>
		</p>
	    </fieldset> 
    </body>
</html>
