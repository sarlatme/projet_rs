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
		<form action = "../contenu/connexion.php" method="POST"> <!-- formulaire relatif a la connexion de l'utilisateur  -->
			<div class="content" id="content1" data-stellar-background-ratio="0.5">
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
								<h3 >Connexion</h3>
							</a>
						</header>
					</div>
					<h2>
					<div>
						<h1>
							<div>
								<label for="mail">E-mail</label>
							</div>
							<input type="email" id="mail" name="uti_mail"placeholder="Moulin-Jean@gmail.com" maxlength="50" required pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
						</h1>
					</div>
					<div>
						<h1>
							<div>
								<label for="name">Mot de passe</label>
							</div>
							<input type="password" id="name" name="uti_mdp"placeholder="Rx!34zm7Xl?" maxlength="20" required pattern="[ A-Za-zÀ-ÿ0-9._!?+-',]{3,20}">
						</h1>
					</div>
					<div>
						<h1>
							<div class="button">		
			       				<button type="submit">Se connecter</button>
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