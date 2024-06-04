<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet"  href="rechercheStyle.css">
	/<!--<script language="javascript" id="cible" src="lejs/monScript.js"></script>!-->
	<script language="JavaScript">
		function verif()
		  {
		  if (document.layers)
		    {
		    formulaire = document.forms.monFormulaire;
		    }
		  else
		    {
		    formulaire = document.monFormulaire;
		    }
		  }

		function verifChoix_secteur()
		  {
		  verif();
		  if (formulaire.choix_secteur.value == "0")
		    {
		    alert('Vous devez tout d\'abord choisir un secteur!');
		    formulaire.choix_secteur.focus();
		    }
		  }

		var metier = new Array();
		metier[1] = new Array("Tournage","Fraisage" ,"Alesage" , "Brochage ","Decolletage","Decoupage","Mortaisage" ,"Lamage","Perçage","Filtrage","Tarandage","Réctification","Electro-érosion","Polissage","Sablage","Grainaillage","Burinage");
		metier[2] = new Array("Etude de faisabilité", "Conception mécanique","Calculs mécaniques statistiques","Calculs mécaniques dynamiques","Calculs compatibilité electromagnetique","Etude d' industrialisation','Etude économique");
		metier[3] = new Array("Traçage","Découpage","poinçonnage","Pliage","Soudure ","Cintrage","Emboutissage","Agrafage" ,"Rivetage","Dudgeonnage");
		metier[4] = new Array("Forage à Froid","Forage libre","Forage à mi-chaud","Liminage ","Emboutissage","Estampage","Matriçage","Tréfilage","Frappe à froid");
		metier[5] = new Array("Fusion selective par laser(SLM) ","Frittage selectif par laser (SLS)","Impression 3D","Fusion par Faiseau d'electrons","Dépot de fil fondu (FDM)","Stéreolithographie (SLA)","Fabrication d' objets laminés (LOM)");
		metier[6] = new Array("Moule petite série","Moule grand série","Moule métal","Moule mono matière","Moule bi-matière"," Moule silicone","Moule poudre");
		metier[7] = new Array("Aerogommage","Hydrogommage","Ebavurage","Brunissage","Galetage","Grenaillage","Sablage","Microbillage","Polissage","Dégressage","Décapage","Galvanoplastie","Cuivrage","Chromage","Cadmiage","Rhodiage","CDV","PVD","Anodisation","Phosphatisation","Soféisation","Dépôt métallique par voie humide","Dépôt métallique par voie sèche","Dépôt métallique par voie thermique","Dépôt métallique par projection thermique","Electrolyse","Traitement thermochimiques de diffusion","Dépôt chimique statistique","Traitements thermochimiques de diffusion","Depôt chimique statistique","Depôt chimique dynamique","Anodisation","Sulfinuz","Zingage","Traitement organique et organo-mineraux","Traitement par transformation structurale");
		metier[8] = new Array("Statistique","dynamique","raction","Compression","Compression isostatique","Flexion","Torsion","Résilience","Fatigue","Indentation","Dureté","Adhésion");
		metier[9] = new Array("Fabrication de capteur","Caractérisation de apteur","Distribution de capteur","Integration de capteur","Etalonnage de capteur");
		metier[10] = new Array("Blindage","Filtrage fréquentiel","Filtrage temporel","Ecretage","Certification","Marquage CE","Essais CEM");
		metier[11] = new Array();
		metier[12] = new Array();
		metier[13] = new Array();
		metier[14] = new Array();
		metier[15] = new Array();
		metier[16] = new Array();

		function remplirSous_secteur(code)
		  {
		  verif();
		  var les_sous_secteur = metier[code];

		  if (code>0)
		    {
		    formulaire.choix_sous_secteur.options.length = les_sous_secteur.length;
		    for (i=0; i<les_sous_secteur.length; i++)
		      {
		      formulaire.choix_sous_secteur.options[i].value = les_sous_secteur[i];
		      formulaire.choix_sous_secteur.options[i].text = les_sous_secteur[i];
		      }
		    document.monFormulaire.choix_sous_secteur.options.selectedIndex = 0;
		    }
		  else
		    {
		    formulaire.choix_sous_secteur.options.length = 1;
		    formulaire.choix_sous_secteur.options[0].value = 0;
		    formulaire.choix_sous_secteur.options[0].text = "-- choisissez un sous secteur--";
		    }
		  }
		  //choix region
		function verifR()
			{
				if (document.layers)
			    {
			    formulaire = document.forms.monFormulaire;
			    }
				else
			    {
			    formulaire = document.monFormulaire;
			    }
			}
		function verifChoixRegion()
		{
			verifR();
			if (formulaire.choix_region.value == "0")
			{
				alert('Vous devez tout d\'abord choisir une region!');
			    formulaire.choix_region.focus();
			}
		}
		var departement = new Array();
		//departement[0] = new Array();
		departement[1] = new Array("Ain","Ardèche","Cantal","Drôme","Isère","Loire","Haute-Loire","Puy-de-Dôme","Rhône","Métropole de Lyon","Savoie"," Haute-Savoie");
		departement[2] = new Array("Côtes-d'Armor","Finistère","Ille-et-Vilaine","Morbihan");
		departement[3] = new Array("Cher","Eure-et-Loir","Indre","Indre-et-Loire","Loir-et-Cher","Loiret");
		departement[4] = new Array("Cher","Eure-et-Loir","Indre","Indre-et-Loire","Loir-et-Cher","Loiret");
		departement[5] =new Array("Corse-du-Sud","Haute-Corse");
		departement[6] = new Array("Ardennes","Aube","Marne","Haute-Marne","Meurthe-et-Moselle","Meuse","Moselle","Bas-Rhin","Haut-Rhin","Vosges");
		departement[7] = new Array("Aisne","Nord","Oise","Pas-de-Calais","Somme");
		departement[8] = new Array("Paris","Seine-et-Marne","Yvelines","Essonne","Hauts-de-Seine"," Seine-Saint-Denis","Val-de-Marne","Val-d'Oise");
		departement[9] = new Array("Calvados","Eure","Manche","Orne","Seine-Maritime");
		departement[10] = new Array("Charente","Charente-Maritime","Corrèze","Creuse"," Dordogne","Gironde","Landes","Lot-et-Garonne","Pyrénées-Atlantiques","Deux-Sèvres","Vienne","Haute-Vienne");
		departement[11] = new Array("Ariège","Aude","Aveyron","Grad","Haute-Garonne","Gers","Hérault","Lot","Lozère","Hautes-Pyrénées","Pyrénées-Orientales","Tarn","Tarn-et-Garonne");
		departement[12] = new Array("Loire-Atlantique","Maine-et-Loire","Mayenne","Sarthe","Vendée");
		departement[13] = new Array("Alpes-de-Haute-Provence","Hautes-Alpes","Alpes-Maritimes","Bouches-du-Rhône","Var","Vaucluse");
		departement[14] = new Array("Guadeloupe");
		departement[15] = new Array("Martinique");
		departement[16] = new Array("Guyane");
		departement[17] = new Array("La Réunion");
		departement[18] = new Array("Mayotte");
		function remplirDepartement(code)
		{
			verifR();
			var lesDepartement = departement[code];
			if (code>0)
			{
				document.getElementById("image").innerHTML="<img src ='image2/"+ code +".gif' style ='width:320px'/>";
				formulaire.choix_departement.options.length = lesDepartement.length;
				for (i=0; i<lesDepartement.length; i++)
				{
					formulaire.choix_departement.options[i].value = lesDepartement[i];
				    formulaire.choix_departement.options[i].text = lesDepartement[i];
				}
				document.monFormulaire.choix_departement.options.selectedIndex = 0;
			}
			else
			{
				formulaire.choix_departement.options.length = 1;
				formulaire.choix_departement.options[0].value = 0;
				formulaire.choix_departement.options[0].text = "-- choisissez une ville";
			}
		}
		 
	</script>
