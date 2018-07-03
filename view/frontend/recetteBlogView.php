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
				<h2>Seiche à la tomate</h2>
				<p>Spécialité du bassin !</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<h4>Seiche à la tomate</h4>
			</div>
			<div class="col-md-4">
				<h3>Autres Recettes</h3>
				<article class="article-entry">
					<a href="index.php?page=uneRecette" class="blog-img" style="background-image: url(public/images/blog-1.jpg);"></a>
					<div class="desc">
						<p class="admin"><span>Ecrit par :</span> <span>Elise</span></p>
						<h2><a href="index.php?page=uneRecette">Seiche à la tomate</a></h2>
						<p>Spécialité du bassin !</p>
					</div>
				</article>
				<article class="article-entry">
					<a href="index.php?page=uneRecette" class="blog-img" style="background-image: url(public/images/blog-2.jpg);"></a>
					<div class="desc">
						<p class="admin"><span>Ecrit par :</span> <span>Elise</span></p>
						<h2><a href="index.php?page=uneRecette">Seiche à la tomate</a></h2>
						<p>Spécialité du bassin !</p>
					</div>
				</article>
			</div>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/templates/template.php'); ?>