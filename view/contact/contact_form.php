
<form method="post" action="./">
	<input type="hidden" name="page" value="contact"/>
	<input type="hidden" name="action" value="send"/>
	<fieldset>
		<!-- Légende du cadre entourant le formulaire -->
		<legend>Nous contacter</legend>
		<p>Vous souhaitez nous contacter ? Nous envoyer un gentil message ? Voici un formulaire pour y remédier ! </p>
		<!--Formulaire "caché" pour pouvoir envoyer action=contacted à routeur.php-->
		<table>
			<tbody>
				<tr>
					<td>
						<label for="nom">Nom</label> :
					</td>
					<td>
						<input type="text" placeholder="Entrer un nom" name="nom" id="nom" required/>
					</td>
				</tr>

				<tr>
					<td>
						<label for="prenom">Prénom</label> :
					</td>
					<td>
						<input type="text" placeholder="Entrer un prénom" name="prenom" id="prenom" required/>
					</td>
				</tr>

				<tr>
					<td>
						<label for="email">E-mail</label> :
					</td>
					<td>
						<input type="text" placeholder="exemple@gmail.com" name="email" id="email" required/>
					</td>
				</tr>
				<tr>
					<td>
						<label for="message">Votre message</label> :
					</td>
					<td>
						<textarea name="Text1" placeholder="Entrez votre message" name="message" id="message" required cols="40" rows="4"></textarea>
					</td>
				</tr>				

				<tr>
					<td>
						<input type="submit" value="Envoyer" />
					</td>
				</tr>
			</tbody>
		</table>
	</fieldset> 
</form>
