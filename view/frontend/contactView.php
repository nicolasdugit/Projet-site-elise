<?php $title = 'Bienvenue à la Poissonnerie du Port Chez Elise' ?>
<?php $description = 'Bienvenue à la poissonnerie du port Chez Élise. Élise vous accueille dans sa poissonnerie située à Lanton sur le port de Cassy, au cœur du bassin d\'Arcachon' ?>
<?php $keywords = 'Poissonnerie du Port Chez Elise' ?>
<?php $pageTitle = 'Nous Contacter' ?>
<?php ob_start(); ?>
<?php require('view/frontend/templates/headerSecondary.php'); ?>

<?php include('view/frontend/templates/contactBar.php'); ?>



			<div id="colorlib-contact">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
							<h2>La poissonnerie du port "Chez Elise" vous accueille toute l'année sur le port de Cassy. </h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-md-offset-0">
							<div class="row">
								<div class="col-md-4 animate-box">
									<h3>Notre adresse</h3>
									<ul class="contact-info">
										<li><span><i class="icon-map5"></i></span>12 rue du Port de Cassy 33138 Lanton, Aquitaine, France</li>
										<li><span><i class="icon-phone4"></i></span>05 57 70 70 49</li>
										<li><span><i class="icon-envelope2"></i></span><a href="#">elise@poissonnerieduport.fr</a></li>
										<li><span><i class="icon-globe3"></i></span><a href="index.php">www.poissonnerieduport.fr</a></li>
									</ul>
								</div>
								<div class="col-md-7 col-md-push-1 animate-box">
									<div class="row">
										<form action="index.php?action=sentMail" method="post">
											<div class="col-md-6">
												<div class="form-group">
													<input name="subject" type="text" class="form-control" placeholder="Sujet">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="content" class="form-control" cols="30" rows="7" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input name="name" type="text" class="form-control" placeholder="Votre nom">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input name="mail" type="text" class="form-control" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Envoyer" class="btn btn-primary">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- mapbox -->
				<div id='map' style="height: 600px !important;"  class="colorlib-map"></div>
				<script src="public/js/mapbox.js"></script>
			</div>
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/templates/template.php'); ?>