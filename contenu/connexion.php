<!DOCTYPE html>
<html lang="fr">
	<head>
    	<title>RS WEBSITE</title> 	<!-- Titre -->
		<link rel="icon" type="image/png" href="image/logo.png" /> <!-- Logo -->
    	<meta charset="utf-8"/>
	</head>	
	<?php  
    	session_start();  // Démarrage ou restauration de la session
	?>
	<body>
		    <?php

		        $serveur = "localhost"; //identifiant server
		        $dbname = "projet_rs"; //nom de la bdd
		        $user = "root"; //nom du compte bdd
		        $pass = ""; // mot de passe du compte bdd

		        if (!isset($_SESSION['connect'])){ //permet de savoir s'il y a deja une session ouverte
		            $uti_mail = securisation_bdd($_POST["uti_mail"]);
		            $uti_mdp = securisation_bdd($_POST["uti_mdp"]); 
		        }
		        else {
		            $uti_mail = securisation_bdd($_SESSION['id']);
		            $uti_mdp = securisation_bdd($_SESSION['pass']); 
		        }

				function securisation_bdd($donnees){ //fonction qui empeche l'injection SQL
					$donnees = trim($donnees);
					$donnees = stripslashes($donnees);
					$donnees = htmlspecialchars($donnees);
					return $donnees;
				}

				$bdd = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
	            $req = $bdd->prepare("SELECT uti_num, uti_prenom, uti_mail, uti_mdp FROM utilisateur WHERE uti_mail = :uti_mail");
	            $req-> execute(array("uti_mail" => $uti_mail)); //verification de l'identifiant
	            $resultat = $req->fetch();


	            $verification = password_verify( $uti_mdp, $resultat["uti_mdp"]); //verification du mot de passe associé a l'identifiant


	            if ($verification) //si les identifiants sont corrects
	            {
					// Ecriture d'une nouvelle valeur dans le tableau de session
					$_SESSION['id'] = $uti_mail;
					$_SESSION['pass'] = $uti_mdp;
					$_SESSION['num'] = $resultat['uti_num'];
					$_SESSION['prenom'] = $resultat['uti_prenom'];
					$_SESSION['connect']= 'true';
					$req->closeCursor();
					header('Location: ../index.php');
 					exit();
	            }
	            else
	            {
	            	header('Location: ../include/connexion_lost.php'); //renvoie a la page d'erreur de login
	            	$req->closeCursor();
	            }
   			?>
	</body>
</html>