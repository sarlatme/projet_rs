<!DOCTYPE html>
<html lang="fr">
	<head>
    	<title>RS WEBSITE</title> 	<!-- Titre -->
		<link rel="icon" type="image/png" href="image/logo.png" /> <!-- Logo -->
    	<meta charset="utf-8"/>
	</head>
	<?php
    	session_start();
	?>
	<body>
		    <?php
		        $serveur = "localhost";
		        $dbname = "projet_rs";
		        $user = "root";
		        $pass = "";

            $prd_num = $_POST["historique"];


		        try{
		            //On se connecte à la BDD
		            $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
		            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                print_r($prd_num);
                $sth = $dbco->prepare('DELETE FROM produit WHERE prd_num = "'.$prd_num.'"');
                $sth->execute();

                $count = $sth->rowCount();

		            header('Location: ../include/historique.php');
					exit();
		        }
		        catch(PDOException $e){
		            echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
		        }
   			?>
		</h1>
	</body>
</html>
