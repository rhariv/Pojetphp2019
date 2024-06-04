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
		<div id="formulaire" style="float: left;">
		<form method="POST" id="formulaire" style="width: 1150px;
	height: 570px;background-color:lightgrey;text-align: center;margin-left: 30px;">
			<table id="tableau">
				<tr>
					<td>
						<label for="Entreprise" id="legende" class="legende">nom de l' entreprise*:</label>
					</td>
					<td>
						<label for="numRue" id="legende" class="legende">numero de rue *:</label>
					</td>
					<td>
						<label for="nomRue" id="legende" class="legende">nomRue*:</label>
					</td>
					<td>
						<label for="codePostal" id="legende" class="legende">codePostal*:</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name ="nomEntreprise" value="nomEntreprise" />
					</td>
					<td>
						<input type="text" name ="numRue" value="numRue" />
					</td>
					<td>
						<input type="text" name ="nomRue" value="nomRue" />
					</td>
					<td>
						<input type="text" name ="codePostal" value="codePostal" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="nomVille" id="legende" class="legende"> Ville*:</label>
					</td>
					<td>
						<label for="region" id="legende" class="legende">Région *:</label>
					</td>
					<td>
						<label for="departement" id="legende" class="legende">Departement *:</label>
					</td>
					<td>
						<label for="pays" id="legende" class="legende">Pays *:</label>
					</td>
					</tr>
				<tr>
					<td>
						<input type="text" name ="nomVille" value="nomVille" />
					</td>
					<td>
							<select name="choix_region" id="choix_region" class="liste" onchange ="charger_departement()">Region
							<option value="00">selectionnez un region</option>
							<option value="01_Auvergne-Rhône-Alpes">01_Auvergne-Rhône-Alpes</option>
							<option value="02_Bourgogne-Franche-Comte">02_Bourgogne-Franche-Comte</option>
							<option value="03_Bretagne">03_Bretagne</option>
							<option value="04_Centre-Val de Loire">04_Centre-Val de Loire</option>
							<option value="05_Corse">05_Corse</option>
							<option value="06_Grand Est">06_Grand Est</option>
							<option value="07_Hauts-de-France">07_Hauts-de-France</option>
							<option value="08_Île-de-France">08_Île-de-France</option>
							<option value="09_Normandie">09_Normandie</option>
							<option value="10_Nouvelle-Aquitaine">10_Nouvelle-Aquitaine</option>
							<option value="11_Occitanie">11_Occitanie</option>
							<option value="12_Pays de la Loire">12_Pays de la Loire</option>
							<option value="13_Provence-Alpes-Côte d Azur">13_Provence-Alpes-Côte d\'Azur</option>
							<option value="14_Guadeloupe">14_Guadeloupe</option>
							<option value="15_Martinique">15_Martinique</option>
							<option value="16_Guyane">16_Guyane</option>
							<option value="17_La Réunion">17_La Réunion</option>
							<option value="18_Mayotte">18_Mayotte</option>
							<option value="19">Autre</option>					
						</select>
					</td>
					<td id="calque_departement" class="colonne" >
						&nbsp;
					</td>
					<td>
						
						<input type="text" name ="pays" value="pays" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="secteur" id="legende" class="legende">Secteur activite *:</label>	
					</td>
					<td>
						<label for="sous_Secteur" id="legende" class="legende">Sous_Secteur *:</label>	
					</td>
					<td>
						<label for="filiere" id="legende" class="legende">Filiere *:</label>
					</td>
					<td>
						<label for="site" id="legende" class="legende">Site web :</label>	
					</td>
				</tr>
				<tr>
					<td class="colonne">
							<select name="choix_secteur" id="choix_secteur" class="liste" onchange="charger_sous_secteur()">Metier
							<option value="00">Selectionnez un metier</option>
							<option value="01_usinage">01_Usinage</option>
							<option value="02_bureau etudes">02_Bureau d\'etudes</option>
							<option value="03_tôlerie/chaudronnerie">03_Tôlerie/Chaudronnerie</option>
							<option value="04_forage/fonderie">04_Forage/Fonderie</option>
							<option value="05_fabrication additive/prototypage">05_Fabrication additive/Prototypage</option>
							<option value="06_outillage/moule">06_Outillage/Moule</option>
							<option value="07_traitement de surface">07_Traitement de surface</option>
							<option value="08_test mécanique">08_Test mécanique</option>
							<option value="09_capteurs">09_Capteurs</option>
							<option value="10_CEM">10_CEM</option>
							<option value="11_câblage">11_câblage</option>
							<option value="12_Baterie">12__Baterie</option>
							<option value="13_Motorisation">13_Motorisation</option>
							<option value="14_Traitement de signal">14_Traitement de signal</option>
							<option value="15_Control comande">15_Control comande</option>
							<option value="16_EMS">16_EMS</option>
							<option value="17_Carte electronique">17_Carte electronique</option>
						</select>
					</td>
					<td id="calque_sous_secteur" class="colonne" >
						&nbsp;
					</td>
					<td>
						<select name="filiere" id="choix_filiere">
						<option value="">Choisir</option>
						<option id="option1" value="option1">option1</option>
						<option id="option2" value="option2">option2</option>
						<option id="option3" value="option3">option3</option>
						<option id="option4" value="option4">option4</option>
						</select>
					</td>
					<td>
						<input type="text" name ="site" value="site" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="description" id="legende" class="legende">Description :</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name ="description" value="description" />
					</td>
				</tr>
				<tr>
					<td> <label> <h3>Contact:</h3></label> </td>
				</tr>
				<tr>
					<td>
						<label for="nom" id="legende" class="legende">Nom :</label>
					</td>
					<td>
						<label for="prenom" id="legende" class="legende">Prenom :</label>
					</td>
					<td>
						<label for="fonction" id="legende" class="legende">Fonction :</label>
					</td>
					<td>
						<label for="telephone" id="legende" class="legende">Numerotélephone :</label>
					</td>
					<td>
						<label for="mail" id="legende" class="legende">e-mail :</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name ="nom" value="nom" />
					</td>
					<td>
						<input type="text" name ="prenom" value="prenom" />
					</td>
					<td>
						<input type="text" name ="fonction" value="fonction" />
					</td>
					<td>
						<input type="text" name ="telephone" value="telephone" />
					</td>
					<td>
						<input type="text" name ="e_mail" value="e_mail" />
					</td>
				</tr>
				<tr>
					<td>
						<label id="note">Commentaire</label>
					</td>
				</tr>
				
				<tr>
					<td>
							<textarea name ="note" value="note">
						</textarea>
					</td>
					<td>
						<input type="submit" name="confirmer" id="confirmer" value="Confirmer" />
					</td>
				</tr>
			</table>
		</form>
