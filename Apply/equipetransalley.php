<!DOCTYPE html>
<html>
<head>
	<title>identification</title>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="style_administration.css">
</head>
</head>
<body>
	<h1>Identification</h1>
	<?php
		$mysqli=new mysqli("localhost","root","hari","utilisateur");
		if($mysqli->connect_errno)
		{
			echo "Echec lors de la connexion à Mysql : (".$mysqli->connect_errno.")"
			.$mysqli->connect_errno."<br>";
		}
		else

		echo $mysqli->host_info ."\n<br>";

		if(isset($_POST['valider']))
		{
			if (!empty($_POST['nomutilisateur']) && 
			!empty($_POST['pass']) && !empty($_POST['pass2']))
			{
				if(($_POST['pass'])==($_POST['pass2']))
				{
					$informations  = array('pseudo' => $_POST['nomutilisateur'],'pass'=>$_POST['pass2'] );
					$select='SELECT nom_utilisateur,pwd 
							FROM equipetransalley 
							WHERE nom_utilisateur = \''.$informations['pseudo'].'\'';
								//echo $select ."<br>";
					$resultat=$mysqli->query($select);
					if($resultat=$mysqli->query($select))
					{
						while ($row= $resultat->fetch_array()) {
						$rows[]=$row;
					}
					if(empty($rows))
						echo"<script>
						alert('le no utilisateur n \' existe pas ');
						</script>";
					else
					{
						foreach ($rows as $row )
						{
							echo"resulta de requete ".$row['nom_utilisateur']." ".$row['pwd'] ."<br>";
							$update ='UPDATE equipetransalley SET pwd =\''.$informations['pass'].'\' WHERE nom_utilisateur = \''.$informations['pseudo'].'\'';
											//echo$update."<br />";	
							$resultat_update =$mysqli->query($update);										
							echo"<script>
								alert('felicitation votre mot de passe est crée avec succes');
								</script>";
								echo "<script>
								//alert('identification reussi');
								window.location.href='http://localhost/Apply/administration.php';
								</script>";
						}
					}
					}
				}
				else
							
				{
					echo "<script>
					alert('ERREUR: les deux mot de passe sont differents')
					</script>";
				}
							
			}else
				echo "<script>
					alert('ERREUR : le nom d\'utilisateur doit etre rensegne')
					</script>";	
		}
		if(isset($_POST['envoyer']))
			{
				if(!empty($_POST['nomutilisateur'])&& !empty($_POST['pass']))
				{
					$informations  = array('pseudo' => $_POST['nomutilisateur'],'pass'=>$_POST['pass'] );
					$select='SELECT nom_utilisateur,pwd 
							FROM equipetransalley 
							WHERE nom_utilisateur = \''.$informations['pseudo'].'\'
							AND pwd = \''.$informations['pass'].'\'';
					//echo"<br />identification".($select);
					$resultat=$mysqli->query($select);
					if($resultat=$mysqli->query($select))
					{
						while ($row= $resultat->fetch_array()) 
						{
							$rows[]=$row;
						}
					}
					if(empty($rows))
						echo"<script>
						alert('ERREUR: le no utilisateur n \' existe pas');
						</script>";
					else
					{
						foreach ($rows as $row )
						{
							//echo"resulta de requete ".$row['nom_utilisateur']." ".$row['pwd'] ."<br>";
							/*echo"<script>
								alert('vous etes identifiez');
								</script>";*/
								echo "<script>
								alert('identification reussi');
								window.location.href='http://localhost/Apply/administration.php';
								</script>";
						}
					}
				}
				else 
					{
						if(!empty($_POST['nomutilisateur']) && empty($_POST['pass']))
						{
							echo"
							<script>
							alert('ERREUR: le mot de est vide')
							</script>";
						}
						else
						{
							if(empty($_POST['nomutilisateur']) && !empty($_POST['pass']))
								echo"
									<script>
									alert('ERREUR: le nom utilisateur est vide')
									</script>"	;
							else
								echo"
									<script>
									alert('ERREUR: le nom utilisateur et le mot de passe sont vide')
									</script>";	 
						}
				}
			} 
	mysqli_close($mysqli);
?>
	<form method="post">
		<fieldset id="section1">
			<legend>Premiere identification</legend>
			<label for="nom">nom d'utilisateur :</label>
			<input type="text" name="nomutilisateur" id="nom" value="value"><br>
			<p><h3>mot de passe</h3> </p>
			<label>mot de passe:</label>
			<input type="password" name="pass"><br>
			<label>Confirmation mot de passe:</label>
			<input type="password" name="pass2"><br>
		</fieldset>	
		<input type="submit" name="valider" value="Valider" >
	</form>
	<form method="post">
		<br>
		<fieldset id="section2">
			<legend>identication</legend>
			<label for="nom">Nom d'utilisateur:</label>
			<input type="text" name="nomutilisateur"><br>
			<label>Mot de passe:</label>
			<input type="password" name="pass"><br>
		</fieldset>
		<input type="submit" name="envoyer" value="Valider">
	</form>
	<a href="index.php"><button>retour</button></a>
</body>
</html>