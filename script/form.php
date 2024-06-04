<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
	<link rel="stylesheet"  href="/Apply/style_start-up.css">
</head>
<body>
	<div class="entete"><h1> Bienvenue à la page d'identification</h1></div>
	<div class="fornulaire-incription">
		<form method="post" action="recherche.php">
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
	
</body>
</html>
<?php
	require_once 'recherche.php';
	function inserMembre()
	{
		$bdd=new database();
		$bdd->connexion();
		$pseudo=$_POST['pseudo'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$entreprise=$_POST['entreprise'];
		$pass=$_POST['pass'];
		$query=$bdd->getBdd()->prepare($bdd->addMember());
		$array  = array('pseudo' =>$pseudo ,'nom'=>$nom , 'prenom'=>$prenom ,
		 'entreprise'=>$entreprise , 'pass'=>$pass );
		$query->execute($array);
	}
	if(isset($_POST['envoyer']))
	{
		inserMembre();
	}
?>