</div>
	<div id="resultatAjout" style="float: right;width: 670px;height:570px;background-color:lightgrey;margin-left: 5px;margin-right: 30px ">
		<h1>resultat</h1>
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
					if (isset($_POST['confirmer'])) {
						$entreprise = array('nomEntreprise' =>$_POST['nomEntreprise'] ,'numRue' =>$_POST['numRue'] ,'nomRue' =>$_POST['nomRue'],'codePostal' =>$_POST['codePostal'] ,'nomVille' =>$_POST['nomVille'],'site'=>$_POST['site'],'description'=>$_POST['description']);
						//echo$entreprise['nomEntreprise'];
						/*$filiere=array('filiere'=>$_POST['filiere'],'idEntreprise'=>$_POST['idEntreprise']);
						$secteuractivite=array('choix_secteur'=>$_POST['choix_secteur'],'idEntreprise'=>$_POST['idEntreprise']);
						$soussecteur=array('choix_sous_secteur'=>$_POST['choix_sous_secteur']);
						$contact=array('nom'=>$_POST['nom'],'prenom'=>$_POST['prenom'],'fonction'=>$_POST['fonction'],'telephone'=>$_POST['telephone'],'mail'=>$_POST['e_mail']);*/
						echo$_POST['confirmer'].'<br>';
						if($entreprise['nomEntreprise'] != 'nomEntreprise' && $entreprise['nomRue']!='numRue' && $entreprise['nomRue']!='nomRue' &&$entreprise['codePostal']!='codePostal' && $entreprise['nomVille']!='nomVille')
						{
							if($_POST['nomVille']!='nomVille' && $_POST['choix_region']!='00' && $_POST['choix_departement']!='00' && $_POST['pays'] !='pays')
							{
								$localite=array('codePostal'=>$_POST['codePostal'],'departement' =>$_POST['choix_departement'],'region' =>$_POST['choix_region'] ,'pays'=>$_POST['pays']);
								if($_POST['choix_secteur']!='00' && $_POST['choix_sous_secteur']!='00')
								{
									//ajouter le secteur 
									

								} 
							}
						}
							else {
								echo "la région et le departement doit être renseigné";
							}
							echo"info reçue";
						}
						else
						{
							echo"c'est champs sont obligatoire";
						}
				?>	
	</div>
