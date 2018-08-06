<?php $title = 'PAGE ADIMN -Selectionner une image- Poissonnerie du Port Chez Elise'; ?>
<?php ob_start(); ?>
	
<?php
	require('view/templates/leftSideBar.php');
	require('view/templates/topBar.php');
?>
	
	<div class="right_col" role="main">
		<a href="index.php?page=uploadImage">
			<div class="tile-stats">
				<br>
				<div class="icon"><i class="fa fa-image"></i></div>
					<h3>Uploader une <br>image</h3>
				<br>
			</div>
		</a>
<?php foreach ($images as $image) : ?>
		<div class="col-md-4">
			<div onclick="infoImage(this)" id="<?= $image['image_name'] ?>" class="img-thumbnail" style="background-image: url(' ../<?= $image['image_name'] ?> '); background-size: 100%; background-position: center; width: 100%; height: 200px;">
			</div>
		</div>
<?php endforeach ?>
	</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/templates/templateAdmin.php'); ?>