<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<form method="post" action="index.php">
	    <fieldset>
		<!-- Légende du cadre entourant le formulaire -->
		<legend>Nous contacter</legend>
		<p>Vous souhaitez nous contacter ? Nous envoyer un gentil message ? Voici un formulaire pour y remédier ! </p>
		<!--Formulaire "caché" pour pouvoir envoyer action=created à routeur.php-->
		<input type="hidden" name="action" value="contacted"/>
		<p>
		    <label for="immat">Nom</label> :
		    <input type="text" placeholder="Entrer un nom" name="nom" id="nom" required/>
		</p>
		
		<p>
		    <label for="immat">Prénom</label> :
		    <input type="text" placeholder="Entrer un prénom" name="prenom" id="immat" required/>
		</p>
		
		<p>
		    <label for="marque">E-mail</label> :
		    <input type="text" placeholder="exemple@gmail.com" name="email" id="email" required/>
		</p> 	

		<p>
		    <label for="color">Votre message</label> :
		    <input type="text" placeholder="Entrez votre message" name="message" id="message" required/>
		</p> 				

		<p>
		    <input type="submit" value="Envoyer" />
		</p>
	    </fieldset> 
	</form>
    </body>
</html>
