<!DOCTYPE html>
<html>
<head>
	<title>page de recherche</title>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="traitement.css">
	<script language="javascript" id="cible" src="js/monScript.js"></script>
</head>
<body>
	<div class="haut_page" id="haut_page">
		<h1> Bienvenue à la page de recherche</h1>
	</div>
	<div class="contenu" id="contenu">
		<div id="recherche">
			<form  method="POST" action="recherche.php" class="formulaire" id="formulaire">
				<div class="partie_droite">
					<div class="partie_droite_gauche">
						<input type="text" name="recherche" id="recherche" placeholder="Rechercher"/>
					</div>
					<div class="partie_droite_gauche" id="titre">
						<input type="text" name="materiel" value="Veuillez saisir les mots" id ="moteur" onkeyup="controle_saisie()" onclick="init_saisie('1')" onmouseout="init_saisie('2')" />
						<div id="prop" class="prop" style="float:right;"> texte  </div>
					</div>
					<div class="partie_bas" id="partie_bas">
					<input type="submit" name="rechercher" id="valider" value="Rechercher">
					</div>
				</div>
				<!--PARTIE PRE REMPLIS -->
				<div class="partie_gauche">
					<table class="tableau">
						<caption> liste pres remplis  </caption>
						<tr class="ligne">
							<td class="colonne">
								<label for="metier" id="metier" class="legende">Metier</label>
								<select name="choix_secteur" id="choix_secteur" class="liste" onchange="charger_sous_secteur()">Metier
									<option value="00">Selectionnez un metier</option>
									<option value="01_usinage">01_Usinage</option>
									<option value="02_bureau etudes">02_Bureau d'etudes</option>
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
							<td id="calque_sous_secteur" class="colonne" >&nbsp;</td>
							<tr>
							<td class="colonne">
								<label for="filiere" id="filiere">filiere</label>
								<select name="filiere" id="choix_filiere">
									<option value="">Choisir</option>
									<option id="option1" value="option1">option1</option>
									<option id="option2" value="option2">option2</option>
									<option id="option3" value="option3">option3</option>
									<option id="option4" value="option4">option4</option>
								</select>
							</td>
							<td class="colonne" id="colonne_gauche_secteur">&nbsp;</td>
							<td class="colonne"></td>
							</tr>
							<!--td class="colonne">
								<label for="materiel" id="materiel">Materiel</label>
								<!--select name="choix_materiel" id="choix_materiel" class="liste">Materiel
									<option value="materiel">Selectinnez un materiel</option>
									<option value="tour">Tour</option>
									<option value="fraisseuse">Fraisseuse</option>
									<option value="aleseuse">Aleseuse</option>
									<option value="brocheuse">Brocheuse</option>
									<option value="mortaiseuse">Mortaiseuse</option>
									<option value="perceuse">Perceuse</option>
									<option value="etaux limeur">Etaux limmeur</option>
									<option value="roboteuse">Roboteuse</option>
									<option value="rectifieuse">Rectifieuse</option>
									<option value="grenailleuse">Grenailleuse</option>
									<option value="station de travail">Tstation de travail</option>
									<option value="cluster de calcul">Cluster de calcul</option>
									<option value="logiciel dedies">Logiciel dediés</option>
								</select-->
								<!--a href="recherche_materiel.html">
									<h1>recherche par materiel</h1>
								</a>
							</td-->
						</tr>
						<tr class="ligne">
							<td class="colonne">
								<label for="region" id="region">Region</label>
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
									<option value="13_Provence-Alpes-Côte d Azur">13_Provence-Alpes-Côte d'Azur</option>
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
						</tr>
						<tr class="colonne">
							<td  class="colonne" id="colonne_gauche">
								&nbsp;
							</td>
							<td class="colonne" id="colonne_droite">
								&nbsp;
							</td>
						</tr>
					</table>
				</div>
			</form>
		</div>
	</div>
	<div class="bas_page" id="bas_page">
		<a href="start_up.php">
		<button value="Retour" name="retour">Retour</button>
		</a>
		<a href="index.php">
		<button value="quiter" name="quitter">Quitter</button>
		</a>
	</div>
	<script type="text/javascript" language="javascript">
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
			document.getElementById("colonne_droite").innerHTML="<img src ='image/"+ la_region +".gif' style ='width:300px'/>";
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
	function verifier_departement(region_texte)
	{
		var mon_departement ="";
		if(document.getElementById("choix_departement").value!="selection")
		{
			
			document.getElementById("colonne_gauche").innerHTML = "<div style = 'width:300px;text-align:left;margin-left:0px;'> Vous avez choisi la region :<br /><font color ='#7030a0'>" + region_texte +"</font> </div>";
			//document.getElementById("choix_departement").value=mon_departement;
			//alert(mon_departement);
			document.getElementById("colonne_gauche").innerHTML += "<div style = 'width:300px;text-align:left;margin-left:0px;'> Vous avez choisi la departement de:<br /><font color ='#7030a0'>" + document.getElementById("choix_departement").value +"</font></div>";
		}
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
	function verifier_sous_secteur(secteur_texte)
	{
		var mon_sous_secteur ="";
		if(document.getElementById("choix_sous_secteur").value!="sous_secteur")
		{
			document.getElementById("colonne_gauche_secteur").innerHTML = "<div style = 'width:200px;text-align:left;'> Vous avez choisi le metier :<br /><font color ='#7030a0'>" + secteur_texte +"</font> </div>";
			document.getElementById("colonne_gauche_secteur").innerHTML += "<div style = 'width:200px;text-align:left;'> Vous avez choisi le sous secteur d' activite :<br /><font color ='#7030a0'>" + document.getElementById("choix_sous_secteur").value +"</font></div>";


		}
		else
			alert("Veuillez precisez un sous secteur ");

	}
	function init_saisie(mode)
	{
		if(mode == "1" && document.getElementById("moteur").value == "Veuillez saisir les mots clés de recherche")
			document.getElementById("moteur").value = "";
		else if(document.getElementById("moteur").value == "")
			document.getElementById("moteur").value = "Veuillez saisir les mots clés de recherche";
	}
	function controle_saisie()
	{
		var nbMots = "";
		var  chaine_tab;
		var nbCar;
		var saisie ="";
		var res=false;
		var chaine = mots_cles();
		//alert(chaine);
		document.getElementById("prop").innerHTML ="";
		chaine_tab =chaine.split('|');
		nbMots = chaine_tab.length;
		//alert(nbMots);
		saisie = document.getElementById("moteur").value;
		nbCar =saisie.length;
		//alert(nbCar);
		if(nbCar > 0)
		{
			for( var rangee = 1; rangee < nbMots; rangee++)
			{
				if(chaine_tab[rangee].length > nbCar - 1)
				{
					if(saisie == chaine_tab[rangee].substr(0, nbCar))
					{
						if(res == false)
							res = true;
						document.getElementById("prop").style.visibility = "visible"
					}
					//document.getElementById("prop").innerHTML +="<br />";
					document.getElementById("prop").innerHTML += " <div class = 'prop' onClick = 'choix(\"" + chaine_tab[rangee] + "\")'>" + chaine_tab[rangee] + "</div>";
				}
			}
		}
	}
	function choix(valeur)
	{
		document.getElementById("moteur").value = valeur ;
		document.getElementById("prop").style.visibility = "hidden";
		resultats();
	}
	function resultats()
	{
		
	}
</script>
</body>
</html>



