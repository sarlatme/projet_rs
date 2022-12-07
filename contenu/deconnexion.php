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
			
			header('Location: ../index.php'); //renvoie a la page d'acceuil'
			exit();
		?>
	</body>
</html>