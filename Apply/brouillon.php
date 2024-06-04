<?php

elseif($_POST['choix_region']!='00' && $_POST['choix_secteur']!='00'&& !empty($_POST['materiel']))
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
						}
					elseif($_POST['choix_region']!='00' && $_POST['choix_secteur']!='00'&& !empty($_POST['filiere']))
						{
							$laRegion =$_POST['choix_region'];
						 	$leDepartement =$_POST['choix_departement'];
						 	$filiere = $_POST['filiere'];
						 	$secteur = $_POST['choix_secteur'];
						 	$sous_secteur=$_POST['choix_sous_secteur'];
						 	//$sous_secteur = $_POST['choix_sous_secteur'];
						 	echo 'resulta'. $laRegion .'-'.$leDepartement."<br />";
						 	echo "<br />filiere: ".$filiere;
						 	echo "<br /> les chois des metier ".$secteur."--".$sous_secteur;
						 	echo "<br /> les chois des materiel ".$materiel;
						}
						else
							if(!empty($_POST['materiel']) &&(!empty($_POST['filiere']) && $_POST['choix_region']!='00'))
						{
							$laRegion =$_POST['choix_region'];
						 	$leDepartement =$_POST['choix_departement'];
						 	$materiel =$_POST['materiel'];
						 	$filiere = $_POST['filiere'];
						 	//$sous_secteur = $_POST['choix_sous_secteur'];
						 	echo 'resulta'. $laRegion .'-'.$leDepartement."<br />";
						 	echo "<br /> les chois des materiel ".$materiel;
						 	echo "<br />filiere :".$filiere;
						 }else 

						 if(!empty($_POST['materiel']) && !empty($_POST['filiere']) && $_POST['choix_secteur']!='00')
						 {
						 	$materiel =$_POST['materiel'];
						 	$filiere = $_POST['filiere'];
						 	$secteur = $_POST['choix_secteur'];
						 	$sous_secteur=$_POST['choix_sous_secteur'];
						 	//$sous_secteur = $_POST['choix_sous_secteur'];
						 	echo "<br /> les chois des materiel ".$materiel;
						 	echo "<br />filiere: ".$filiere;
						 	echo "<br /> les chois des metier ".$secteur."--".$sous_secteur;
						 }
					 	else
					 		if(!empty($_POST['materiel']) && $_POST['']) 
					 		{
					 			
						 		$materiel =$_POST['materiel'];
						 		echo "<br /> les chois des materiel ".$materiel;

					 		}
					 		else
					 			if (!empty($_POST['filiere'])) 
					 		{
					 			$filiere = $_POST['filiere'];
								echo "<br />filiere: ".$filiere;
					 		}
?>