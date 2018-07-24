<?php $title = 'PAGE ADMIN -- Poissonnerie du Port Chez Elise'; ?>

<?php ob_start(); ?>
	<?php
	require('view/templates/leftSideBar.php');
	require('view/templates/topBar.php');
	?>
	<div class="right_col" role="main">
		<div class="">
			<?php require('view/templates/widgetTiles.php'); ?>
			<?php require('view/templates/widgetMail.php'); ?>
		</div>
	</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/templates/templateAdmin.php'); ?>