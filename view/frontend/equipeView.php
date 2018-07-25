<?php $title = 'Bienvenue à la Poissonnerie du Port Chez Elise' ?>
<?php $description = 'Bienvenue à la poissonnerie du port Chez Élise. Élise vous accueille dans sa poissonnerie située à Lanton sur le port de Cassy, au cœur du bassin d\'Arcachon' ?>
<?php $keywords = 'Poissonnerie du Port Chez Elise' ?>
<?php $pageTitle = 'Notre Equipe' ?>

<?php ob_start(); ?>

<?php require('view/frontend/templates/headerSecondary.php'); ?>

			<div id="colorlib-contact">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
							<h2>A la Poissonnerie, Elise est épaulée par deux professionnels</h2>	
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 text-center animate-box">
							<div class="chef-wrap">
								<div class="chef-img" style="background-image: url(public/images/chef-1.jpg);"></div>
								<div class="desc">
									<h3>Elise</h3>
									<span>Après des études de Biologie Marine, Élise s'installe sur le Bassin en 2008 et commence par travailler sur le port et la criée d'Arcachon, en contact notamment avec les pêcheurs. Elle y découvre le métier de marin pêcheur, ses réalités, les différentes espèces locales, les techniques de pêche, le fonctionnement de la filière marée ... C'est là aussi qu'elle rencontre son mari, Christophe Michaud, pêcheur passionné du Bassin, à bord de son bateau, le KIKI III.</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="chef-wrap">
								<div class="chef-img" style="background-image: url(public/images/chef-2.jpg);"></div>
								<div class="desc">
									<h3>Estelle</h3>
									<span>Estelle est arrivée en juin 2014, après un apprentissage en poissonnerie. Elle s’occupe, entre autres, de monter <a href="index.php?page=notreBanc">le banc de poisson</a> tous les matins, du service des clients, de la préparation des plateaux de fruits de mer, des marinades de poissons, … Dynamique, volontaire, passionnée, elle toujours envie de se perfectionner.</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="chef-wrap">
								<div class="chef-img" style="background-image: url(public/images/chef-4.jpg);"></div>
								<div class="desc">
									<h3>Pierre</h3>
									<span>Pierre, arrivé en remplacement en 2015, fait dorénavant partie de l’équipe. Il a occupé auparavant de nombreux postes : cuisinier, ostréiculteur, poissonnier, et a su apporter son expérience au service de la poissonnerie. Il s’occupe principalement de la <a href="index.php?page=platCuisine">partie traiteur</a> (c’est un fin cuisinier … et blagueur) mais aussi du service des clients et préparation des plateaux de fruits de mer.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
							<blockquote>
								<h4>A la Poissonnerie, l’esprit d’équipe est très important. Ici, on travaille dans la joie et la bonne humeur. Toute l’équipe est à votre disposition pour vous servir et vous conseiller tout au long de l’année.</h4>
							</blockquote>
						</div>
					</div>
					<div class="row">
						<span>En Décembre 2010, Elise reprend la Poissonnerie de Cassy avec l'envie de faire partager sa passion pour le monde marin, la pêche et les produits de la mer. Ses mots d’ordre sont :</span>
						<ul>
							<li>être au service et à l’écoute du client, le conseiller au mieux</li>
							<li>proposer des produits de qualité, locaux dans la mesure du possible</li>
							<li>être transparente sur l’origine des produits</li>
						</ul>
						<span>Le métier de poissonnier est difficile et exigeant qui demande de la rigueur et du professionnalisme à chaque instant mais il est aussi très passionnant de par la noblesse et la diversité des produits travaillés, la relation de confiance qui s’établit avec les clients et également les partenaires de la filière, les petits coups de stress au moment de la saison ou des fêtes de Noël mais la satisfaction aussi après du travail accompli.</span>
					</div>
				</div>
			</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/templates/template.php'); ?>