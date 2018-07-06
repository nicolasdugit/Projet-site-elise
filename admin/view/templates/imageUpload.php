 <!-- page content -->
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Uploader une Image </h3>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Dropzone. Glissez déposez une image dans la dropzone.</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<p>Vous ne pouvez déposer que 2 images en meme temps. Les images seront stocker dans un serveur mais pas affichées en ligne.</p>
						<form action="php/upload.php" class="dropzone" id="dropzoneElement">
							
						</form>
						<button class="btn btn-success" id="btnUpload">Télécharger</button>
						<input type="hidden" id="namePhotos">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /page content -->