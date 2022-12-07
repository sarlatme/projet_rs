<!DOCTYPE html>
<html lang="fr">
	<head>
    	<title>RS WEBSITE</title> 	<!-- Titre -->
		<link rel="icon" type="image/png" href="image/logo.png" /> <!-- Logo -->

    	<meta charset="utf-8"/>

    	<link rel="stylesheet" type="text/css" href="style/haut.css"/> 	<!-- Reference fichier .css -->

    	<script src="js/jquery-1.10.1.js"></script> 	<!-- Importation d'un module JavaScript Jquery -->
		<script src="js/jquery.stellar.min.js"></script> 	<!-- Importation d'un sous-module de Jquery "Effet Parralax" -->

	</head>
	<?php
    	session_start(); //Ouverture de la session
	?>
	<body>
	 	<!-- Page 1 -->
		<div class="content" id="content1" data-stellar-background-ratio="0.5"> <!-- data-stellar... permer de donner un effet suplementaire lors de la transition d'une page vers une autre -->
			<div class="content">
				<header> <!-- Menu -->
				    <nav>
				        <ul>
				            <li>
				            	<h4 id="logo">RS<span style="color: red;">.</span><h4/> <!-- Logo  -->
				            </li>
				            <li>
				                <a href='index.php'> <!-- Lien vers l'espace de Location  -->
				                    <h3 >Louer</h3>
				                </a>
				            </li>
				            <li>
				                <a href='#Location'> <!-- Lien vers l'espace de mise en location -->
				                    <h3 >Location</h3>
				                </a>
				            </li>
				            <li>
				                <a href='#Service'> <!-- Lien vers l'espace de mise en service -->
				                    <h3 >Service</h3>
				                </a>
				            </li>
				            <li>
				                <a>
				                    <h3 >&nbsp;&nbsp;&nbsp;</h3> <!-- Le padding c'est beau mais on doit montrer qu'on a suivi le cours -->
				                </a>
				            </li>
				            <?php
				                if (!isset($_SESSION['connect'])){ //permet de savoir si l'utilisateur est deja connecté est d'adpater le menu en conséquence
				                echo '<li> 
				                <a href="include/formulaire_connexion.php">
					                <h3 >Connexion</h3>
								</a>
							</li>
							<li>
				                <a>
				                    <h4 >/</h4>
				                </a>
				            </li>
				            <li>
				                <a href="include/formulaire_inscription.php">
					                <h3 >Inscription</h3>
								</a>
							</li>';
				                }
				            else {
				                echo '<li>
				                <a href="include/historique.php">
					                <h3 >'.$_SESSION["prenom"].'</h3>
								</a>
							</li>
							<li>
				                <a>
				                    <h4 >/</h4>
				                </a>
				            </li><li>
				                <a href="contenu/deconnexion.php">
					                <h3 >Deconnexion</h3>
								</a>
							</li>';
				            }
				            ?>
				        </ul>
				    </nav>
				</header> <!-- Fin du header  -->
				<h2 id="Louer">Louer</h2>
				<p>RS propose une gamme complète d'outillage et matériel à louer : préparation des sols, coupe et broyage, taille et entretien, transport, matériel dédié à l'agriculture, bricolage...
				</p>
				<?php
				if (!isset($_SESSION['connect'])){ //force l'utilisateur a se connecter avant de pouvoir acceder a la boutique
					echo '<a href="include/formulaire_connexion.php">
						<h4>
							<div class="bouton" id="petitbouton">
								Connexion
							</div>
						</h4>
					</a>';
				}
				else {
					echo '<a href="include/categorie_objet.php">
						<h4>
							<div class="bouton" id="petitbouton">
								Acceder au magasin
							</div>
						</h4>
					</a>';
				}
				?>
				</div>
			</div>
		</div>

 		<!-- Page 2 -->
		<div class="content" id="content2" data-stellar-background-ratio="0.5">
			<div class="content">
				<h1 id="Location">Location</h1>
			    <p>Déposez une annonce en toute simplicité pour mettre en location vos outils.</p>
				<?php
				if (!isset($_SESSION['connect'])){ //force l'utilisateur a se connecter avant de pouvoir acceder a la boutique
					echo '<a href="include/formulaire_connexion.php">
						<h4>
							<div class="bouton" id="petitbouton">
								Connexion
							</div>
						</h4>
					</a>';
				}
				else {
					echo '<a href="include/formulaire_location.php">
						<h4>
							<div class="bouton" id="petitbouton">
								Acceder au magasin
							</div>
						</h4>
					</a>';
				}
				?>
			</div>
		</div>

		 <!-- Page 3 -->
		<div class="content" id="content3" data-stellar-background-ratio="0.5">
			<div class="content">
				<h1 id="Service">Service</h1>
			    <p>Vous êtes assuré d'un service professionnel de qualité, de la rapidité d'intervention et du suivi des travaux (devis détaillé, conseils, respect des normes de sécurité...).</p>
				<?php
				if (!isset($_SESSION['connect'])){ //force l'utilisateur a se connecter avant de pouvoir acceder a la boutique
					echo '<a href="include/formulaire_connexion.php">
						<h4>
							<div class="bouton" id="petitbouton">
								Connexion
							</div>
						</h4>
					</a>';
				}
				else {
					echo '<a href="include/categorie_service.php">
						<h4>
							<div class="bouton" id="petitbouton">
								Acceder au magasin
							</div>
						</h4>
					</a>';
				}
				?>
			</div>
		</div>
		<div id="footer_background" data-stellar-background-ratio="0.6"> <!-- Mise en place du footer avec notre logo et notre copyright -->
			<footer>
				<p>Copyright &copy; Riviere Thibaut & Sarlat Meven</p>
				<p>2020 - 2022 | All Right Reserved.</p>
			</footer>
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
