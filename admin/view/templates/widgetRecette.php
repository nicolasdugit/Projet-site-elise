
<!-- widget recette -->
	<div class="col-md-4">
		<div class="x_panel">
			<div class="x_title">
				<h2>Dernieres Recettes Publiées</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<?php foreach (array_slice($recettes, 0, 4) as $recette) : ?>
				<article class="media event">
					<h4><?= htmlspecialchars($recette['recette_title']) ?></h4>
					<h5><?= htmlspecialchars($recette['recette_subtitle']) ?></h5>
				</article>
				<?php endforeach ; ?>
			</div>
		</div>
	</div>
<!-- /widget recette -->