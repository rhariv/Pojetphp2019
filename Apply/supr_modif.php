
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet"  href="admin_styl.css">
	<script language="javascript" id="cible" src="js/monScript.js"></script>
</head>
<body>
	<!--ent tete et menu -->
	<?php 
		include 'en_tete.php';
	?>
	<div id="contenu">
		<div id="rechercher_admin" style="height: 630px; float: left; background-color: lightgrey">
			<?php include'recherche_admin.php';?>
			<?php
				$mysqli=new mysqli("localhost","root","hari","entrepriseprestataire");
				mysqli_set_charset($mysqli,'utf8');
				if($mysqli->connect_errno)
				{
					echo "Echec lors de la connexion à Mysql : (".$mysqli->connect_errno.")"
					.$mysqli->connect_errno."<br>";
				}
				else
					echo $mysqli->host_info ."\n<br>";
				if (isset($_POST['rechercher']))
				{
					echo $_POST['rechercher']."<br>";
					$information=array("nomEntreprise"=>$_POST['nomEntreprise'],
					"codePostal"=>$_POST['codePostal'],"ville"=>$_POST['ville']);
					echo($information["nomEntreprise"]);
					$requete='SELECT entreprise.idEntreprise,entreprise.nomEntreprise,entreprise.codePostal,entreprise.nomVille
							FROM entreprise WHERE entreprise.nomEntreprise =\''.$information["nomEntreprise"].'\'
							AND entreprise.codePostal=\''.$information["codePostal"].'\'
							AND entreprise.nomville =\''.$information["ville"].'\'';
					//echo $requete."<br>";
					$resultat=$mysqli->query($requete);
						if($resultat=$mysqli->query($requete))
						{
							while ($row= $resultat->fetch_array())
							{
								$rows[]=$row;
							}
							if(empty($rows))
								echo"aucune entreprise se situe dans ce region";
							else
							{
								foreach ($rows as $row )
								{
									$confirmer ="confirmer";
									echo"resulta de votre recherche:  " .$row['idEntreprise']." ".$row['nomEntreprise']."  ".$row['codePostal'] ." ".$row['nomVille']."<br>";
									$id=$row['idEntreprise'];
									$_POST['id']=$id;
									$_POST['nom']=$row['nomEntreprise'];
									$_POST['codePostal']=$row['codePostal'];
									$_POST['ville']=$row['nomVille'];
									echo $_POST['id'];									
								}
								?>
								<table>
									<form method="POST" action ="supr_modif.php">
									<tr>
									<td>
									<input type ="text" name ="id" value ="<?php echo$id;?>"/>
									</td><td>
									<input type ="text" name ="nom" value ="<?php echo $_POST['nom']; ?>"/>
									</td><td>
									<input type ="text" name ="codePostal" value ="<?php echo $_POST['codePostal'] ?>"/>
									</td><td>
									<input type ="text" name ="ville" value ="<?php echo $_POST['ville'] ?>"/>
									</td></tr>
									<tr><td>
									<input type ="submit" name ="suprimer" value ="Suprimer"/>
									</td>
									
									</tr>
									</form>
									</table>	
									
								<?php 
								if (isset($_POST['suprimer'])) {
									$nom_entreprise=$_POST['nom'];
										echo 'vous aller suprimer l\'';
										echo $nom_entreprise;
										# code...
									}	
							}
							}
						}
				?>
		</div>
		<div id="contenueS/M" style="height: 630px; float: right; background-color: lightgrey">
			
		</div>
		

	</div>
	<?php
		include 'pied_page.php' ;
	 ?>
</body>
<?php
				
			?>