
<div class="colorlib-about" style="background-color: grey; padding-bottom: 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-pb-sm">
				<h2>Dernières recettes</h2>
				<hr>
				<?php foreach (array_slice($recettes, 0, 3) as $recette) : ?>
					<div class="f-entry">
						<a href=""index.php?page=uneRecette&amp;recetteId=<?= $recette['id'] ?>"" class="featured-img" style="background-image: url(<?= $recette['recette_img'] ?>);"></a>
						<div class="desc">
							<span><?= htmlspecialchars($recette['recette_author']) ?></span>
							<h3><a href="index.php?page=uneRecette&amp;recetteId=<?= $recette['id'] ?>"><?= htmlspecialchars($recette['recette_title']) ?></a></h3>
						</div>
					</div>
				<?php endforeach ; ?>
			</div>
			<div class="col-md-4 col-pb-sm">
				<h2>Sites Amis</h2>
     			<hr>
     			<ul style="font-size: 18px;">
     				<li><a href="http://huitres-ortiz.jimdo.com">Les huîtres de Ludovic ORTIZ</a></li>
     				<li><a href="http://labaraqueahuitres.com">Cap'Olivier, la baraque à huitres</a></li>
     				<li><a href="http://www.restaurant-lecabanon-lanton.com/">Le Cabanon</a></li>
     				<li><a href="http://villa-balnea.com">Villa Balnea</a></li>
     				<li><a href="https://www.mairie-lanton.fr">Mairie de Lanton</a></li>
     			</ul>
			</div>
			<div id="fb-root"></div>
			<div class="col-md-4 col-pb-sm">
				<h2><a href="https://web.facebook.com/Poissonnerie-du-Port-Chez-Elise-274291612588893/" target="_blank" ><i class="icon-facebook4"></i></a> Facebook</h2>
				<hr>
			
				<div class="fb-page" 
  					data-href="https://web.facebook.com/Poissonnerie-du-Port-Chez-Elise-274291612588893/"
  					data-heigth="400"
  					data-tabs=""
  					data-hide-cover="false"
  					data-show-facepile="false"
  					data-adapt-container-width="true">
  				<blockquote cite="https://web.facebook.com/Poissonnerie-du-Port-Chez-Elise-274291612588893/" class="fb-xfbml-parse-ignore"><a href="https://web.facebook.com/Poissonnerie-du-Port-Chez-Elise-274291612588893/" target="_blank">Poissonnerie du Port &quot;Chez Elise&quot;</a></blockquote>
  				</div>
			</div>
		</div>
	</div>
</div>
<script src="public/js/facebook.js"></script>
