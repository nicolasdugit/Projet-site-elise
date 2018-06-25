<?php $title = 'PAGE ADIMN -- Poissonnerie du Port Chez Elise'; ?>

<?php ob_start(); ?>
	<?php require('view/templates/widgetMail.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('view/templates/templateAdmin.php'); ?>