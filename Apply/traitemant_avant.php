<!DOCTYPE html>
<html>
<head>
	<title>page de recherche</title>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="traitement.css">
	<script language="javascript" id="cible" src="js/monScript.js"></script>
</head>
<body>
	<div class="conteur_parent" id="conteneur_parent">
		<div class="entete" id="entete"><h1> Bienvenue à la page de recherche</h1></div>
		<div class ="contenu" id="contenu">
			<form  method="POST" action="recherche.php" class="formulaire" id="formulaire">
				<div class="partie_haut" id="partie_haut">
					<input type="text" name="recherche" id="recherche" placeholder="Rechercher"/>
					<input type="submit" name="rechercher" id="valider" value="Rechercher">
				</div>
				<div class="gauche" id="gauche">
					<label for="filiere" id="filiere">filiere</label>
					<select name="filiere" id="choix_filiere">
						<option value="">Choisir</option>
						<option id="option1" value="option1">option1</option>
						<option id="option2" value="option2">option2</option>
						<option id="option3" value="option3">option3</option>
						<option id="option4" value="option4">option4</option>
					</select>
				</div>
				<div  class="centre" id="centre"> 
					<div class="centre_titre" id="centre_titre">
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
							<option value="13_Provence-Alpes-Côte d'Azur">13_Provence-Alpes-Côte d'Azur</option>
							<option value="14_Guadeloupe">14_Guadeloupe</option>
							<option value="15_Martinique">15_Martinique</option>
							<option value="16_Guyane">16_Martinique</option>
							<option value="17_La Réunion">17_Martinique</option>
							<option value="18_Mayotte">18_Mayotte</option>
							<option value="19">Autre</option>					
						</select>
						<div id="calque_departement" class="liste_departement" style="float: right;"> 
							&nbsp;
						</div>		
					</div>		
					<div  class="colonne" id="colonne_gauche">
						&nbsp;
					</div>
					<div class="colonne" id="colonne_droite">
						&nbsp;
					</div>
				</div>
				<div class="milieu_gauche" id="milieu_gauche">
					<label for="materiel" id="materiel">Materiel</label>
					<select name="choix_materiel" id="choix_materiel" class="liste">Materiel
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
					</select>
				</div>
				<div class="milieu_droite" id="milieu_droite">
					<div class="titre_partie_bas" id="titre_partie_bas">
						<select name="choix_secteur" id="choix_secteur" class="liste" onchange="charger_sous_secteur()">Metier
							<option value="00">Selectionnez un metier</option>
							<option value="01_usinage">01_Usinage</option>
							<option value="02_bureau etudes">02_Bureau d'etudes</option>
						</select>
						<div id="calque_sous_secteur" class="liste" style="float: right;">
						&nbsp;					
						</div>
					</div>
					<div  class="colonne" id="colonne_gauche_secteur">
						&nbsp;
					</div>
				</div>	
			</form>
		</div>
		<div class = "pied_page" id="pied_page">
			<a href="start_up.php">
				<button value="Retour" name="retour">Retour</button>
			</a>
			<a href="index.php">
				<button value="quiter" name="quitter">Quitter</button>
			</a>
		</div>
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
			document.getElementById("colonne_droite").innerHTML="<img src ='image/"+ la_region +".gif' style ='width:230px;'/>";
			tab_departement=retour_departement(la_region).split('|');
			nb_departement=tab_departement.length;
			//alert(nb_departement);
			chaine_liste = "<select name='choix_departement' id = 'choix_departement' class ='liste' onchange ='verifier_departement(\"" + region_texte + "\");'>";
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
			
			document.getElementById("colonne_gauche").innerHTML = "<div style = 'width:300px;text-align:left;'> Vous avez choisi la region :<br /><font color ='#7030a0'>" + region_texte +"</font> </div>";
			//document.getElementById("choix_departement").value=mon_departement;
			//alert(mon_departement);
			document.getElementById("colonne_gauche").innerHTML += "<div style = 'width:300px;text-align:left;'> Vous avez choisi la departement de:<br /><font color ='#7030a0'>" + document.getElementById("choix_departement").value +"</font></div>";

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
			chaine_liste_ss_sect = "<select name='choix_sous_secteur' id = 'choix_sous_secteur' class ='liste' onchange ='verifier_sous_secteur(\"" + secteur_texte + "\");'>";
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
			document.getElementById("colonne_gauche_secteur").innerHTML = "<div style = 'width:300px;text-align:left;'> Vous avez choisi le metier :<br /><font color ='#7030a0'>" + secteur_texte +"</font> </div>";
			document.getElementById("colonne_gauche_secteur").innerHTML += "<div style = 'width:300px;text-align:left;'> Vous avez choisi le sous secteur d' activite :<br /><font color ='#7030a0'>" + document.getElementById("choix_sous_secteur").value +"</font></div>";


		}
		else
			alert("Veuillez precisez un sous secteur ");

	}
</script>

</body>

<footer id="footer">mon pied de page</footer>
</html>