</div>
	<script type="text/javascript">
		function charger_departement()
		{
			var tab_departement="";
			var nb_departement=0;
			var chaine_liste="";
			var region_texte=document.getElementById("choix_region").value;
			var la_region=region_texte.substr(0,2);
			if(la_region!="00")
			{
				//alert(region_texte + "--" + la_region);
				//document.getElementById("colonne_droite").innerHTML="<img src ='image/"+ la_region +".gif' style ='width:300px'/>";
				tab_departement=retour_departement(la_region).split('|');
				nb_departement=tab_departement.length;
				//alert(nb_departement);
				chaine_liste = "<select name='choix_departement' id = 'choix_departement' class ='liste_droite' onchange ='verifier_departement(\"" + region_texte + "\");'>";
				chaine_liste +="<option value = 'selection'>Selectionnez un departement</option>";
				for(var defil =0;defil<nb_departement;defil++)
				{
					chaine_liste+="<option value='" + tab_departement[defil] + "'>" + tab_departement[defil] + "</option>";
				}
				chaine_liste += "</select>";
				document.getElementById("calque_departement").innerHTML = chaine_liste;
			}
			else
				alert("Veuillez precisez une region");

		}
		function charger_sous_secteur()
		{
			var tab_ss_secteur="";
			var nb_ss_secteur=0;
			var chaine_liste_ss_sect="";
			var secteur_texte=document.getElementById("choix_secteur").value;
			var le_secteur=secteur_texte.substr(0,2);
			if(le_secteur!="00")
			{
				//alert(secteur_texte + "--"+le_secteur);
				tab_ss_secteur=retour_sous_secteur(le_secteur).split('|');
				nb_ss_secteur=tab_ss_secteur.length;
				//alert(nb_ss_secteur);
				chaine_liste_ss_sect = "<select name='choix_sous_secteur' id = 'choix_sous_secteur' class ='liste_droite' onchange ='verifier_sous_secteur(\"" + secteur_texte + "\");'>";
				chaine_liste_ss_sect +="<option value = 'sous_secteur'>Selectionnez un secteur d'activité</option>";
				for(var defil =0;defil<nb_ss_secteur;defil++)
				{
					chaine_liste_ss_sect+="<option value='" + tab_ss_secteur[defil] + "'>" + tab_ss_secteur[defil] + "</option>";
				}
				chaine_liste_ss_sect += "</select>";
				document.getElementById("calque_sous_secteur").innerHTML = chaine_liste_ss_sect;

			}
			else
				alert("Veuillez precisez un secteur");
		}
	</script>
	<!--pied de page -->
	<?php
		include 'pied_page.php' ;
	 ?>
</body>

