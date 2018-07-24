<?php $title = 'PAGE ADIMN -Création Recette- Poissonnerie du Port Chez Elise'; ?>
<?php ob_start(); ?>
	
	<?php
	require('view/templates/leftSideBar.php');
	require('view/templates/topBar.php');
	?>
	
	<div class="right_col" role="main">
		<div class="">
			<div class="page-title">
				<div class="title_left">
					<h3>Editeur de Recettes</h3>
				</div>

				<div class="title_right">
					<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search for...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2 class="collapse-link">Creer une nouvelle recette<small>publication en ligne</small></h2>
							<ul class="nav navbar-right panel_toolbox ">
								<li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content" style="display: none;">
							<form method="post" action="index.php?page=creationRecette">
								<div class="col-md-12">
										<div class="form-group col-md-12">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="recette-title"> Titre de la recette <span class="required">*</span></label>
												<input class="form-control" type="text" id="recette_title" name="recette_title" required="required">
										</div>
								</div>
								<input class="btn-success" type="submit" value="Creer">	
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2 class="collapse-link">Modifier /Supprimer une Recette<small>Editer une recette existante</small></h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content" style="display: none;">
							<?php foreach ($recettes as $recette) : ?>
								<a href="index.php?page=editRecette&amp;id=<?= $recette['id'] ?> ">
									<h1><?= $recette['recette_title'] ?><?= $recette['id'] ?></h1>
								</a>
							<?php endforeach ; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>    

<?php $content = ob_get_clean(); ?>

<?php require('view/templates/templateAdmin.php'); ?>