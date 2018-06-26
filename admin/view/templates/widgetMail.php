
<div class="row">
	<div class="col-md-4">
		<div class="x_panel">
			<div class="x_title">
				<h2>Derniers Messages <small></small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<?php foreach (array_slice($mails, 0, 5) as $mail) : ?>
					<article class="media event">
						<a href="index.php?page=inbox&amp;id=<?= $mail['id'] ?>" class="pull-left date">
							<p class="month"><?= $mail['mail_date'] ?></p>
							<p class="day"><?=$mail['mail_date'][8],$mail['mail_date'][9]?></p>
						</a>
						<div class="media-body">
							<a class="title" href="index.php?page=inbox&amp;id=<?= $mail['id'] ?>"><?=$mail['mail_name'] ?> </a>
							<p><?= htmlspecialchars($mail['mail_subject']) ?></p>
						</div>
					</article>
				<?php endforeach ; ?>
			</div>
		</div>
	</div>
</div>
