			<div class="colorlib-menu" >
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
							<span class="icon"><i class="flaticon-cutlery"></i></span>
							<h2>les recettes d'Elise</h2>
							<p>Quelques idées simples pour déguster les produits du bassin.</p>
						</div>
					</div>
					<div class="row">
<?php foreach (array_slice($recettes, 0, 3) as $recette) : ?>
						<div class="col-md-4 animate-box">
							<article class="article-entry">
								<a href="index.php?page=uneRecette&amp;recetteId=<?= $recette['id'] ?>" class="blog-img" style="background-image: url(<?= $recette['recette_img'] ?>);"></a>
								<div class="desc" style="padding-left: 20px;">
									<p class="admin"><span>Ecrit par :</span> <span><?= htmlspecialchars($recette['recette_author']) ?></span></p>
									<h2><a href="index.php?page=uneRecette&amp;recetteId=<?= $recette['id'] ?>"><?= htmlspecialchars($recette['recette_title']) ?></a></h2>
									<p><?= htmlspecialchars($recette['recette_subtitle']) ?></p>
								</div>
							</article>
						</div>
<?php endforeach ; ?>
					</div>
				</div>
			</div>
			