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
    <form action = "../contenu/supprimer_objet.php" method="POST">
		<div class="content" id="background_historique" data-stellar-background-ratio="0.5">
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
						<h1>Vos objets mis en location</h1>
					</header>
				</div>
				<div id="contenu">
					<table>
						<tbody>
						<?php
							require_once('../contenu/mypdo.class.php');
							$vpdo = new mypdo (); //initialise la classe
							$db = $vpdo->connexion; //ouvrir la connexion
							$result = $vpdo->listeObjetUti();
							if($result && $row = $result->fetch ( PDO::FETCH_OBJ) ) {
								$ok = 'true';
								echo '<tr>
								<th> Libelle </th>
								<th> Description </th>
								<th> Etat </th>
								<th> Prix/jour </th>
								<th> Caution </th>
								</tr>';
								do { //tant qu'une ligne de resultat est retourné on reste dans le while
									echo '<tr><td>'.$row->prd_libelle.'</td><td>'.$row->prd_description.'</td><td>'.$row->prd_etat.'</td><td>'.$row->prd_prix_jour.' €/Jour</td><td>'.$row->prd_prix_caution.' €</td></tr>';
								} while($row = $result->fetch ( PDO::FETCH_OBJ));
							}
							else {
								$ok = 'false';
								echo '<h2> Vous avez aucun objet mis en location! </h2>';
							}
						?>
						</tbody>
					</table>
				</div>
				<?php
				if($ok == 'true') {
					echo '<h6>
						<div>
							<h5>
								<div>
									<label >Produit à supprimer<span style="color: red;">  *</span></label>
								</div>
								<select id="select" size="1" name="historique">';
								require_once('../contenu/mypdo.class.php');
								$vpdo = new mypdo (); //initialise la classe
								$db = $vpdo->connexion; //ouvrir la connexion
								$result = $vpdo->listeObjetUti();
								if($result && $row = $result->fetch ( PDO::FETCH_OBJ) ) {
									do {
									echo '<option value="'.$row->prd_num.'"> '.$row->prd_libelle.'</option>';
									} while($row = $result->fetch ( PDO::FETCH_OBJ));
								}
								else {
									echo '<h2> Vous avez aucun objet mis en location! </h2>';
								}


								echo '</select>
							</h5>
						</div>
						<div class="button">
								<button type="submit">Supprimer</button>
						</div>
						</h6>';
				}
				?>
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
		</form>
	</body>
</html>
