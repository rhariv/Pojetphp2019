
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
		<div id="rechercher_admin" style="float: left;">
			<form action="suppression.php" method="POST" id="formulaire">
				<table id="tableau">
					<tr>
						<td>
							<label for="nomEntreprise" id="legende" class="legende">idEntreprise*</label>
						</td>
						<td>
							<label for="Entreprise" id="legende" class="legende">Entreprise*</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name ="nomEntreprise" value="nomEntreprise" />
						</td>
						<td>
							<input type="text" name ="nomEntreprise" value="nomEntreprise" />
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="rechercher" value="Rechercher">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>


	<?php
		include 'pied_page.php' ;
	 ?>
</body>
<?php
				
			?>