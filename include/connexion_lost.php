<!DOCTYPE html>
<html lang="fr">
	<head>
    	<title>RS WEBSITE</title> 	<!-- Titre -->
		<link rel="icon" type="image/png" href="image/logo.png" /> <!-- Logo -->

    	<meta charset="utf-8"/>

    	<link rel="stylesheet" type="text/css" href="../style/bas.css"/> 	<!-- Reference fichier .css -->
    	<script src="../js/jquery-1.10.1.js"></script> 	<!-- Importation d'un module JavaScript Jquery -->
		<script src="../js/jquery.stellar.min.js"></script> 	<!-- Importation d'un sous-module de Jquery "Effet Parralax" -->

	</head>
	<body>
		<div class="content" id="backgroundConnexionLost" data-stellar-background-ratio="0.5">
			<div class="content">
				<div class="content" id="form">
				<!-- script en java qui garde la cette page active pendant 5 secondes avant de rediriger l'utilisateur -->
				<script>
					setTimeout(function(){
					window.location.href = 'formulaire_connexion.php';
					}, 5000);
				</script>
				<div>
					<header>
						<h1>Identifiant ou mot de passe incorrect</h1>
						<p class="loader"></p>
					</header>
				</div>
				</div>
				<footer>
					<p>
						Copyright &copy; Riviere Thibaut & Sarlat Meven
					</p>
					<p>
						2020 - 2022 | All Right Reserved.
					</p>
				</footer>
			</div>
			</div>

		 	<!-- Script Java qui lance l'effet "Parralax" -->
			<script type="text/javascript">
				$('body').stellar({
					horizontalScrolling: false,
					responsive: true
				});
			</script>
	</body>
</html>
