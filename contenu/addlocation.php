<!DOCTYPE html>
<html lang="fr">
	<head>
    	<title>RS WEBSITE</title> 	<!-- Titre -->
		<link rel="icon" type="image/png" href="image/logo.png" /> <!-- Logo -->
    	<meta charset="utf-8"/>
	</head>
	<?php
		// Démarrage ou restauration de la session
    	session_start();
	?>
	<body>
		    <?php

		        $serveur = "localhost"; //identifiant server
		        $dbname = "projet_rs"; //nom de la bdd
		        $user = "root"; //nom du compte bdd
		        $pass = ""; // mot de passe du compte bdd

		        $prd_prix_jour = securisation_bdd($_POST["prd_prix_jour"]); //recuperation des valeurs du formulaire via la méthode post
		        $prd_prix_caution = securisation_bdd($_POST["prd_prix_caution"]);
		        $prd_libelle = securisation_bdd($_POST["prd_libelle"]);
		        $prd_description = securisation_bdd($_POST["prd_description"]);
		        $prd_etat = securisation_bdd($_POST["prd_etat"]);
				$loc_date = securisation_bdd($_POST["loc_date"]);
				$cat_num = securisation_bdd($_POST["cat_num"]);
				$uti_num = securisation_bdd($_SESSION['num']); //recuperation des valeurs enregistré dans la session

				function securisation_bdd($donnees){ //fonction qui empeche l'injection SQL
					$donnees = trim($donnees);
					$donnees = stripslashes($donnees);
					$donnees = htmlspecialchars($donnees);
					return $donnees;
				}

		        try{
		            //On se connecte à la BDD
		            $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
		            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		            //On insère les données reçues
		            $sth = $dbco->prepare("
		                INSERT INTO produit(prd_libelle, prd_description,prd_etat, prd_prix_jour, prd_prix_caution, cat_num)
		                VALUES(:prd_libelle, :prd_description, :prd_etat, :prd_prix_jour, :prd_prix_caution, :cat_num)");
		            $sth->bindParam(':prd_libelle',$prd_libelle);
		            $sth->bindParam(':prd_description',$prd_description);
		            $sth->bindParam(':prd_etat',$prd_etat);
		            $sth->bindParam(':prd_prix_jour',$prd_prix_jour);
		            $sth->bindParam(':prd_prix_caution',$prd_prix_caution);
		            $sth->bindParam(':cat_num',$cat_num);
		            $sth->execute();

					$prd_num = $dbco ->lastInsertid(); //On recupere le dernier id ( auto-increment) enregistré dans la bdd

					$sth = $dbco->prepare("
		                INSERT INTO location(loc_date, uti_num)
		                VALUES(:loc_date, :uti_num)");
		            $sth->bindParam(':loc_date',$loc_date);
		            $sth->bindParam(':uti_num',$uti_num);
		            $sth->execute();

					$loc_num = $dbco ->lastInsertid();

					$sth = $dbco->prepare("
		                INSERT INTO composer_location(prd_num, loc_num)
		                VALUES(:prd_num, :loc_num)");
		            $sth->bindParam(':prd_num',$prd_num);
		            $sth->bindParam(':loc_num',$loc_num);
		            $sth->execute();

					unset($_SESSION['link']); //On supprime le lien de la session car il n'est plus utile'

		            header('Location: ../index.php'); //On renvoie l'utilisateur vers la page d'acceuil
					exit();
		        }
		        catch(PDOException $e){
		            echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
		        }
   			?>
		</h1>
	</body>
</html>
