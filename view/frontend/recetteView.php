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
			<?php
			while ($recette = $recettes->fetch())
			{
			?>
			<div class="col-md-4">
				<article class="article-entry">
					<a href="index.php?page=uneRecette&amp;recetteId=<?= $recette['id'] ?>" class="blog-img" style="background-image: url(<?= $recette['recette_img'] ?>);"></a>
					<div class="desc">
						<p class="admin"><span>Ecrit par :</span> <span><?= htmlspecialchars($recette['recette_author']) ?></span></p>
						<h2><a href="index.php?page=uneRecette&amp;recetteId=<?= $recette['id'] ?>"><?= htmlspecialchars($recette['recette_title']) ?></a></h2>
						<p><?= htmlspecialchars($recette['recette_subtitle']) ?></p>
					</div>
				</article>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/templates/template.php'); ?>