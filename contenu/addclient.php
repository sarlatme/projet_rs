<!DOCTYPE html>
<html lang="fr">
	<head>
    	<title>RS WEBSITE</title> 	<!-- Titre -->
		<link rel="icon" type="image/png" href="image/logo.png" /> <!-- Logo -->
    	<meta charset="utf-8"/>
	</head>	
	<body>
		    <?php
		    
				// Démarrage ou restauration de la session
				session_start();
				// Réinitialisation du tableau de session
				// On le vide intégralement
				$_SESSION = array();
				// Destruction de la session
				session_destroy();
				// Destruction du tableau de session
				unset($_SESSION);

		        $serveur = "localhost"; //identifiant server
		        $dbname = "projet_rs"; //nom de la bdd
		        $user = "root"; //nom du compte bdd
		        $pass = ""; // mot de passe du compte bdd

		        $uti_mail = securisation_bdd($_POST["uti_mail"]); //recuperation des valeurs du formulaire via la méthode post
		        $uti_mdp = securisation_bdd($_POST["uti_mdp"]);
		        $uti_nom = securisation_bdd($_POST["uti_nom"]);
		        $uti_prenom = securisation_bdd($_POST["uti_prenom"]);
		        $uti_telephone = securisation_bdd($_POST["uti_telephone"]);
		        $uti_rue = securisation_bdd($_POST["uti_rue"]);
		        $uti_code_postal = securisation_bdd($_POST["uti_code_postal"]);
		        $uti_ville = securisation_bdd($_POST["uti_ville"]);	
		        $uti_num_carte = securisation_bdd($_POST["uti_num_carte"]);
		        $uti_expiration_carte = securisation_bdd($_POST["uti_expiration_carte"]);
		        $uti_checksum_carte = securisation_bdd($_POST["uti_checksum_carte"]);


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
		                INSERT INTO utilisateur(uti_nom, uti_prenom,uti_telephone, uti_mail, uti_mdp, uti_code_postal, uti_ville, uti_rue, uti_num_carte, uti_expiration_carte, uti_checksum_carte)
		                VALUES(:uti_nom, :uti_prenom, :uti_telephone, :uti_mail, :uti_mdp, :uti_code_postal, :uti_ville, :uti_rue, :uti_num_carte, :uti_expiration_carte, :uti_checksum_carte)");
		           	$uti_mdp_hash = password_hash($uti_mdp, PASSWORD_BCRYPT, ['cost' => 12]);
		            $sth->bindParam(':uti_nom',$uti_nom);
		            $sth->bindParam(':uti_prenom',$uti_prenom);
		            $sth->bindParam(':uti_telephone',$uti_telephone);
		            $sth->bindParam(':uti_mail',$uti_mail);
		            $sth->bindParam(':uti_mdp',$uti_mdp_hash);
		            $sth->bindParam(':uti_code_postal',$uti_code_postal);
		            $sth->bindParam(':uti_ville',$uti_ville);
		            $sth->bindParam(':uti_rue',$uti_rue);
		            $sth->bindParam(':uti_num_carte',$uti_num_carte);
		            $sth->bindParam(':uti_expiration_carte',$uti_expiration_carte);
		            $sth->bindParam(':uti_checksum_carte',$uti_checksum_carte);
		            $sth->execute();

		            session_start();
					// Ecriture d'une nouvelle valeur dans le tableau de session
					$_SESSION['id'] = $uti_mail;
					$_SESSION['pass'] = $uti_mdp;
					$_SESSION['connect']= 'true';
		           	//On renvoie l'utilisateur vers la page d'acceuil					
					header('Location: connexion.php');
					exit();
		        }
		        catch(PDOException $e){
		            echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
		        }
   			?>
		</h1>
	</body>
</html>