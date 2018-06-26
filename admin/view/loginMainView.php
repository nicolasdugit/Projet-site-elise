<?php $title = 'PAGE ADIMN -- Poissonnerie du Port Chez Elise'; ?>

<?php ob_start(); ?>

<div>
	<div class="login_wrapper">
		<div class="animate form login_form">
			<section class="login_content">
				<form action="">
					<h1>Connexion administration</h1>
					<div>
						<input type="text" class="form-control" placeholder="Username" required="" />
					</div>
					<div>
						<input type="password" class="form-control" placeholder="Password" required="" />
					</div>
					<div>
						<a class="btn btn-default submit" href="index.html">Connexion</a>
					</div>
					<div class="clearfix"></div>
					<div class="separator">
						<div class="clearfix"></div>
						<br />
						<div>
							<h1><i class="fa fa-paw"></i> Poissonnerie du Port Chez Elise</h1>
							<p>©2018 All Rights Reserved. Poissonnerie du Port Chez Elise</p>
						</div>
					</div>
				</form>
			</section>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/templates/templateLogin.php'); ?>