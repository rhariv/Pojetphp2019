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
	<?php
		session_name('administration');
		session_start();
		echo(session_name());
	 ?>
	<div id="menu" class="menu">
		<div id="partie_haut">
			<a href="equipetransalley.php">
			<button value="Retour" name="retour">Retour</button>
		</a>
		<a href="index.php">
				<button value="quiter" name="quitter">Quitter</button>
		</a>
		</div>
</div>

	<div id="contenu" class="contenu">
		<div id="choix">
			<table>
				<tr>
					<a href="ajout.php">
					<button value="Ajout" name="modif">Ajout</button>
					</a>
				</tr>
				<tr>
					<a href="supr_modif.php">
					<button value="Modification" name="modif">Modification</button>
					</a>
				</tr>
				<tr>
					<a href="supr_modif.php">
					<button value="Suppression" name="supre">Suppression</button>
					</a>
				</tr>
		</div>
					</tr>
				</form>
			</table>
		</div>
		
		<div id="partie_formulaire">
			
		</div>
	</div>
	<?php
		include 'pied_page.php' ;
	 ?>
</body>
</html>