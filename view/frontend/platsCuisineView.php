<?php $title = 'Bienvenue à la Poissonnerie du Port Chez Elise' ?>
<?php $description = 'Bienvenue à la poissonnerie du port Chez Élise. Élise vous accueille dans sa poissonnerie située à Lanton sur le port de Cassy, au cœur du bassin d\'Arcachon' ?>
<?php $keywords = 'Poissonnerie du Port Chez Elise' ?>
<?php $pageTitle = 'Plats Cuisinés' ?>

<?php ob_start(); ?>

<?php require('view/frontend/templates/headerSecondary.php'); ?>

			<div id="colorlib-contact">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
							<span class="icon"><i class="flaticon-cutlery"></i></span>
							<h2>Pas le temps de cuisiner ? Choisissez parmi nos plats cuisinés maison. Tous les jours, un large choix !</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 animate-box">
							<div class="dish-wrap">
								<div class="wrap">
									<div class="dish-img" style="background-image: url(public/images/salade-de-morue.jpg);"></div>
									<div class="desc">
										<h2><a href="#">BRANDADE ET SALADE DE MORUE</a></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 animate-box">
							<div class="dish-wrap">
								<div class="wrap">
									<div class="dish-img" style="background-image: url(public/images/paella.jpg);"></div>
									<div class="desc">
										<h2><a href="#">PAELLA DE LA MER</a></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 animate-box">
							<div class="dish-wrap">
								<div class="wrap">
									<div class="dish-img" style="background-image: url(public/images/saumon.jpg);"></div>
									<div class="desc">
										<h2><a href="#">SAUMON GRAVLAX</a></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 animate-box">
							<div class="dish-wrap">
								<div class="wrap">
									<div class="dish-img" style="background-image: url(public/images/fish-soup.jpg);"></div>
									<div class="desc">
										<h2><a href="#">SOUPE DE POISSON</a></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 animate-box">
							<div class="dish-wrap">
								<div class="wrap">
									<div class="dish-img" style="background-image: url(public/images/zarzuela.jpg);"></div>
									<div class="desc">
										<h2><a href="#">ZARZUELA</a></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 animate-box">
							<div class="dish-wrap">
								<div class="wrap">
									<div class="dish-img" style="background-image: url(public/images/morue-catalane.jpg);"></div>
									<div class="desc">
										<h2><a href="#">MORUE À LA CATALANE</a></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 animate-box">
							<div class="dish-wrap">
								<div class="wrap">
									<div class="dish-img" style="background-image: url(public/images/curry-poisson.jpg);"></div>
									<div class="desc">
										<h2><a href="#">CURRY DE POISSON</a></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 animate-box">
							<div class="dish-wrap">
								<div class="wrap">
									<div class="dish-img" style="background-image: url(public/images/burger.jpg);"></div>
									<div class="desc">
										<h2><a href="#">BURGER DU BASSIN</a></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 animate-box">
							<div class="dish-wrap">
								<div class="wrap">
									<div class="dish-img" style="background-image: url(public/images/salade-de-moule.jpg);"></div>
									<div class="desc">
										<h2><a href="#">MOULES MARINIERES</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1 animate-box intro-heading">
							<blockquote>
								<h4>Nous varions notre gamme de plats cuisinés chaque semaine.</h4>
									<hr>
								<h4>Certains produits ne sont pas fait maison comme les anchois marinés, les accras de morue, la salade d’écrevisse, mais ce sont égalements des produits artisanaux et de qualité.</h4>
									<hr>
								<h4>Nous avons l’objectif de continuer à développer et étendre notre gamme traiteur afin de répondre à la demande croissante de la clientèle.</h4>
									<hr>
								<h4>Envie d’un plat cuisiné spécifique ? Besoin de nos services traiteur pour une réception ?</h4>
									<br>
								<h4><a href="index.php?page=contact">N'hésitez pas à nous contacter</a></h4>
							</blockquote>
						</div>
					</div>
				</div>
			</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/templates/template.php'); ?>