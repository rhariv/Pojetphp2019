
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
			<div id="Resultat_recherche">
				
			</div>
		</div>


	</div>
	<?php
		include 'pied_page.php' ;
	 ?>
</body>
<?php
				
			?>