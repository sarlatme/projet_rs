<!DOCTYPE html>
<html lang="fr">
	<head>
    	<title>RS WEBSITE</title> 	<!-- Titre -->
		<link rel="icon" type="image/png" href="image/logo.png" /> <!-- Logo -->

    	<meta charset="utf-8"/>

    	<link rel="stylesheet" type="text/css" href="../style/menu.css"/> 	<!-- Reference fichier .css -->

    	<script src="../js/jquery-1.10.1.js"></script> 	<!-- Importation d'un module JavaScript Jquery -->
		<script src="../js/jquery.stellar.min.js"></script> 	<!-- Importation d'un sous-module de Jquery "Effet Parralax" -->

	</head>
	<body>
		<form action = "../contenu/addlocation.php" method="POST"> <!-- formulaire relatif a la mise en location de produits -->
			<div class="content" id="content2" data-stellar-background-ratio="0.5">
				<div class="content">
					<div>
					<header>
						<nav>
							<ul>
								<li>
									<a href='../index.php'>
										<h4 >Menu</h4>
									</a>
								</li>
							</ul>
						</nav>
						<h3>Remplissez le formulaire pour mettre en ligne votre produit</h3>
					</header>
					</div>
					<h2>
					<div>
						<h1>
							<div>
								<label >Catégorie<span style="color: red;">  *</span></label>
							</div>
							<select id="select" size="1" name="cat_num"> 
							  <option value="1">Vehicules</option>
							  <option value="2">Peintures</option>
							  <option value="3">Jardinage</option>
							  <option value="4">Bricolage</option>
							  <option value="5">Autres</option>
							</select>
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label >Type de produit<span style="color: red;">  *</span></label>
							</div>
							<input type="text" name="prd_libelle" placeholder="Marteau" maxlength="36" required pattern="[ A-Za-zÀ-ÿ_-',]{1,36}">
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label >Description<span style="color: red;">  *</span></label>
							</div>
							<input type="text" name="prd_description" placeholder="Marteau à metaux" maxlength="36" required pattern="[ A-Za-zÀ-ÿ_-',]{1,36}">
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label >Etat<span style="color: red;">  *</span></label>
							</div>
							<select id="select" size="1" name="prd_etat">
							  <option value="Neuf">Neuf</option>
							  <option value="Tres bon">Très bon</option>
							  <option value="Bon">Bon</option>
							  <option value="Moyen">Moyen</option>
							  <option value="Mauvais">Mauvais</option>
							</select>
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label >Prix à la journée (en €)<span style="color: red;">  *</span></label>
							</div>
							<input type="text" name="prd_prix_jour"placeholder="30.4" maxlength="4" required pattern="[-+]?[0-9]+(\.[0-9]+)?([eE][-+]?[0-9]+)?">
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label >Prix de la caution (en €)<span style="color: red;">  *</span></label>
							</div>
							<input type="text" name="prd_prix_caution"placeholder="20.7" maxlength="4" required pattern="[-+]?[0-9]+(\.[0-9]+)?([eE][-+]?[0-9]+)?">
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label >Date de fin de location<span style="color: red;">  *</span></label>
							</div>
							<input type="date" id="name" name="loc_date" placeholder="jj/mm/aaaa" required>
						</h1>
					</div>
					<div>
						<h1>
							<div class="button">		
			       				<button type="submit">Mettre en ligne</button>
			    			</div>
			    		</h1>
					</div>
				</h2>
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