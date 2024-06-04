
<html>
	<head>
		<title>page de recherche</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet"  href="styl_recherche.css">
		<script language="javascript" id="cible" src="js/monScript.js"></script>
	</head>
	<body>
		<div id="en-tete" class="en-tete">
			<h1>
				resultat de votre recherche <br>
			</h1>
		</div>
		<div id="contenu" class="contenue">
			<?php
				session_name('startup');
				session_start();
				echo(session_name())."<br />";
				$mysqli=new mysqli("localhost","root","hari","entrepriseprestataire");
				mysqli_set_charset($mysqli,'utf8');
				if($mysqli->connect_errno)
				{
					echo "Echec lors de la connexion à Mysql : (".$mysqli->connect_errno.")"
					.$mysqli->connect_errno."<br>";
				}
				else
					echo $mysqli->host_info ."\n<br>";	
				if (isset($_POST['recherche']))
				{
					if($_POST['choix_region']!='00' &&  $_POST['choix_secteur'] != '00' && $_POST['materiel']!= 'Veuillez saisir les mots' && !empty($_POST['filiere']))
					{
						//echo"region et secteur non rensegner";
							$laRegion =$_POST['choix_region'];
						 	$leDepartement =$_POST['choix_departement'];
						 	$materiel =$_POST['materiel'];
						 	$filiere = $_POST['filiere'];
						 	$secteur = $_POST['choix_secteur'];
						 	$sous_secteur=$_POST['choix_sous_secteur'];
						 	//$sous_secteur = $_POST['choix_sous_secteur'];
						 	
						 	echo 'resulta'. $laRegion .'-'.$leDepartement."<br />";
						 	echo "<br /> les chois des materiel ".$materiel;
						 	echo "<br />filiere :".$filiere;
						 	echo "<br /> les chois des metier ".$secteur."--".$sous_secteur;
						 	//ajouter les requete mysql ici.....
						 	$requete_dep_equip_sect='SELECT entreprise.idEntreprise,entreprise.nomEntreprise,entreprise.codePostal,entreprise.nomVille,entreprise.site
							FROM equipement,entreprise,localite,secteuractivite,filiere WHERE entreprise.idEntreprise=equipement.idEntreprise
							AND equipement.nomMateriel =\''.$materiel.'\'
							AND entreprise.codePostal = localite.codePostal
							AND localite.nomDepartement=\''.$leDepartement.'\'
							AND entreprise.idEntreprise = secteuractivite.idEntreprise
							AND secteuractivite.nomSecteur =\''.$secteur.'\'
							AND entreprise.idEntreprise = filiere.idEntreprise
							AND filiere.nomFiliere=\''.$filiere.'\'';
							
						echo $requete_dep_equip_sect."<br>";
						$resultat=$mysqli->query($requete_dep_equip_sect);
						if($resultat=$mysqli->query($requete_dep_equip_sect))
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
									echo"resulta de votre recherche:  " .$row['idEntreprise']." ".$row['nomEntreprise']."  ".$row['codePostal'] ." ".$row['nomVille']."  site".$row['site']."<br>";
								}
							}
						}


					}
					elseif($_POST['choix_region']!='00' && $_POST['choix_secteur']!='00'&& $_POST['materiel'] !='Veuillez saisir les mots')
					{
						$laRegion =$_POST['choix_region'];
					 	$leDepartement =$_POST['choix_departement'];
					 	$materiel =$_POST['materiel'];
					 	$secteur = $_POST['choix_secteur'];
					 	$sous_secteur=$_POST['choix_sous_secteur'];
						echo 'resulta'. $laRegion .'-'.$leDepartement."<br />";
					 	//$sous_secteur = $_POST['choix_sous_secteur'];
					 	echo "<br /> les chois des metier ".$secteur."--".$sous_secteur;
					 	echo "<br /> les chois des materiel ".$materiel;
					 	//ajouter les requete mysql ici.....
					 	$requete_dep_equip_sect='SELECT entreprise.idEntreprise,entreprise.nomEntreprise,entreprise.codePostal,entreprise.nomVille,entreprise.site
							FROM equipement,entreprise,localite,secteuractivite WHERE entreprise.idEntreprise=equipement.idEntreprise
							AND equipement.nomMateriel =\''.$materiel.'\'
							AND entreprise.codePostal = localite.codePostal
							AND localite.nomDepartement=\''.$leDepartement.'\'
							AND entreprise.idEntreprise = secteuractivite.idEntreprise
							AND secteuractivite.nomSecteur =\''.$secteur.'\'';
							
						echo $requete_dep_equip_sect."<br>";
						$resultat=$mysqli->query($requete_dep_equip_sect);
						if($resultat=$mysqli->query($requete_dep_equip_sect))
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
									echo"resulta de votre recherche:  " .$row['idEntreprise']." ".$row['nomEntreprise']."  ".$row['codePostal'] ." ".$row['nomVille']."  site".$row['site']."<br>";
								}
							}
						}

					}						
					elseif($_POST['choix_region']!='00' && $_POST['choix_secteur']!='00'&& !empty($_POST['filiere']) && $_POST['materiel']=='Veuillez saisir les mots')
					{
						$laRegion =$_POST['choix_region'];
						$leDepartement =$_POST['choix_departement'];
						$filiere = $_POST['filiere'];
						$secteur = $_POST['choix_secteur'];
						$sous_secteur=$_POST['choix_sous_secteur'];
						//$sous_secteur = $_POST['choix_sous_secteur'];
						echo 'resulta'. $laRegion .'-'.$leDepartement."<br />";
						echo "<br /> filiere: ".$filiere;
						echo "<br /> les chois des metier ".$secteur."--".$sous_secteur;
						//ajouter les requete mysql ici.....
						$requete_dep_filiere_equip='SELECT entreprise.idEntreprise,entreprise.nomEntreprise,entreprise.codePostal,entreprise.nomVille,entreprise.site
							FROM entreprise,localite,filiere,secteuractivite WHERE entreprise.codePostal = localite.codePostal
							AND localite.nomDepartement=\''.$leDepartement.'\'
							AND entreprise.idEntreprise = filiere.idEntreprise
							AND filiere.nomFiliere =\''.$filiere.'\'
							AND filiere.idEntreprise = secteuractivite.idEntreprise									
							AND secteuractivite.nomSecteur = \''.$secteur.'\'';
						echo $requete_dep_filiere_equip ."<br>";
						$resultat=$mysqli->query($requete_dep_filiere_equip);
						if($resultat=$mysqli->query($requete_dep_filiere_equip))
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
									echo"resulta de votre recherche:  " .$row['idEntreprise']." ".$row['nomEntreprise']."  ".$row['codePostal'] ." ".$row['nomVille']."  site".$row['site']."<br>";
								}
							}
						}
					}
					elseif($_POST['materiel'] != 'Veuillez saisir les mots' &&(!empty($_POST['filiere']) && $_POST['choix_region']!='00'))
					{
						$laRegion =$_POST['choix_region'];
						$leDepartement =$_POST['choix_departement'];
						$materiel =$_POST['materiel'];
						$filiere = $_POST['filiere'];
						 	//$sous_secteur = $_POST['choix_sous_secteur'];
						echo 'resulta'. $laRegion .'-'.$leDepartement."<br />";
						echo "<br /> les chois des materiel ".$materiel;
						echo "<br />filiere :".$filiere ;"<br />";
						//ajouter les requete mysql ici.....
						$requete_dep_filiere_equip='SELECT entreprise.idEntreprise,entreprise.nomEntreprise,entreprise.codePostal,entreprise.nomVille,entreprise.site
							FROM entreprise,localite,filiere,equipement WHERE entreprise.codePostal = localite.codePostal
							AND localite.nomDepartement=\''.$leDepartement.'\'
							AND entreprise.idEntreprise = filiere.idEntreprise
							AND filiere.nomFiliere =\''.$filiere.'\'
							AND entreprise.idEntreprise = equipement.idEntreprise									
							AND equipement.nomMateriel = \''.$materiel.'\'';
						echo $requete_dep_filiere_equip ."<br>";
						$resultat=$mysqli->query($requete_dep_filiere_equip);
						if($resultat=$mysqli->query($requete_dep_filiere_equip))
						{
							//recuperer les resultat dans un tableau
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
									echo"resulta de votre recherche:  " .$row['idEntreprise']." ".$row['nomEntreprise']."  ".$row['codePostal'] ." ".$row['nomVille']."  site".$row['site']."<br>";
								}
							}
						}
					}
					elseif($_POST['materiel']!='Veuillez saisir les mots' && !empty($_POST['filiere']) && $_POST['choix_secteur']!='00')
					{
					 	$materiel =$_POST['materiel'];
					 	$filiere = $_POST['filiere'];
					 	$secteur = $_POST['choix_secteur'];
					 	$sous_secteur=$_POST['choix_sous_secteur'];
					 	//$sous_secteur = $_POST['choix_sous_secteur'];
					 	echo "<br /> les chois des materiel ".$materiel;
					 	echo "<br />filiere: ".$filiere;
					 	echo "<br /> les chois des metier ".$secteur."--".$sous_secteur;
					 	//ajouter les requete mysql ici.....
					 	$requete_secteur_materiel='SELECT entreprise.nomEntreprise,entreprise.codePostal,entreprise.nomVille,entreprise.site
							FROM entreprise,secteuractivite,equipement,filiere WHERE entreprise.idEntreprise = filiere.idEntreprise
							AND filiere.idEntreprise=secteuractivite.idEntreprise
							AND secteuractivite.idEntreprise=equipement.idEntreprise
							AND filiere.nomFiliere=\''.$filiere.'\'
							AND secteuractivite.nomSecteur=\''.$secteur.'\'
							AND equipement.nomMateriel=\''.$materiel.'\''; 
						echo $requete_secteur_materiel ."<br>";
						$resultat=$mysqli->query($requete_secteur_materiel);
						if($resultat=$mysqli->query($requete_secteur_materiel))
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
									echo"resulta de votre recherche:  ".$row['nomEntreprise']."  ".$row['codePostal'] ." ".$row['nomVille']."  site".$row['site']."<br>";
								}
							}
						}
					 }
					 elseif($_POST['materiel']!='Veuillez saisir les mots' && $_POST['choix_secteur']!='00')
					 {
					 	$materiel =$_POST['materiel'];
						$secteur = $_POST['choix_secteur'];
						$sous_secteur=$_POST['choix_sous_secteur'];
					 	echo "<br /> les chois des materiel ".$materiel;
						echo "<br /> les chois des metier ".$secteur."--".$sous_secteur;
						//ajouter les requete mysql ici.....
						$requete_secteur_materiel='SELECT entreprise.nomEntreprise,entreprise.codePostal,entreprise.nomVille,entreprise.site
							FROM entreprise,secteuractivite,equipement WHERE entreprise.idEntreprise = secteuractivite.idEntreprise
							AND secteuractivite.idEntreprise = equipement.idEntreprise
							AND secteuractivite.nomSecteur=\''.$secteur.'\'
							AND equipement.nomMateriel=\''.$materiel.'\''; 
						echo $requete_secteur_materiel ."<br>";
						$resultat=$mysqli->query($requete_secteur_materiel);
						if($resultat=$mysqli->query($requete_secteur_materiel))
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
									echo"resulta de votre recherche:  ".$row['nomEntreprise']."  ".$row['codePostal'] ." ".$row['nomVille']."  site".$row['site']."<br>";
								}
							}
						}
					 }
					 elseif($_POST['materiel']!='Veuillez saisir les mots' && $_POST['choix_region']!='00')
					 {
					 	$materiel =$_POST['materiel'];
						$laRegion =$_POST['choix_region'];
						$leDepartement =$_POST['choix_departement'];
						echo 'resulta'. $laRegion .'-'.$leDepartement."<br />";
						echo "les chois des materiel ".$materiel."</br>";
						$requete_dep_materiel='SELECT entreprise.nomEntreprise,entreprise.codePostal,entreprise.nomVille,entreprise.site
							FROM entreprise,localite,equipement WHERE entreprise.codePostal = localite.codePostal
							AND entreprise.idEntreprise = equipement.idEntreprise
							AND localite.nomDepartement=\''.$leDepartement.'\'
							AND equipement.nomMateriel=\''.$materiel.'\'';
						echo $requete_dep_materiel ."<br>";
						$resultat=$mysqli->query($requete_dep_materiel);
						if($resultat=$mysqli->query($requete_dep_materiel))
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
									echo"resulta de votre recherche:  ".$row['nomEntreprise']."  ".$row['codePostal'] ." ".$row['nomVille']."  site".$row['site']."<br>";
								}
							}
						}
						//ajouter les requete mysql ici.....
					 }
					 elseif($_POST['materiel']!='Veuillez saisir les mots' && !empty($_POST['filiere']))
					 {
					 	$materiel =$_POST['materiel'];
						$filiere = $_POST['filiere'];
						echo "<br /> les chois des materiel ".$materiel;
						echo "<br />filiere: ".$filiere;
						//ajouter les requete mysql ici.....
						$requete_secteur_materiel='SELECT entreprise.nomEntreprise,entreprise.codePostal,entreprise.nomVille,entreprise.site
							FROM entreprise,filiere,equipement WHERE entreprise.idEntreprise = filiere.idEntreprise
							AND entreprise.idEntreprise = equipement.idEntreprise 
							AND filiere.nomFiliere=\''.$filiere.'\'
							AND equipement.nomMateriel=\''.$materiel.'\'';
						echo $requete_secteur_materiel."<br>";
						$resultat=$mysqli->query($requete_secteur_materiel);
						if($resultat=$mysqli->query($requete_secteur_materiel))
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
									echo"resulta de votre recherche:  ".$row['nomEntreprise']."  ".$row['codePostal'] ." ".$row['nomVille']."  site".$row['site']."<br>";
								}
							}
						}
					 }
					 elseif(!empty($_POST['filiere']) && $_POST['choix_secteur']!='00')
					 {
					 	$secteur = $_POST['choix_secteur'];
						$sous_secteur=$_POST['choix_sous_secteur'];
						$filiere = $_POST['filiere'];
						echo "<br /> les chois des metier ".$secteur."--".$sous_secteur;
						echo "<br />filiere: ".$filiere;
						//ajouter les requete mysql ici.....
						$requete_secteur_filiere='SELECT entreprise.nomEntreprise,entreprise.codePostal,entreprise.nomVille,entreprise.site
							FROM entreprise,secteuractivite,filiere WHERE entreprise.idEntreprise = secteuractivite.idEntreprise
							AND entreprise.idEntreprise = filiere.idEntreprise
							AND filiere.nomFiliere=\''.$filiere.'\'
							AND secteuractivite.nomSecteur=\''.$secteur.'\'';
						echo $requete_secteur_filiere ."<br>";
						$resultat=$mysqli->query($requete_secteur_filiere);
						if($resultat=$mysqli->query($requete_secteur_filiere))
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
									echo"resulta de votre recherche:  ".$row['nomEntreprise']."  ".$row['codePostal'] ." ".$row['nomVille']."  site".$row['site']."<br>";
								}
							}
						}

					 }
					 elseif($_POST['choix_secteur']!='00' && $_POST['choix_region']!='00')
					 {
					 	$laRegion =$_POST['choix_region'];
					 	$leDepartement =$_POST['choix_departement'];
						$secteur = $_POST['choix_secteur'];
						$sous_secteur=$_POST['choix_sous_secteur'];
						echo "<br /> les chois des metier ".$secteur."--".$sous_secteur;
						echo '<br />resulta'. $laRegion .'-'.$leDepartement."<br />";
						//ajouter les requete mysql ici.....
						$requete_dep_secteur='SELECT entreprise.nomEntreprise,entreprise.codePostal,entreprise.nomVille,entreprise.site
							FROM entreprise,localite,secteuractivite WHERE entreprise.codePostal = localite.codePostal
							AND entreprise.idEntreprise = secteuractivite.idEntreprise
							AND secteuractivite.nomSecteur=\''.$secteur.'\'
							AND localite.nomDepartement=\''.$leDepartement.'\'';
						echo $requete_dep_secteur ."<br>";
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
								foreach ($rows as $row )
								{
									echo"resulta de votre recherche:  ".$row['nomEntreprise']."  ".$row['codePostal'] ." ".$row['nomVille']."  site".$row['site']."<br>";
								}
							}
						}


					 }
					elseif(!empty($_POST['filiere']) && $_POST['choix_region']!='00')
					{
						$laRegion =$_POST['choix_region'];
						$leDepartement =$_POST['choix_departement'];
						$filiere = $_POST['filiere'];
						echo '<br />resulta'. $laRegion .'-'.$leDepartement."<br />";
						echo "<br />filiere: ".$filiere;
						//ajouter les requete mysql ici.....
						$requete_dep_filiere='SELECT entreprise.idEntreprise, entreprise.nomEntreprise,entreprise.codePostal,entreprise.nomVille,entreprise.site
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
								echo '<table><tr><td>Nom entreprise</td><td>code Postal</td><td>Ville</td><td>Site</td></tr>';
								foreach ($rows as $row )
								{
									$row['idEntreprise'];
									//REQUETE POUR RECUPERE LES CONTACTE DE CHAQUE ENTREPRISE
									$contact ='SELECT contact.idEntreprise,contact.nom,contact.prenom,contact.fonction,contact.telephone,contact.e_mail
									FROM entreprise,contact WHERE entreprise.nomEntreprise =\''.$row['nomEntreprise'].'\' AND entreprise.idEntreprise =\''.$row['idEntreprise'].'\'
									 AND entreprise.idEntreprise = contact.idEntreprise';
									//echo '<br />'.$contact;
									$resultat_contact=$mysqli->query($contact);
									while ($contact_tab= $resultat_contact->fetch_array())
									{
										$contact_tabs[]=$contact_tab;

									}
									echo"<tr><td>".$row['nomEntreprise']."<td></td>".$row['codePostal'] ."</td><td>".$row['nomVille']."</td><tr>".$row['site']."</td></tr>";
								}
								echo"</table>";
								if(empty($contact_tabs))
									echo" aucune contacte enregistre ";
									else
									{
										echo "<table>
										<tr><td>Prenom</td><td>Nom</td><td>Fonction</td><td>Télephone</td><td>e_mail</td></tr>";
										foreach ($contact_tabs as $contact_tab )
										{
											$contact_tab['idEntreprise'];
											if($row['idEntreprise']==$contact_tab['idEntreprise'])
											echo
										"<tr><td>".$contact_tab['prenom'].'</td><td>'.$contact_tab['nom'].'</td><td>'.$contact_tab['fonction'].'</td><td>'.$contact_tab['telephone'].'</td><td>'.$contact_tab['e_mail'].'</td><tr>';	
										}
										echo"</table>";
									}
							}
						}

					}
					elseif (!empty($_POST['filiere'])) 
					{
						$filiere = $_POST['filiere'];
						echo "<br />filiere: ".$filiere;
						//ajouter les requete mysql ici...
						$requete_filiere='SELECT entreprise.idEntreprise, entreprise.nomEntreprise,entreprise.codePostal,entreprise.nomVille,entreprise.site
							FROM entreprise,filiere WHERE entreprise.idEntreprise = filiere.idEntreprise
							AND filiere.nomFiliere=\''.$filiere.'\'';
						echo $requete_filiere ."<br>";
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
								echo '<table><tr><td>Nom entreprise</td><td>code Postal</td><td>Ville</td><td>Site</td></tr>';
								foreach ($rows as $row )
								{
									$row['idEntreprise'];
									//REQUETE POUR RECUPERE LES CONTACTE DE CHAQUE ENTREPRISE
									$contact ='SELECT contact.idEntreprise ,contact.nom,contact.prenom,contact.fonction,contact.telephone,contact.e_mail
									FROM entreprise,contact WHERE entreprise.nomEntreprise =\''.$row['nomEntreprise'].'\' AND entreprise.idEntreprise =\''.$row['idEntreprise'].'\'
									 AND entreprise.idEntreprise = contact.idEntreprise';
									//echo '<br />'.$contact;
									$resultat_contact=$mysqli->query($contact);
									while ($contact_tab= $resultat_contact->fetch_array())
									{
										$contact_tabs[]=$contact_tab;

									}
									echo"<tr><td>".$row['nomEntreprise']."</td><td>".$row['codePostal'] ."</td><td>".$row['nomVille']."</td><tr>".$row['site']."</td></tr>";
									if(empty($contact_tabs))
									echo" aucune contacte enregistre ";
									else
									{
										//echo "<table><tr><td>Prenom</td><td>Nom</td><td>Fonction</td><td>Télephone</td><td>e_mail</td></tr>";
										foreach ($contact_tabs as $contact_tab )
										{
											$contact_tab['idEntreprise'];
											if($row['idEntreprise']==$contact_tab['idEntreprise'])
											echo
										"<tr><td>".$contact_tab['prenom'].'</td><td>'.$contact_tab['nom'].'</td><td>'.$contact_tab['fonction'].'</td><td>'.$contact_tab['telephone'].'</td><td>'.$contact_tab['e_mail'].'</td><tr>';	
										}
										//echo"</table>";
									}
								}
								echo "</table>";	
							}
						}
					}
					elseif($_POST['choix_secteur']!='00')
					{
						$secteur = $_POST['choix_secteur'];
						$sous_secteur=$_POST['choix_sous_secteur'];
						echo "<br /> les chois des metier ".$secteur."--".$sous_secteur."<br />";
						$requete_secteur='SELECT entreprise.idEntreprise, entreprise.nomEntreprise,entreprise.codePostal,entreprise.nomVille,entreprise.site
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
								echo"aucune entreprise se situe dans ce region";
							else
							{
								echo"<table>
								<tr><td>Nom de l'entreprise</td>
								<td>Code Postal</td>
								<td>Ville</td>
								<td>Site</td>
								</tr>";
								foreach ($rows as $row )
								{
									$row['idEntreprise'];
									//REQUETE POUR RECUPERE LES CONTACTE DE CHAQUE ENTREPRISE
									$contact ='SELECT contact.idEntreprise ,contact.nom,contact.prenom,contact.fonction,contact.telephone,contact.e_mail
									FROM entreprise,contact WHERE entreprise.nomEntreprise =\''.$row['nomEntreprise'].'\' AND entreprise.idEntreprise =\''.$row['idEntreprise'].'\'
									 AND entreprise.idEntreprise = contact.idEntreprise';
									//echo '<br />'.$contact;
									$resultat_contact=$mysqli->query($contact);
									while ($contact_tab= $resultat_contact->fetch_array())
									{
										$contact_tabs[]=$contact_tab;

									}
									echo"<tr><td>".$row['nomEntreprise']."</td>
									<td>".$row['codePostal'] ."</td>
									<td>".$row['nomVille']."</td>
									<td>".$row['site']."</td>
									</tr>";
									if(empty($contact_tabs))
									echo" aucune contacte enregistre ";
									else
									{
										/*echo "<table>
										<tr><td>Prenom</td>
										<td>Nom</td>
										<td>Fonction</td>
										<td>Télephone</td>
										<td>e_mail</td></tr>";*/
										foreach ($contact_tabs as $contact_tab )
										{
											$contact_tab['idEntreprise'];
											if($row['idEntreprise']==$contact_tab['idEntreprise'])
											echo
										"<tr><td>".$contact_tab['prenom'].'</td>
										<td>'.$contact_tab['nom'].'</td>
										<td>'.$contact_tab['fonction'].'</td>
										<td>'.$contact_tab['telephone'].'</td>
										<td>'.$contact_tab['e_mail'].'</td><tr>';
										}
										//echo"</table>";	
									}
								}
								echo"</table>";	
							}
						}

						//ajouter les requete mysql ici.....	
					}
					elseif($_POST['choix_region']!='00')
					{						
						$laRegion =$_POST['choix_region'];
						$leDepartement =$_POST['choix_departement'];
						echo '<br />Vous avez effectuer une recherche dans la region de:'. $laRegion .' et departement de:'.$leDepartement."<br />";
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

								echo "<table>
								<tr><td>entreprise</td><td>Adresse</td><td>Code postal</td><td>Ville</td><td>Description</td><td>site</td></tr>";

								foreach ($rows as $row )
								{
									$row['idEntreprise'];
									//REQUETE POUR RECUPERE LES CONTACTE DE CHAQUE ENTREPRISE
									$contact ='SELECT contact.idEntreprise ,contact.nom,contact.prenom,contact.fonction,contact.telephone,contact.e_mail
									FROM entreprise,contact WHERE entreprise.nomEntreprise =\''.$row['nomEntreprise'].'\' AND entreprise.idEntreprise =\''.$row['idEntreprise'].'\'
									 AND entreprise.idEntreprise = contact.idEntreprise';
									//echo '<br />'.$contact;
									$resultat_contact=$mysqli->query($contact);
									while ($contact_tab= $resultat_contact->fetch_array())
									{
										$contact_tabs[]=$contact_tab;

									}
									/*echo'<br />'.$row['nomEntreprise'].'-'.$row['nomRue'].'-'.$row['codePostal'].'-'.$row['nomVille'].'-'.$row['description'].'-<a href ="'.$row['site'].'">'.$row['site'].'</a><br />';*/
									echo'
									<tr> <td> '.$row['nomEntreprise'].'</td><td>'.$row['nomRue'].'</td><td>'.$row['codePostal'] .'</td><td>'.$row['nomVille']."</td><td>".$row['description'].'</td><td><a href ="'.$row['site'].'">'.$row['site'].'</a></td>';
									echo'<td>
									<form method ="POST">
									<input type ="submit" name="envoyer" value="contact" >';

									echo'</form></td>';
																	
									echo '</tr>';
									//echo '<tr><td>'.$contact.'</td></tr>';
									if(empty($contact_tabs))
									echo" aucune contacte enregistre ";
									else
									{
										/*echo"<table><tr><td>Prenomm
										</td><td>Nom</td><td>
										Fonction</td><td>Telephone</td><td>
										e_mail</td><td><tr>
										";*/
										foreach ($contact_tabs as $contact_tab )
										{
											$contact_tab['idEntreprise'];
											if($row['idEntreprise']==$contact_tab['idEntreprise'])
											echo'<tr><td>'.$contact_tab['nom'].'</td><td>'.$contact_tab['prenom'].'<td></td>'.$contact_tab['fonction'].'</td><td>'.$contact_tab['telephone'].'</td><td>'.$contact_tab['e_mail'].'</td></tr>';	
										}
										//echo'</table>';
									}
								
								}
								echo"</table>";
							}
						}
						//ajouter les requete mysql ici.....
					}
					elseif($_POST['materiel']!='Veuillez saisir les mots')
					{
						$materiel =$_POST['materiel'];
						//Requete  qui permet de faire le recherche des entreprise
						echo "<br /> les chois des materiel ".$materiel ."<br />";
						//ajouter les requete mysql ici.....
						$requete_materiel='SELECT entreprise.idEntreprise,entreprise.nomEntreprise,entreprise.nomRue,entreprise.codePostal,entreprise.nomVille,entreprise.description,entreprise.site
							FROM equipement,entreprise 
							WHERE entreprise.idEntreprise = equipement.idEntreprise
							AND equipement.nomMateriel=\''.$materiel.'\'';
						//echo $requete_materiel."<br>";
						$resultat=$mysqli->query($requete_materiel);
						if($resultat=$mysqli->query($requete_materiel))
						{
							//recupurer les resultat 
							while ($row= $resultat->fetch_array())
							{
								$rows[]=$row;
							}
							if(empty($rows))
								echo"aucune entreprise se situe qui possede ce materiel";
							else
							{
								echo "<table>
								<tr><td>entreprise</td><td>Adresse</td><td>Code postal</td><td>Ville</td><td>Description</td><td>site</td></tr>";
								foreach ($rows as $row )
								{
									$row['idEntreprise'];
									$contact ='SELECT contact.idEntreprise ,contact.nom,contact.prenom,contact.fonction,contact.telephone,contact.e_mail
									FROM entreprise,contact WHERE entreprise.nomEntreprise =\''.$row['nomEntreprise'].'\' AND entreprise.idEntreprise =\''.$row['idEntreprise'].'\'
									 AND entreprise.idEntreprise = contact.idEntreprise';
									//echo '<br />'.$contact;
									$resultat_contact=$mysqli->query($contact);
									//tableau de recuperation des contact
									while ($contact_tab= $resultat_contact->fetch_array())
									{
										$contact_tabs[]=$contact_tab;
									}
									echo"
									<tr> <td> ".$row['nomEntreprise']."</td><td>".$row['nomRue']."</td><td>".$row['codePostal'] ."</td><td>".$row['nomVille']."</td><td>".$row['description']."</td><td><a href =".$row['site'].">".$row['site']."</a></tr>";
									if(empty($contact_tabs))
									echo" aucune contacte enregistre ";
									else
									{
										echo "<table>
										<tr><td>Prenom</td><td>Nom</td><td>Fonction</td><td>Télephone</td><td>e_mail</td></tr>";
										foreach ($contact_tabs as $contact_tab )
										{
											$contact_tab['idEntreprise'];
											if($row['idEntreprise']==$contact_tab['idEntreprise'])
											echo
										"<tr><td>".$contact_tab['prenom'].'</td><td>'.$contact_tab['nom'].'</td><td>'.$contact_tab['fonction'].'</td><td>'.$contact_tab['telephone'].'</td><td>'.$contact_tab['e_mail'].'</td><tr>';	
										}
										echo"</table>";
									}
									echo"</table>";	
								}
								
							}
						}
						
					}
					else
					{
						echo "autre proposition";
					}
				 }	//if(!empty($_POST['filiere']) && $_POST[''])
				
			?>
			<table>
			<div>
				
				
			</div>
			</table>
		</div>
		<div id="pied-page" class="pied-page">
			<a href="traitement.php">
			<button value="Retour" name="retour">Retour</button>
			</a>
			<a href="index.php">
			<button value="quiter" name="quitter">Quitter</button>
			</a>
		</div>
	</body>
</html>