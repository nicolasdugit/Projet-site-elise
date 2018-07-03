<?php $title = 'Bienvenue à la Poissonnerie du Port Chez Elise' ?>
<?php $description = 'Bienvenue à la poissonnerie du port Chez Élise. Élise vous accueille dans sa poissonnerie située à Lanton sur le port de Cassy, au cœur du bassin d\'Arcachon' ?>
<?php $keywords = 'Poissonnerie du Port Chez Elise' ?>


	
<?php ob_start(); ?>
<!-- header -->
	<?php include('view/frontend/templates/headerMain.php'); ?>
<!-- AboutUs -->
	<?php include('view/frontend/templates/aboutUs.php'); ?>
<!-- Nos Produits -->
	<?php 
		$titleSpe = 'Nos Produits' ;
		$descriptionSpe	 = 'Retrouvez un large choix de produits de la mer';
		$imgSpe1 = 'public/images/banc.jpg' ;
		$imgSpe1Desc = 'Sur le Banc';
		$linkSpe1 = "notreBanc";

		$imgSpe2 = 'public/images/plats-cuisinés.jpg' ;
		$imgSpe2Desc = 'Plats Cuisinés';
		$linkSpe2 = "platCuisine";

		$imgSpe3 = 'public/images/nos-plateaux.jpg' ;
		$imgSpe3Desc = 'Les Plateaux';
		$linkSpe3 = "nosPlateaux";

		include('view/frontend/templates/specialities.php');
	?>
<!-- Video -->
	<?php include('view/frontend/templates/video.php'); ?>

<!-- testimonies -->
	<?php include('view/frontend/templates/testimonies.php'); ?>

<?php $content = ob_get_clean(); ?>



<?php require('view/frontend/templates/template.php'); ?>