<?php
			session_start();
			//include 'recherche.php';
			//echo(session_name());
				//echo$_POST['contact'];
				//echo $row['idEntreprise'];
				$mysqli=new mysqli("localhost","root","hari","entrepriseprestataire");
				mysqli_set_charset($mysqli,'utf8');
				if($mysqli->connect_errno)
				{
					echo "Echec lors de la connexion à Mysql : (".$mysqli->connect_errno.")"
					.$mysqli->connect_errno."<br>";
				}
				else
					echo "info serveur:".$mysqli->host_info ."<br>";	
				if(isset($_POST['envoyer']))
				{
					echo $row['idEntreprise'];
				}