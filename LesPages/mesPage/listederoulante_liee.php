<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet"  href="rechercheStyle.css">
<script type="text/javascript">
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

			var dep = new Array();
			//dep[0] = new Array();
			dep[0] = new Array("Ain","Ardèche","Cantal"," Drôme"," Isère","Loire","Haute-Loire","Puy-de-Dôme"," Rhône"," Métropole de Lyon"," Savoie"," Haute-Savoie");
			dep[1] = new Array("Côtes-d'Armor"," Finistère","Ille-et-Vilaine"," Morbihan");
			dep[2] = new Array("Cher","Eure-et-Loir","Indre","Indre-et-Loire","Loir-et-Cher"," Loiret");
			dep[3] = new Array("Corse-du-Sud","Haute-Corse");
			dep[4] = new Array("Ardennes", "Aube", " Marne", "Haute-Marne", "Meurthe-et-Moselle", " Meuse", " Moselle", " Bas-Rhin", " Haut-Rhin", " Vosges ");
			dep[5] = new Array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme");
			dep[6] = new Array("Paris", "Seine-et-Marne", "Yvelines", "Essonne", "Hauts-de-Seine", " Seine-Saint-Denis", "Val-de-Marne", "Val-d'Oise");
			dep[7] = new Array("Calvados", "Eure", "Manche", " Orne", " Seine-Maritime");
			dep[8] = new Array("Charente", "Charente-Maritime", "Corrèze", "Creuse", " Dordogne", " Gironde", "Landes", "Lot-et-Garonne", "Pyrénées-Atlantiques", "Deux-Sèvres", "Vienne", " Haute-Vienne");
			dep[9] = new Array("Ariège", "Aude", "Aveyron", "Grad", " Haute-Garonne", " Gers", "Hérault", "Lot", "Lozère", "Hautes-Pyrénées", "Pyrénées-Orientales", "Tarn", "Tarn-et-Garonne");
			dep[10] = new Array("Loire-Atlantique", "Maine-et-Loire", "Mayenne", "Sarthe", "Vendée");
			dep[11] = new Array("Berlin", "Stutgart", "Munich");
			dep[12] = new Array("Alpes-de-Haute-Provence", " Hautes-Alpes", "Alpes-Maritimes", "Bouches-du-Rhône", " Var", "Vaucluse")
			dep[13] = new Array("Guadeloupe");
			dep[14] = new Array("Martinique");
			dep[15] = new Array("Guyane");
			dep[16] = new Array("La Réunion");
			dep[17] = new Array("Mayotte");

function remplirDepartement(code)
  {
  verifR();
  var lesDepartement = dep[code];

  if (code>0)
    {
    formulaire.choix_departement.options.length = lesDepartement.length;
    for (i=0; i<lesDepartement.length; i++)
      {
      formulaire.choix_departement.options[i].value = lesDepartement[i];
      formulaire.choix_departement.options[i].text = lesVilles[i];
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
	<form method="POST" action="#" name="monFormulaire">
				<table>
					<tr>
						<td>
					<label for="region" id="region">Region</label>
							<select name="choix_region" id="choix_region" class="liste" onchange ="remplirDepartement(this.options[this.selectedIndex].value;">Region
								<option value="0" selected>Soisissez un region</option>
								<option value="1">01_Auvergne-Rhône-Alpes</option>
								<option value="2">02_Bourgogne-Franche-Comte</option>
								<option value="3">03_Bretagne</option>
								<option value="4">04_Centre-Val de Loire</option>
								<option value="5">05_Corse</option>
								<option value="6">06_Grand Est</option>
								<option value="7">07_Hauts-de-France</option>
								<option value="8">08_Île-de-France</option>
								<option value="9">09_Normandie</option>
								<option value="1">10_Nouvelle-Aquitaine</option>
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
							<label for="departement" id="departement">Region</label>
							<select name="choix_departement" onFocus="verifChoixRegion();">
							<option value="0" selected>-- choisissez un departement--</option>
							</select>
						
					</td>
				</tr>
			</table>
		</form>
		
</body>
