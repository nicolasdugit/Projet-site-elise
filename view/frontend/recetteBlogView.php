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
				<h2><?= htmlspecialchars($recette['recette_title']) ?></h2>
				<p><?= htmlspecialchars($recette['recette_subtitle']) ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="about-img rounded" style="background-image: url(<?= $recette['recette_img'] ?>);"></div>
			</div>
		</div>
		<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
			<span class="icon"><i class="fas fa-fish"></i></span>
		</div>

		<div class="row">
			<div class="col-md-9 animate-box">
				<h3 class="text-center"><?= htmlspecialchars($recette['recette_title']) ?></h3>
				<h4>Temps de préparation :</h4>
				<p><?= htmlspecialchars($recette['recette_time']) ?> min</p>
				<h4>Nombre de portions :</h4>
				<p><?= htmlspecialchars($recette['recette_portion']) ?> personnes</p>
				<h4>Ingrédients :</h4>
				<h4>Instructions :</h4>
				<p><?= ($recette['recette_instruction']) ?></p>
			</div>
			<div class="col-md-3 animate-box">
				<h3 class="text-center">Autre recettes :</h3>
				<?php foreach (array_slice($recettes, 0, 5) as $recette) : ?>
					<h4><a href="index.php?page=uneRecette&amp;recetteId=<?= $recette['id'] ?>"><?= htmlspecialchars($recette['recette_title']) ?></a></h4>
				<?php endforeach ; ?>
			</div>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/templates/template.php'); ?>