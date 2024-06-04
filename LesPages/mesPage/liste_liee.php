<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet"  href="rechercheStyle.css">
		<script type="text/javascript" src="autocomplete.js"></script>
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
			var departement = new Array();
			departement[0] = new Array();
			departement[1] = new Array("Ain","Ardèche","Cantal","Drôme","Isère","Loire","Haute-Loire","Puy-de-Dôme","Rhône","Métropole de Lyon","Savoie"," Haute-Savoie");
			departement[2] = new Array("Côtes-d'Armor","Finistère","Ille-et-Vilaine","Morbihan");
			departement[3] = new Array("Cher","Eure-et-Loir","Indre","Indre-et-Loire","Loir-et-Cher","Loiret");
			departement[4] = new Array("Corse-du-Sud","Haute-Corse");
			departement[5] =new Array("Ardennes","Aube","Marne","Haute-Marne","Meurthe-et-Moselle","Meuse","Moselle","Bas-Rhin","Haut-Rhin","Vosges ");
			departement[6] = new Array("Aisne","Nord","Oise","Pas-de-Calais","Somme");
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
				    document.getElementById("image").innerHTML="<img src ='image/"+ code +".gif' style ='width:300px'/>";
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
	<?php 
		$data =array("Découpeuse jet d'eau","Découpeuse plasma","Découpeuse laser","Poinçonneuse","Plieuse","Machine à souder TIG","Machine à souder","MIG","Machine à souder MAG","Cintreuse Emboutisseuse à chaud","Emboutisseuse à froid","Matrice","Poinçon","Laminoir à produit plats","Laminoir à produit longs","Laminoir à fils","Laminoir à rouleaux coniques","Presse à emboutir","Presse hydraulique","Presse à vis","Presse mécanique","Marteaux /pillon","tréfileries","Impimante 3D",'Imprimante 3D métal','Stéreolithographie','usinage CNC','Coulée sous vide','Fraiseuse','Erosion Fil','Erosion enfonçage','Rectifieuse','Foreuse','Radiale','Tour','Reacteur CVD','Réacteur PVD','Cuve électrolytique','Cuve d\'aérogommage','Brunissoir à galet','Grainailleuse','Sableuse','Poliseuse','Canon à flame-plating','Banc traction','Banc de flexion','Réometre','Machine Charpy','machine d\'essai de pelage','Chambre anéchoïque','Amplificateur CEM','Antenne de mesure','Antenne de suceptibilité','Mesure de champ','Sonde de champs','Charge d\'ondes','Guide d\'ondes','Wattmètres','Générateur de signaux','Générateur de breuit','Générateurs de peigne','Analiseur de specte','Récepteur de mesure EMI','Génerateur de transitoires','Pistolage de decharges electrostatiques','Chambre réverbérante à brassage de mode','(CRBM)','Cages de Faraday','Simulateur de foudre','NEMP','HEMP');
		$datalen=count($data);
		sort($data);
		$results=array();
		//echo $datalen;
		for($i = 0;$i<$datalen && count($results)<10;$i++)
		   	{
		   		if(stripos($data[$i], $_GET['s'])==0){
		   			array_push($results, $data[$i]);
		   		}
		   	}
		echo implode('|', $results);
	?>
	   	<form name="monFormulaire" id="monFormulaire" method="GET">
		<input type="text" id="search" name="search" value="Sesissez un nom de materiel...." autocomplete="off">
	    <div id="results">
	    	resulat1
	    </div>
		<br />
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
		<br />
		<select name="choix_departement" id="choix_departement" onFocus="verifChoixRegion();">
			<option value="0" selected>-- choisissez une ville</option>
		</select>
		<br />
		<div name="image" id="image"> </div>
	</form>
	<script type="text/javascript">
		(function()
		{
    		var searchElement = document.getElementById('search'),
		    results = document.getElementById('results'),
	        selectedResult = -1, // Permet de savoir quel résultat est sélectionné : -1 signifie "aucune sélection"
	        previousRequest, // On stocke notre précédente requête dans cette variable
	        previousValue = searchElement.value; // On fait de même avec la précédente valeur
	   		function getResults(keywords)
	   		{ // Effectue une requête et récupère les résultats
        		var xhr = new XMLHttpRequest();
			    xhr.open('GET', './search.php?s='+ encodeURIComponent(keywords));
		        xhr.addEventListener('readystatechange', function()
		        {
		            if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200)
		            {
	                	displayResults(xhr.responseText);
		            }
    		    });
	        xhr.send(null);
	        return xhr;
	    	}
	    function displayResults(response)
	    { // Affiche les résultats d'une requête
		    results.style.display = response.length ? 'block' : 'none'; // On cache le conteneur si on n'a pas de résultats
	        if (response.length)
	        { // On ne modifie les résultats que si on en a obtenu
		        response = response.split('|');
		        var responseLen = response.length;
		        results.innerHTML = ''; // On vide les résultats
		        for (var i = 0, div ; i < responseLen ; i++)
		        {
		        	div = results.appendChild(document.createElement('div'));
		            div.innerHTML = response[i];
		            div.addEventListener('click', function(e)
		            {
		            	chooseResult(e.target);
		        	});
		        }
	    	}
	    }
    function chooseResult(result)
    { // Choisi un des résultats d'une requête et gère tout ce qui y est attaché
	    searchElement.value = previousValue = result.innerHTML; // On change le contenu du champ de recherche et on enregistre en tant que précédente valeur
        results.style.display = 'none'; // On cache les résultats
        result.className = ''; // On supprime l'effet de focus
        selectedResult = -1; // On remet la sélection à "zéro"
 	    searchElement.focus(); // Si le résultat a été choisi par le biais d'un clique alors le focus est perdu, donc on le réattribue
   	}
    searchElement.addEventListener('keyup', function(e)
    {
	    var divs = results.getElementsByTagName('div');
	    if (e.keyCode == 38 && selectedResult > -1)
	    { // Si la touche pressée est la flèche "haut"
		    divs[selectedResult--].className = '';
		    if (selectedResult > -1)
		    { // Cette condition évite une modification de childNodes[-1], qui n'existe pas, bien entendu
		    	divs[selectedResult].className = 'result_focus';
	    	}
    	}
        else if (e.keyCode == 40 && selectedResult < divs.length - 1)
        { // Si la touche pressée est la flèche "bas"
	        results.style.display = 'block'; // On affiche les résultats
	        if (selectedResult > -1)
	        { // Cette condition évite une modification de childNodes[-1], qui n'existe pas, bien entendu
	        	divs[selectedResult].className = '';
	        }
            divs[++selectedResult].className = 'result_focus';
    	}
        else if (e.keyCode == 13 && selectedResult > -1)
        { // Si la touche pressée est "Entrée"
        	chooseResult(divs[selectedResult]);
    	}
        else if (searchElement.value != previousValue)
        { // Si le contenu du champ de recherche a changé
	        previousValue = searchElement.value;
	        if (previousRequest && previousRequest.readyState < XMLHttpRequest.DONE)
	        {
                previousRequest.abort(); // Si on a toujours une requête en cours, on l'arrête
            }
            previousRequest = getResults(previousValue); // On stocke la nouvelle requête
            selectedResult = -1; // On remet la sélection à "zéro" à chaque caractère écrit
        }
    });
})();
	</script>
</body>
</html>