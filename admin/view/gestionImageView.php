<?php $title = 'PAGE ADIMN -Gestion Image- Poissonnerie du Port Chez Elise'; ?>
<?php ob_start(); ?>
	
	<?php
	require('view/templates/leftSideBar.php');
	require('view/templates/topBar.php');
	?>
	
	<div class="right_col" role="main">
		<div class="">
			<div class="page-title">
				<div class="title_left">
					<h3>Gestion des images</h3>
				</div>
			</div>

			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2 class="collapse-link">Voir les images<small> en base de donnée</small></h2>
							<ul class="nav navbar-right panel_toolbox ">
								<li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content" style="display: none;">
							<?php foreach ($images as $image) : ?>
							<div class="col-md-4 col-sm-6">
								<img id="<?= $image['image_name'] ?>" src="../<?= $image['image_name'] ?>" alt="" style="width: 100%; margin-bottom: 10px;" >
							</div>
							 <?php endforeach ?>
						</div>
					</div>
					<div class="x_panel">
						<div class="x_title">
							<h2 class="collapse-link">Uploader une image<small> en base de donnée</small></h2>
							<ul class="nav navbar-right panel_toolbox ">
								<li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content" style="display: none;">
							<a href="index.php?page=uploadImage">Uploader une image</a>
						</div>
					</div>
					<div class="x_panel">
						<div class="x_title">
							<h2 class="collapse-link">Supprimer une image<small> de la base de donnée</small></h2>
							<ul class="nav navbar-right panel_toolbox ">
								<li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content" style="display: none;">
							<h2 class="btn-danger" style="padding: 10px; text-align: center;">Attention à ne pas supprimer une image utilisée sur le site !</h2>
							<br>
							<?php foreach ($images as $image) : ?>
							<div class="col-md-4">
								<a href="index.php?action=deleteImage&amp;imageId=<?= $image['id'] ?>" class="img-thumbnail" style="background-image: url(' ../<?= $image['image_name'] ?> '); background-size: 100%; background-position: center; width: 100%; height: 200px;"><?= $image['id'] ?> 
								</a>
							</div>
							 <?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>    

<?php $content = ob_get_clean(); ?>

<?php require('view/templates/templateAdmin.php'); ?>