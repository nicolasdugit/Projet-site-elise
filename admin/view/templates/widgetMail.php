<div class="right_col" role="main">
	<div class="">
		<div class="row top_tiles">
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-comments-o"></i></div>
					<div class="count">1</div>
					<h3>Nouveau Message</h3>
					<p>Vous avez 1 nouveau message</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="x_panel">
					<div class="x_title">
						<h2>Derniers Messages <small>recus</small></h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Settings 1</a></li>
									<li><a href="#">Settings 2</a></li>
								</ul>
							</li>
							<li><a class="close-link"><i class="fa fa-close"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<?php
						$i=0;
						while ($mail = $mails->fetch() AND $i<5)
						{
							$i++;
							?>
							<article class="media event">
								<a class="pull-left date">
									<p class="month"><?=$mail['mail_date'] ?></p>
									<p class="day">23</p>
								</a>
								<div class="media-body">
									<a class="title" href="#"><?=$mail['mail_name'] ?> </a>
									<p><?= htmlspecialchars($mail['mail_subject']) ?></p>
								</div>
							</article>
							<?php
						}
						$mails->closeCursor();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>