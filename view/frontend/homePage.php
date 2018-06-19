<?php $title = 'Bienvenue à la Poissonnerie du Port Chez Elise' ?>


<?php ob_start(); ?>
	<?php include('view/frontend/templates/headerMain.php'); ?>
	

<?php $content = ob_get_clean(); ?>



<?php require('view/frontend/templates/template.php'); ?>