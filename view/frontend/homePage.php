<?php $title = 'Bienvenue à la Poissonnerie du Port Chez Elise' ?>
<?php $description = 'Bienvenue à la poissonnerie du port Chez Élise. Élise vous accueille dans sa poissonnerie située à Lanton sur le port de Cassy, au cœur du bassin d\'Arcachon' ?>
<?php $keywords = 'Poissonnerie du Port Chez Elise' ?>

<?php ob_start(); ?>
	<?php include('view/frontend/templates/headerMain.php'); ?>
	<?php include('view/frontend/templates/aboutUs.php'); ?>

<?php $content = ob_get_clean(); ?>



<?php require('view/frontend/templates/template.php'); ?>