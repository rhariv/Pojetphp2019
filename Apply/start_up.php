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
		<form method="post">
			<fieldset>
				<legend>Inscription</legend> 
					<label for="pseudo">Pseudo:</label>
					<input type="text" name="pseudo"/><br> 
					<label for="nom">Nom:</label> 
					<input type="text" name="nom"/><br>
					<label for="prenom">Prenom:</label>
					<input type="text" name="prenom"/> <br>
					<label for="entreprise">Entreprise/Projet:</label>
					<input type="text" name="entreprise"><br>
					<label for="pass">Mot de passe:</label>
					<input type="password" name="pass"/><br>
					<label for="confirmation_pass">Comfirmer mot de<br> passe:</label>
					<input type="password" name="pass2">
				</fieldset>
	
				 <input type="submit" name="envoyer" value="valider" />
				<input type="reset" name="annuler" value="annuler"><br>
				<?php
					if(isset ($_POST['envoyer']))
					{
						if (!empty($_POST['pseudo']) && !empty($_POST['nom']) && 
						!empty($_POST['prenom']) && !empty($_POST['entreprise']) 
						&& !empty($_POST['pass']) && !empty($_POST['pass2']))
						{
							if(($_POST['pass'])!=($_POST['pass2']))
							{
								echo 'ERREUR: les deux mot de passe sont differents';
							}
							else
							{
								
								$informations = array('pseudo' => $_POST['pseudo'],'nom'=>$_POST['nom'],
								'prenom'=>$_POST['prenom'],'entreprise'=>$_POST['entreprise'],
								'pass'=>$_POST['pass'] );

								$mysqli=new mysqli("localhost","root","hari","utilisateur");
								if($mysqli->connect_errno)
								{
									echo "Echec lors de la connexion à Mysql : (".$mysqli->connect_errno.")"
									.$mysqli->connect_errno."<br>";
								}
								else
									echo $mysqli->host_info ."\n<br>";	
								
								$requete='INSERT INTO start_up(pseudo,nom,prenom,entreprise,pass) VALUES (\''.$informations['pseudo'].'\',\''.$informations['nom'].'\',\''.$informations['prenom'].'\',
								\''.$informations['entreprise'].'\',\''.$informations['pass'].'\')';
								//echo $requete ."<br>";

								if(!$mysqli->query($requete))
								{
									echo "Echec lors de l'insertion : (".$mysqli->errno.")".$mysqli->error."<br>";
								}
														
								echo' Felicitation  :'.$informations['nom'] .' '.$informations['prenom']
								.' voici votre pseudo: ' .$informations['pseudo'].' identifiez vous pour etre diriger vers la page de recherche'; 
								echo "<script>
								alert('identification reussi');
								window.location.href='http://localhost/Apply/traitement.php';
								</script>";
								$mysqli->close();
							}
						}
						else
						{
						 echo"<script>
							alert('ERREUR : tous les champs n\'ont pas ete rensegnes');
						</script>";
						}	
					}
							
				?>
		</form>
	</div>
	
				
<div class="formulaire-identification">
	<br>
	<fieldset>
	<legend>S'identifier</legend> 
		<form method="post">
			<label>Pseudo:</label>
			<input type="text" name="pseudo"/><br>
			<label>Mot de passe:</label>
			<input type="password" name="pass"/><br>
	</fieldset>

		<input type="submit" name="verifier" value="valider"/>
		<input type="reset"  name="annuler" value="anuler"/>
		<br>
	<?php 
	$mysqli=new mysqli("localhost","root","hari","utilisateur");
			if($mysqli->connect_errno)
			{
				echo "Echec lors de la connexion à Mysql : (".$mysqli->connect_errno.")"
				.$mysqli->connect_errno."<br>";
			}
			else
				echo $mysqli->host_info ."\n<br>";
		function comaparer_2_cahaine($cahine1,$chaine2)
		{
			if($cahine1==$chaine2)
				return TRUE;
			else return FALSE;
		}
		
	if(isset($_POST['verifier']))
	{
		if (!empty($_POST['pseudo']) && !empty($_POST['pass']))
		{
			$informations  = array('pseudo' => $_POST['pseudo'],'pass'=>$_POST['pass'] );
			$select='SELECT pseudo,pass 
							FROM start_up 
							WHERE pseudo = \''.$informations['pseudo'].'\'
							AND pass = \''.$informations['pass'].'\'';
			echo $select ."<br>";
			$resultat=$mysqli->query($select);

			if($resultat=$mysqli->query($select))
			{
				/*if (empty($resultat->fetch_assoc))
					{
						echo "le pseudo et le mot e pase ne corespon pas ";
					}
				else
				{*/


				/*
				while($row =$resultat->fetch_assoc())
											
						 {
						 	//echo "felicitation vous pourez commencer votre recherche :". $row['pseudo']." ".$row['pass']."<br>";
						 	$rows=
						 }
					 	
				}*/
				while ($row= $resultat->fetch_array()) {
					# code...
					$rows[]=$row;
				}
				if(empty($rows))
					echo //"le pseudo et le mo de passe ne correspond pas " ;
						"<script>
							alert('le pseudo et le mot de passe ne correspond pas ');
						</script>";
				else
				{
					#pur tester les resulta des requete à suprimer à la fin ;
					foreach ($rows as $row ) {
					# code...
					//recuperation des requete 
					echo $row['pseudo']." ".$row['pass'] ."<br>";
					echo "<script>
							// alert('identification reussi');
							window.location.href='http://localhost/Apply/recherche_startups.php';

						</script>";
										
					}
				}
				

			}
		}
		else 
		echo 
		"
			<script>

				alert('ERREUR: le pseudo ou le mot de passe  est vide ');
						
			</script>;
		";

		//"Ereeur les champs son vide ";
	}
			
	mysqli_close($mysqli);
	
 ?>
</form>


</div>		
<a href="index.php">
	<button value="Retour" name="retour">Retour</button>
</a>

<script type="text/javascript" language="javascript" src="control.js"></script>
<script>
	
</script>
</body>
</html>
