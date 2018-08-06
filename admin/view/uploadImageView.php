<?php $title = 'PAGE ADIMN -Uploader une image- Poissonnerie du Port Chez Elise'; ?>
<?php ob_start(); ?>
	
<?php
	require('view/templates/leftSideBar.php');
	require('view/templates/topBar.php');
?>
	
	<div class="right_col" role="main">
		<?php include('view/templates/imageUpload.php') ?>
	</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/templates/templateAdmin.php'); ?>