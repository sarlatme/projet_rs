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
		<form action = "../contenu/addclient.php" method="POST"> <!-- formulaire relatif a l'inscription de l'utilisateur -->
			<div class="content" id="content3" data-stellar-background-ratio="0.5">
				<div class="content">
					<div class="content" id="form">
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
							<a href="">
								<h3 >Inscription</h3>
							</a>
						</header>
					</div>
					<h2>
					<div>
						<h1>
							<div>
								<label>E-mail<span style="color: red;">  *</span></label>
							</div>
							<input type="email" name="uti_mail"placeholder="Moulin-Jean@gmail.com" maxlength="50" required pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
							<!-- permet d'encadrer l'utilisateur pour qu'il respecte la mise en forme  -->
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label>Mot de passe<span style="color: red;">  *</span></label>
							</div>
							<input type="password" name="uti_mdp"placeholder="Rx!34zm7Xl?" maxlength="20"  required pattern="[ A-Za-zÀ-ÿ0-9._!?+-',]{3,20}">
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label>Nom<span style="color: red;">  *</span></label>
							</div>
							<input type="text" name="uti_nom" placeholder="Moulin" maxlength="36" required pattern="[ A-Za-zÀ-ÿ_-',]{1,36}">
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label>Prénom<span style="color: red;">  *</span></label>
							</div>
							<input type="text" name="uti_prenom"placeholder="Jean" maxlength="36" required pattern="[ A-Za-zÀ-ÿ_-',]{1,36}">
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label>Téléphone<span style="color: red;">  *</span></label>
							</div>
							<input type="text" name="uti_telephone" placeholder="0684938757" maxlength="10" required pattern="[0-9]{10}">
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label>Rue<span style="color: red;">  *</span></label>
							</div>
							<input type="text" name="uti_rue" placeholder="10 Boulevard Jean Jeanneteau" maxlength="64" required pattern="[ A-Za-zÀ-ÿ0-9_-',]{6,64}">
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label>Code Postal<span style="color: red;">  *</span></label>
							</div>
							<input type="text" name="uti_code_postal"placeholder="49100" maxlength="5" required pattern="[0-9]{5}">
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label>Ville<span style="color: red;">  *</span></label>
							</div>
							<input type="text" name="uti_ville" placeholder="Angers" maxlength="64" required pattern="[ A-Za-zÀ-ÿ_-',]{1,64}">
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label>Numéro de carte<span style="color: red;">  *</span></label>
							</div>
							<input type="text" name="uti_num_carte" placeholder="1234123412341234" maxlength="16" required pattern="[0-9]{16}">
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label>Date d'expiration<span style="color: red;">  *</span></label>
							</div>
							<input type="date" name="uti_expiration_carte" placeholder="jj/mm/aaaa" required>
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label>Numéro de sécurité<span style="color: red;">  *</span></label>
							</div>
							<input type="text" name="uti_checksum_carte" placeholder="123" maxlength="3" required pattern="[0-9]{3}">
						</h1>
					</div>
					<div>
						<h1>
							<div class="button"> <!-- permet d'envoyer les information -->
			       				<button type="submit">S'enregistrer</button>
			    			</div>
			    		</h1>
					</div>
				</h2>
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