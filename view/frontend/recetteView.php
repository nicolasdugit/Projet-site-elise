<?php $title = 'Bienvenue à la Poissonnerie du Port Chez Elise' ?>
<?php $description = 'Bienvenue à la poissonnerie du port Chez Élise. Élise vous accueille dans sa poissonnerie située à Lanton sur le port de Cassy, au cœur du bassin d\'Arcachon' ?>
<?php $keywords = 'Poissonnerie du Port Chez Elise' ?>
<?php $pageTitle = 'Les recettes d\'Élise' ?>

<?php ob_start(); ?>

<?php require('view/frontend/templates/headerSecondary.php'); ?>

<div id="colorlib-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
				<span class="icon"><i class="flaticon-cutlery"></i></span>
				<h2>Découvrez régulièrement ici les recettes d'Elise. Quelques idées simples pour déguster les produits du bassin.</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<article class="article-entry">
					<a href="index.php" class="blog-img" style="background-image: url(public/images/blog-1.jpg);"></a>
					<div class="desc">
						<!-- <p class="meta"><span class="day">7</span><span class="month">May</span></p> -->
						<p class="admin"><span>Ecrit par :</span> <span>Elise</span></p>
						<h2><a href="index.php">Seiche à la tomate</a></h2>
						<p>Spécialité du bassin !</p>
					</div>
				</article>
			</div>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/templates/template.php'); ?>