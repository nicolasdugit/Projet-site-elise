
<div class="row top_tiles">
	<?php if (count($mailsNonLu) >0 ) : ?>
	<a href="index.php?page=inbox">
		<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="tile-stats">
				<div class="icon"><i class="fa fa-comments-o"></i></div>
				<div class="count"><?= count($mailsNonLu) ?></div>
				<h3>Nouveau Message</h3>
				<p>Vous avez <?= count($mailsNonLu) ?> nouveau message</p>
			</div>
		</div>
	</a>
	<?php else : ?>
	<a>
		<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="tile-stats">
				<div class="icon"><i class="fa fa-comments-o"></i></div>
				<div class="count"><?= count($mailsNonLu) ?></div>
				<h3>Nouveau Message</h3>
				<p>Vous avez <?= count($mailsNonLu) ?> nouveau message</p>
			</div>
		</div>
	</a>
	<?php endif ; ?>
	<a href="index.php?page=creationRecette">
		<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="tile-stats">
				<div class="icon"><i class="fa fa-pencil-square-o"></i></div>
				<div class="count">1</div>
				<h3>Creer une nouvelle recette</h3>
				<p>Publier une nouvelle recette en ligne</p>
			</div>
		</div>
	</a>
</div>