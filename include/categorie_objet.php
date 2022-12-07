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
	<body >
		<div class="content" id="backgroundObjet" data-stellar-background-ratio="0.5">
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
							</ul>
						</nav>
						<h1>Nos différentes catégories</h1>
					</header>
				</div>
				<div id="contenu">
					<table>
						<thead>
							<tr>
								<th> Catégories </th>
								<th> Les objets </th>
							</tr>
						</thead>
						<tbody>
						<?php
							require_once('../contenu/mypdo.class.php');
							$vpdo = new mypdo (); //initialise la classe
							$db = $vpdo->connexion; //ouvrir la connexion
							$result = $vpdo->listeObjet();
							$lien = null;
							if($result) {
								while($row = $result->fetch ( PDO::FETCH_OBJ)) { //tant qu'une ligne de resultat est retourné on reste dans le while
								switch($row->cat_libelle){
									case "Vehicules":
										echo '<tr><td>Véhicules</td><td><a href="objet_vehicule.php">voir</a></td></tr>';
										break;
									case "Peintures":
										echo '<tr><td>Peintures</td><td><a href="objet_peinture.php">voir</a></td></tr>';
										break;
									case "Jardinage":
										echo '<tr><td>Jardinage</td><td><a href="objet_jardinage.php">voir</a></td></tr>';
										break;
									case "Bricolage":
										echo '<tr><td>Bricolage</td><td><a href="objet_bricolage.php">voir</a></td></tr>';
										break;
									case "Autres":
										echo '<tr><td>Autres</td><td><a href="objet_autres.php">voir</a></td></tr>';
										break;
									default:
										break;
								}
							}
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
