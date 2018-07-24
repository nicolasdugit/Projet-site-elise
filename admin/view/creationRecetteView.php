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
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<form method="post" action="index.php?action=publishRecette">
								<div class="col-md-4">
									<div class="form-horizontal form-label-left">
										<div class="form-group col-md-12">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="recette-title" > Titre de la recette <span class="required">*</span></label>
											<div class="col-md-9 col-sm-9 col-xs-12">
												<input class="form-control" type="text" id="recette_title" name="recette_title" required="required">
											</div>
										</div>
										<div class="form-group col-md-12">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="recette-subtitle"> Soustitre de la recette <span class="required">*</span></label>
											<div class="col-md-9 col-sm-9 col-xs-12">
												<input class="form-control" type="text" id="recette_subtitle" name="recette_subtitle" required="required">
											</div>
										</div>
										<div class="form-group col-md-12">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="recette-time"> Temps de préparation <span class="required">*</span></label>
											<div class="col-md-9 col-sm-9 col-xs-12">
												<input class="form-control" type="text" id="recette_time" name="recette_time" required="required">
											</div>
										</div>
										<div class="form-group col-md-12">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="recette-portion"> Nombre de portion <span class="required">*</span></label>
											<div class="col-md-9 col-sm-9 col-xs-12">
												<input class="form-control" type="text" id="recette_portion" name="recette_portion" required="required">
											</div>
										</div>
										<div class="form-group col-md-12">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="recette-author"> Auteur de la recette <span class="required">*</span></label>
											<div class="col-md-9 col-sm-9 col-xs-12">
												<input class="form-control" type="text" id="recette_author" name="recette_author" required="required">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-8">
									<div class="col-md-12">
									<?php if (isset($_GET['id'])) : ?>
										<div class="col-md-6">
											<input type="hidden" id="recette_image" name="recette_image" value="<?= $_GET['id'] ?>" required>
											<img class="img-thumbnail" style="height: auto; width: auto;" src="../<?= $_GET['id'] ?>" alt="image">
										</div>
									<?php endif ; ?>
										<div class="col-md-6">
											<a href="index.php?page=showImage">
												<div class="tile-stats">
													<br>
													<div class="icon"><i class="fa fa-image"></i></div>
														<h3>Selectionner une <br>image</h3>
													<br>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label for="">Etapes de la recette :</label>
										<div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
											<div class="btn-group">
												<a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
												<a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
												<a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
												<a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
											</div>
											<div class="btn-group">
												<a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
												<a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
												<a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
												<a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
											</div>
											<div class="btn-group">
												<a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
												<a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
												<a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
												<a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
											</div>
											<div class="btn-group">
												<a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
												<a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
											</div>
										</div>
										<div class="editor-wrapper" id="editor-one"></div>
										<div class="ln_solid"></div> 
										<input type="hidden" id="recette_instruction" name="recette_instruction" required>
									</div>
									<div class="col-md-6">
										<input class="btn btn-success" type="submit" id="recetteForm" value="Envoyer">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>    

<?php $content = ob_get_clean(); ?>

<?php require('view/templates/templateAdmin.php'); ?>