</head>
<body>
	<div id="entête">
		<?php include 'enTete.php';?>			
	</div>
	<div id="corpsPage">
		<div id="menuRecherche">
			<form method="POST" action="recherche_startups.php" name="monFormulaire">
				<table>
					<tr>
						<td>
							<label>
								Materiel
							</label>
							<input type="text" name="search" id="search">
						</td>
					</tr>
					
					<tr>
						<td>
							<label for="filiere" id="filiere">Filiere</label>
							<select name="filiere" id="choix_filiere">
									<option value="">Choisir</option>
									<option id="option1" value="option1">option1</option>
									<option id="option2" value="option2">option2</option>
									<option id="option3" value="option3">option3</option>
									<option id="option4" value="option4">option4</option>
								</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="metier" id="metier" class="legende">Secteur</label>
							<select name="choix_secteur" id="choix_secteur" class="liste" onchange="remplirSous_secteur(this.options[this.selectedIndex].value);">Metier
								<option value="0" selected> choisissez un metier</option>
								<option value="1">01_Usinage</option>
								<option value="2">02_Bureau d'etudes</option>
								<option value="3">03_Tôlerie/Chaudronnerie</option>
								<option value="4">04_Forage/Fonderie</option>
								<option value="5">05_Fabrication additive/Prototypage</option>
								<option value="6">06_Outillage/Moule</option>
								<option value="7">07_Traitement de surface</option>
								<option value="8">08_Test mécanique</option>
								<option value="9">09_Capteurs</option>
								<option value="10">10_CEM</option>
								<option value="11">11_câblage</option>
								<option value="12">12__Baterie</option>
								<option value="13">13_Motorisation</option>
								<option value="14">14_Traitement de signal</option>
								<option value="15">15_Control comande</option>
								<option value="16">16_EMS</option>
								<option value="17">17_Carte electronique</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="metier" id="metier" class="legende">Sous-secteur</label>
							<select name="choix_sous_secteur" onFocus="verifChoix_secteur();">
								<option value="0" selected>--choisissez un metier--
								</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="region" id="region" class="legende">Region</label>
							<select name="choix_region" id="choix_region" onchange="remplirDepartement(this.options[this.selectedIndex].value);">
								<option value="0">--Choisissez une region--</option>
								<option value="1">01_Auvergne-Rhône-Alpes</option>
								<option value="2">02_Bourgogne-Franche-Comte</option>
								<option value="3">03_Bretagne</option>
								<option value="4">04_Centre-Val de Loire</option>
								<option value="5">05_Corse</option>
								<option value="6">06_Grand Est</option>
								<option value="7">07_Hauts-de-France</option>
								<option value="8">08_Île-de-France</option>
								<option value="9">09_Normandie</option>
								<option value="10">10_Nouvelle-Aquitaine</option>
								<option value="11">11_Occitanie</option>
								<option value="12">12_Pays de la Loire</option>
								<option value="13">13_Provence-Alpes-Côte d'Azur</option>
								<option value="14">14_Guadeloupe</option>
								<option value="15">15_Martinique</option>
								<option value="16">16_Guyane</option>
								<option value="17">17_La Réunion</option>
								<option value="18">18_Mayotte</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="departement" id="departement" class="legende">Secteur</label>
							<select name="choix_departement" id="choix_departement" onFocus="verifChoixRegion();">
								<option value="0" selected>-- choisissez une ville</option>
							</select>
						</td>
					</tr>
					<tr>
						<td name="image" id="image" style="float: right;"></td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="submit" id="submit" value="Rechercher">
						</td>
					</tr>
				</table>	
			</form>
		</div>
		<div id="resultatRecherche">Resultat
			<?php
			function determineNomRegion($numRegion)
			{
				$nomRegion;
				switch ($numRegion)
				 {
					case '1':
						$nomRegion="01_Auvergne-Rhône-Alpes";
						break;
					case '2':
						$nomRegion="02_Bourgogne-Franche-Comte";
					break;
					case '3':
						$nomRegion="03_Bretagne";
					break;
					case '4':
						$nomRegion="04_Centre-Val de Loire";
					break;
					case '5':
						$nomRegion = "05_Corse";
					break;
					case '6':
						$nomRegion = "06_Grand Est";
					break;
					case '7':
						$nomRegion = "07_Hauts-de-France";
					break;
					case '8':
						$nomRegion = "08_Île-de-France";
						break;
					case '9':
						$nomRegion = "09_Normandie";
						break;
					case '10':
						$nomRegion = "10_Nouvelle-Aquitaine";
						break;
					case '11':
						$nomRegion = "11_Occitanie";
						break;
					case '12':
						$nomRegion = "12_Pays de la Loire";
						break;
					case '13':
						$nomRegion = "13_Provence-Alpes-Côte d'Azur";
						break;
					case '14':
						$nomRegion = "14_Guadeloupe";
						break;
					case '15':
						$nomRegion = "15_Martinique";
						break;
					case '16':
						$nomRegion = "16_Guyane";
						break;
					case '17':
						$nomRegion = "17_La Réunion";
						break;
					case '18':
						$nomRegion ="18_Mayotte";
						break;
					default:
						$nomRegion = "region inconnue";
						break;
				}
				return $nomRegion;
			}
			function determineNomSecteur($numSecteur)
			{
				$nomSecteur;
				switch ($numSecteur)
				 {
					case '1':
						$nomSecteur="01_Usinage";
						break;
					case '2':
						$nomSecteur="02_Bureau d'etudes";
					break;
					case '3':
						$nomSecteur="03_Tôlerie/Chaudronnerie";
					break;
					case '4':
						$nomSecteur="04_Forage/Fonderie";
					break;
					case '5':
						$nomSecteur = "05_Fabrication additive/Prototypage";
					break;
					case '6':
						$nomSecteur = "06_Outillage/Moule";
					break;
					case '7':
						$nomSecteur= "07_Traitement de surface";
					break;
					case '8':
						$nomSecteur = "08_Test mécanique";
						break;
					case '9':
						$nomSecteur= "09_Capteurs";
						break;
					case '10':
						$nomSecteur= "10_CEM";
						break;
					case '11':
						$nomSecteur= "11_câblage";
						break;
					case '12':
						$nomSecteur= "12__Baterie";
						break;
					case '13':
						$nomSecteur = "13_Motorisation";
						break;
					case '14':
						$nomSecteur = "14_Traitement de signal";
						break;
					case '15':
						$nomRegion = "15_Control comande";
						break;
					case '16':
						$nomSecteur= "16_EMS";
						break;
					case '17':
						$nomSecteur = "17_Carte electronique";
						break;
					default:
						$nomSecteur = "secteur inconnue";
						break;
				}
				return $nomSecteur;

			}
			function contact($idEntreprise,$nomEntreprise,$connexion)
			{
				//REQUETE POUR RECUPERE LES CONTACTE DE CHAQUE ENTREPRISE
				$contact ='SELECT contact.idEntreprise ,contact.nom,contact.prenom,contact.fonction,contact.telephone,contact.e_mail
				FROM entreprise,contact WHERE entreprise.nomEntreprise =\''.$nomEntreprise.'\' AND entreprise.idEntreprise =\''.$idEntreprise.'\'
					AND entreprise.idEntreprise = contact.idEntreprise';
									//echo '<br />'.$contact;
					$resultat_contact=$connexion->query($contact);

				return $resultat_contact;
			}
			$mysqli=new mysqli("localhost","root","hari","entrepriseprestataire");
				mysqli_set_charset($mysqli,'utf8');
				if($mysqli->connect_errno)
				{
					echo "Echec lors de la connexion à Mysql : (".$mysqli->connect_errno.")"
					.$mysqli->connect_errno."<br>";
				}
				else
				echo $mysqli->host_info ."\n<br>";	
			if(isset($_POST['submit']))
			{
				//teste
				$numRegion= $_POST['choix_region'];
				$numSecteur=$_POST['choix_secteur'];
				$laRegion = determineNomRegion($_POST['choix_region']);
				$leDepartement =$_POST['choix_departement'];
				$secteur=determineNomSecteur($_POST['choix_secteur']);
				$sous_secteur=$_POST['choix_sous_secteur'];
				$filiere = $_POST['filiere'];
				echo "<br />Region de: ".$_POST['choix_region'].": ".$laRegion.
				 " departement de ".$leDepartement.
				"<br> Metier:".$secteur." Sous secteur: ".$sous_secteur.
				" <br>Filière de: ".$filiere;
				echo $numSecteur;
				if($numRegion != '0')
				{
					if( $numSecteur != '0')
					{
						if (!empty($filiere)) 
						{
							echo "Tous les champs son renseigner";
						}
					}
					
				}
				//echo "<br>".$nomRegion;
				//recherche par region
				/*if($_POST['choix_region'] !='0' && $_POST['choix_secteur'] =='0'&& empty($_POST['choix_filiere']))
				{			
					//$numRegion=$_POST['choix_region'];			
					//$laRegion = determineNomRegion($_POST['choix_region']);
					//echo "<br>".$laRegion;
					$leDepartement =$_POST['choix_departement'];
					//echo '<br />Vous avez effectuer une recherche dans la region de:'. $laRegion .' et departement de:'.$leDepartement."<br />";
					$requete='SELECT entreprise.idEntreprise, entreprise.nomEntreprise,entreprise.nomRue,entreprise.codePostal,entreprise.nomVille,entreprise.description,entreprise.site,entreprise.idEntreprise
						FROM entreprise,localite WHERE entreprise.codePostal = localite.codePostal
						AND localite.nomDepartement=\''.$leDepartement.'\'';
						//echo $requete ."<br>";

					$requet_prepare=mysqli_prepare($mysqli, $requete);
					$result=mysqli_query($mysqli,$requete);
						//$tableau =mysqli_fetch_array($result,MYSQLI_NUM);
						//echo(sizeof($tableau));

						//$result=mysqli_fetch_all($request);
						//print_r($result);
					$resultat=$mysqli->query($requete);
						
						//echo (sizeof($idEntreprise));
					if($resultat=$mysqli->query($requete))
					{
						while ($row= $resultat->fetch_array())
						{
							$rows[]=$row;
						}
						//echo($infoEntreprise[$n]);
						if(empty($rows))
							echo"aucune entreprise se situe dans ce region";
						else
						{
							echo"<br>choix par region <br>";
							echo "<table>
							<tr><td>entreprise</td><td>Adresse</td><td>Code postal</td><td>Ville</td><td>Description</td><td>site</td></tr>";
								foreach ($rows as $row )
								{
									$row['idEntreprise'];
								//pour l' affichage du contacte
								$resultat_contact=contact($row['idEntreprise'],$row['nomEntreprise'],$mysqli);//$mysqli->query($contact);
								while ($contact_tab= $resultat_contact->fetch_array())
								{
									$contact_tabs[]=$contact_tab;
								}
								echo"<tr><td>".$row['nomEntreprise']."</td>
								<td>".$row['nomRue'] ."</td>
								<td>".$row['codePostal'] ."</td>
								<td>".$row['nomVille']."</td>
								<td>".$row['description']."</td>
								<td><a href =\"".$row['site']."\">".$row['site']."</a></td>
								</tr>";
								if(empty($contact_tabs))
								echo" aucune contacte enregistre ";
								else
								{
									//echo"<tr><td><h3>Contacte:</h3></td><tr>";
									foreach ($contact_tabs as $contact_tab )
									{
										//$contact_tab['idEntreprise'];
										if($row['idEntreprise']==$contact_tab['idEntreprise'])
										echo
										'<tr><td>'.$contact_tab['fonction'].'</td>
										<td>'.$contact_tab['prenom'].'</td>
										<td>'.$contact_tab['nom'].'</td>
										<td>'.$contact_tab['telephone'].'</td>
										<td>'.$contact_tab['e_mail'].'</td><tr>';
									}
								}
								}
								echo"</table>";
						}
					}
						//ajouter les requete mysql ici.....
				}
				//Recherche par secteur
				elseif($_POST['choix_secteur']!='0' && $_POST['choix_region']=='0'&& empty($_POST['choix_filiere']))
				{
					$secteur = determineNomSecteur($_POST['choix_secteur']);
					$sous_secteur=$_POST['choix_sous_secteur'];
					//echo "<br /> les chois des metier ".$secteur."--".$sous_secteur."<br />";
					$requete_secteur='SELECT entreprise.idEntreprise, entreprise.nomEntreprise,entreprise.nomRue,entreprise.codePostal,entreprise.nomVille,entreprise.description,entreprise.site
							FROM entreprise,secteuractivite WHERE entreprise.idEntreprise = secteuractivite.idEntreprise
							AND secteuractivite.nomSecteur=\''.$secteur.'\'';
						//Affichage de Requete pour les données des entreprise 
						//echo $requete_secteur ."<br>";
					$resultat=$mysqli->query($requete_secteur);
					if($resultat=$mysqli->query($requete_secteur))
					{
						while ($row= $resultat->fetch_array())
						{
							$rows[]=$row;
						}
						if(empty($rows))
						echo"aucune entreprise se situe dans ce secteur";
						else
						{
							echo"<br>choix par secteur<br>";
							echo "<table>
							<tr><td>entreprise</td><td>Adresse</td><td>Code postal</td><td>Ville</td><td>Description</td><td>site</td></tr>";
								foreach ($rows as $row )
								{
									$row['idEntreprise'];
								//pour l' affichage du contacte
								$resultat_contact=contact($row['idEntreprise'],$row['nomEntreprise'],$mysqli);//$mysqli->query($contact);
								while ($contact_tab= $resultat_contact->fetch_array())
								{
									$contact_tabs[]=$contact_tab;
								}
								echo"<tr><td>".$row['nomEntreprise']."</td>
								<td>".$row['nomRue'] ."</td>
								<td>".$row['codePostal'] ."</td>
								<td>".$row['nomVille']."</td>
								<td>".$row['description']."</td>
								<td><a href =\"".$row['site']."\">".$row['site']."</a></td>
								</tr>";
								if(empty($contact_tabs))
								echo" aucune contacte enregistre ";
								else
								{
									//echo"<tr><td><h3>Contacte:</h3></td><tr>";
									foreach ($contact_tabs as $contact_tab )
									{
										//$contact_tab['idEntreprise'];
										if($row['idEntreprise']==$contact_tab['idEntreprise'])
										echo
										'<tr><td>'.$contact_tab['fonction'].'</td>
										<td>'.$contact_tab['prenom'].'</td>
										<td>'.$contact_tab['nom'].'</td>
										<td>'.$contact_tab['telephone'].'</td>
										<td>'.$contact_tab['e_mail'].'</td><tr>';
									}
								}
								}
								echo"</table>";
						}
					}

						//ajouter les requete mysql ici.....	
				}

				//recherche par filiere
				elseif (!empty($_POST['filiere']) && $_POST['choix_region']=='0'&& $_POST['choix_secteur']=='0') 
				{
					
					//echo "<br />filiere: ".$filiere;
						//ajouter les requete mysql ici...
					$requete_filiere='SELECT  entreprise.idEntreprise, entreprise.nomEntreprise,entreprise.nomRue,entreprise.codePostal,entreprise.nomVille,entreprise.description,entreprise.site,entreprise.idEntreprise
						FROM entreprise,filiere WHERE entreprise.idEntreprise = filiere.idEntreprise
						AND filiere.nomFiliere=\''.$filiere.'\'';
						//affichage de requete 
						//echo $requete_filiere ."<br>";
					$resultat=$mysqli->query($requete_filiere);
					if($resultat=$mysqli->query($requete_filiere))
					{
						while ($row= $resultat->fetch_array())
						{
							$rows[]=$row;
						}
						if(empty($rows))
							echo"aucune entreprise se situe dans ce region";
						else
						{
							echo"<br>choix par filiere<br>";
							echo "<table>
							<tr><td>entreprise</td><td>Adresse</td><td>Code postal</td><td>Ville</td><td>Description</td><td>site</td></tr>";
							foreach ($rows as $row )
							{
								$row['idEntreprise'];
								//pour l' affichage du contacte
								$resultat_contact=contact($row['idEntreprise'],$row['nomEntreprise'],$mysqli);//$mysqli->query($contact);
								while ($contact_tab= $resultat_contact->fetch_array())
								{
									$contact_tabs[]=$contact_tab;
								}
								echo"<tr><td>".$row['nomEntreprise']."</td>
								<td>".$row['nomRue'] ."</td>
								<td>".$row['codePostal'] ."</td>
								<td>".$row['nomVille']."</td>
								<td>".$row['description']."</td>
								<td><a href =\"".$row['site']."\">".$row['site']."</a></td>
								</tr>";
								if(empty($contact_tabs))
								echo" aucune contacte enregistre ";
								else
								{
									//echo"<tr><td><h3>Contacte:</h3></td><tr>";
									foreach ($contact_tabs as $contact_tab )
									{
										//$contact_tab['idEntreprise'];
										if($row['idEntreprise']==$contact_tab['idEntreprise'])
										echo
										'<tr><td>'.$contact_tab['fonction'].'</td>
										<td>'.$contact_tab['prenom'].'</td>
										<td>'.$contact_tab['nom'].'</td>
										<td>'.$contact_tab['telephone'].'</td>
										<td>'.$contact_tab['e_mail'].'</td><tr>';
									}
								}
							}
								echo"</table>";
						}
					}
				}
				//Recherche par secteur et region;
				elseif($_POST['choix_secteur']!='0' && $_POST['choix_region']!='0' && empty($_POST['filiere']))
				{
					$requete_dep_secteur='SELECT  entreprise.idEntreprise, entreprise.nomEntreprise,entreprise.nomRue,entreprise.codePostal,entreprise.nomVille,entreprise.description,entreprise.site,entreprise.idEntreprise
							FROM  entreprise,localite,secteuractivite WHERE entreprise.codePostal = localite.codePostal
							AND entreprise.idEntreprise = secteuractivite.idEntreprise
							AND secteuractivite.nomSecteur=\''.$secteur.'\'
							AND localite.nomDepartement=\''.$leDepartement.'\'';
						//echo $requete_dep_secteur ."<br>";
					$resultat=$mysqli->query($requete_dep_secteur);
					if($resultat=$mysqli->query($requete_dep_secteur))
					{
						while ($row= $resultat->fetch_array())
						{
							$rows[]=$row;
						}
						if(empty($rows))
						echo"aucune entreprise se situe dans ce region";
						else
						{
							echo "<table>
							<tr><td>entreprise</td><td>Adresse</td><td>Code postal</td><td>Ville</td><td>Description</td><td>site</td></tr>";
							foreach ($rows as $row )
							{
								$row['idEntreprise'];
								//pour l' affichage du contacte
								$resultat_contact=contact($row['idEntreprise'],$row['nomEntreprise'],$mysqli);//$mysqli->query($contact);
								while ($contact_tab= $resultat_contact->fetch_array())
								{
									$contact_tabs[]=$contact_tab;
								}
								echo"<tr><td>".$row['nomEntreprise']."</td>
								<td>".$row['nomRue'] ."</td>
								<td>".$row['codePostal'] ."</td>
								<td>".$row['nomVille']."</td>
								<td>".$row['description']."</td>
								<td><a href =\"".$row['site']."\">".$row['site']."</a></td>
								</tr>";
								if(empty($contact_tabs))
								echo" aucune contacte enregistre ";
								else
								{
									//echo"<tr><td><h3>Contacte:</h3></td><tr>";
									foreach ($contact_tabs as $contact_tab )
									{
										//$contact_tab['idEntreprise'];
										if($row['idEntreprise']==$contact_tab['idEntreprise'])
										echo
										'<tr><td>'.$contact_tab['fonction'].'</td>
										<td>'.$contact_tab['prenom'].'</td>
										<td>'.$contact_tab['nom'].'</td>
										<td>'.$contact_tab['telephone'].'</td>
										<td>'.$contact_tab['e_mail'].'</td><tr>';
									}
								}
							}
								echo"</table>";
						}
					}
				}
				elseif(!empty($_POST['filiere']) && $_POST['choix_region']!='0' && $_POST['choix_secteur'] =='0')
				{
					//ajouter les requete mysql ici.....
					$requete_dep_filiere='SELECT entreprise.idEntreprise, entreprise.nomEntreprise,entreprise.nomRue, entreprise.codePostal,entreprise.nomVille, entreprise.description, entreprise.site
							FROM entreprise,localite,filiere WHERE entreprise.codePostal = localite.codePostal
							AND entreprise.idEntreprise = filiere.idEntreprise
							AND filiere.nomFiliere=\''.$filiere.'\'
							AND localite.nomDepartement=\''.$leDepartement.'\'';
					echo $requete_dep_filiere ."<br>";
					$resultat=$mysqli->query($requete_dep_filiere);
					if($resultat=$mysqli->query($requete_dep_filiere))
					{
						while ($row= $resultat->fetch_array())
						{
							$rows[]=$row;
						}
						if(empty($rows))
							echo"aucune entreprise se situe dans ce region";
						else
						{
							echo"<br>Choix par region et filière<br>";
							echo "<table>
							<tr><td>entreprise</td><td>Adresse</td><td>Code postal</td><td>Ville</td><td>Description</td><td>site</td></tr>";
							foreach ($rows as $row )
							{
								$row['idEntreprise'];
								//pour l' affichage du contacte
								$resultat_contact=contact($row['idEntreprise'],$row['nomEntreprise'],$mysqli);//$mysqli->query($contact);
								while ($contact_tab= $resultat_contact->fetch_array())
								{
									$contact_tabs[]=$contact_tab;
								}
								echo"<tr><td>".$row['nomEntreprise']."</td>
								<td>".$row['nomRue'] ."</td>
								<td>".$row['codePostal'] ."</td>
								<td>".$row['nomVille']."</td>
								<td>".$row['description']."</td>
								<td><a href =\"".$row['site']."\">".$row['site']."</a></td>
								</tr>";
								if(empty($contact_tabs))
								echo" aucune contacte enregistre ";
								else
								{
									//echo"<tr><td><h3>Contacte:</h3></td><tr>";
									foreach ($contact_tabs as $contact_tab )
									{
										//$contact_tab['idEntreprise'];
										if($row['idEntreprise']==$contact_tab['idEntreprise'])
										echo
										'<tr><td>'.$contact_tab['fonction'].'</td>
										<td>'.$contact_tab['prenom'].'</td>
										<td>'.$contact_tab['nom'].'</td>
										<td>'.$contact_tab['telephone'].'</td>
										<td>'.$contact_tab['e_mail'].'</td><tr>';
									}
								}
							}
							echo"</table>";
						}
					}
				}*/
				
			}
		?>
		</div>
	</div>
	<div id="footer">
		<!-- pied de page!-->
		<?php include 'piedPage.php';?>
	</div>
	<!--LE CODE POUR LES LISTE LIER !-->
	<script type="text/javascript" language="javascript">
	
</script>

</body>
</html>