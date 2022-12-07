<!DOCTYPE html>
<html lang="fr">
	<head>
    	<title>RS WEBSITE</title> 	<!-- Titre -->
		<link rel="icon" type="image/png" href="image/logo.png" /> <!-- Logo -->

    	<meta charset="utf-8"/>

    	<link rel="stylesheet" type="text/css" href="../style/bas.css"/> 	<!-- Reference fichier .css -->
    	<!--<script src="../js/jquery-1.10.1.js"></script> 	<!-- Importation d'un module JavaScript Jquery -->
		<!--<script src="../js/jquery.stellar.min.js"></script> 	<!-- Importation d'un sous-module de Jquery "Effet Parralax" -->

	</head>
	<body>
		<div class="content" id="backgroundJard" data-stellar-background-ratio="0.5">
			<div class="content">
				<div class="content" id="form">
				<div>
					<header>
						<nav>
							<ul>
								<li>
									<a href='../index.php'>
										<h3 >Menu</h3>
									</a>
								</li>
								<li><h4 ></h4></li>
								<li>
									<a href='categorie_service.php'>
										<h3 >Catégories</h3>
									</a>
								</li>
							</ul>
						</nav>
						<h1>Nos professionnels en jardinage</h1>
					</header>
				</div>
				<div id="contenu">
					<table>
						<tbody>
						<thead>
						</thead>
					<?php
						require_once('../contenu/mypdo.class.php');
						$vpdo = new mypdo (); //initialise la classe
						$db = $vpdo->connexion; //ouvrir la connexion
						$result = $vpdo->listeProJard();
						if($result && $row = $result->fetch ( PDO::FETCH_OBJ) ) {
							echo '<tr>
								<th> Contacter </th>
								<th> Nom </th>
								<th> Prénom </th>
								<th> Forfait </th>
							</tr>';
							do { //tant qu'une ligne de resultat est retourné on reste dans le while
								echo '<tr><td>'.$row->emp_mail.'</td><td>'.$row->emp_nom.'</td><td>'.$row->emp_prenom.'</td><td>'.$row->emp_forfait_jour.' €/h</td></tr>';
							} while($row = $result->fetch ( PDO::FETCH_OBJ));
						}
						else {
							echo '<h2> Oups! Pour le moment aucune offre est à pourvoir </h2>';
						}
					?>
				</tbody>
				</table>
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
