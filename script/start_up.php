
<!DOCTYPE html>
<html>
<head>
	<title>start_up</title>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="style_start-up.css">
</head>
<body>
		<div class="entete"><h1> Bienvenue à la page d'identification</h1></div>
		<div class="fornulaire-incription">
		<form method="post" >
			<fieldset>
				<legend>Inscription</legend> 
					<label for="pseudo">Votre pseudo:</label>
					<input type="text" name="pseudo"/><br> 
					<label for="nom">Votre nom:</label> 
					<input type="text" name="nom"/><br>
					<label for="prenom">Votre prenom:</label>
					<input type="text" name="prenom"/> <br>
					<label for="entreprise">Votre entreprise:</label>
					<input type="text" name="entreprise"><br>
					<label for="pass">Votre mot de passe:</label>
					<input type="password" name="pass"/><br>
					<label for="confirmation_pass">Comfirmer votre mot de<br> passe:</label>
					<input type="password" name="pass2">
				</fieldset>
	
				 <input type="submit" name="envoyer" value="valider" />
				<input type="reset" name="annuler" value="annuler">
				
		</form>
	</div>
<div class="formulaire-identification">
	<fieldset>
	<legend>S'identifier</legend> 
		<form method="post" action="traitement.php">
			<label>Votre pseudo:</label>
			<input type="text" name="pseudo"/><br>
			<label>Votre Mot de passe:</label>
			<input type="password" name="pass"/><br>
	</fieldset>

		<input type="submit" name="envoyer" value="valider"/>
		<input type="reset"  name="annuler" value="anuler"/>
	
	</form>


</div>		
<a href="index.php">
	<button value="Retour" name="retour">Retour</button>
</a>

<script type="text/javascript" language="javascript" src="control.js"></script>
</body>
</html>
<?php 
	
	if(isset($_POST['envoyer']))
	{
		if (!empty($_POST['pseudo']) && !empty($_POST['nom']) && 
			!empty($_POST['prenom']) && !empty($_POST['entreprise']) 
			&& !empty($_POST['pass']) && !empty($_POST['pass2']))
			{
			if(($_POST['pass'])!=($_POST['pass2']))
			{
				echo 'le mot de passe et le mot de passe de confirmation doit etre egal';
			}
			else
			{
				echo'pseudo :'.$_POST['pseudo'].' nom :'.$_POST['nom']
				.' prenom :'.$_POST['prenom'].' entreprise'.$_POST['entreprise'];
			}
			}else
		 	echo "ERREUR : tous les champs n'ont pas ete rensegnes";
	}
 ?>

	
 