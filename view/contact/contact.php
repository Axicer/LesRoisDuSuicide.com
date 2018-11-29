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
		    <label for="nom">Nom</label> :
		    <input type="text" placeholder="Entrer un nom" name="nom" id="nom" required/>
		</p>
		
		<p>
		    <label for="prenom">Prénom</label> :
		    <input type="text" placeholder="Entrer un prénom" name="prenom" id="prenom" required/>
		</p>
		
		<p>
		    <label for="email">E-mail</label> :
		    <input type="text" placeholder="exemple@gmail.com" name="email" id="email" required/>
		</p> 	

		<p>
		    <label for="message">Votre message</label> :
		    <input type="text" placeholder="Entrez votre message" name="message" id="message" required/>
		</p> 				

		<p>
		    <input type="submit" value="Envoyer" />
		</p>
	    </fieldset> 
	</form>
    </body>
</html>
