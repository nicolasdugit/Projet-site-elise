<?php $title = 'PAGE ADMIN -Mail- Poissonnerie du Port Chez Elise'; ?>

<?php ob_start(); ?>
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Votre boitre Mail <small>mails recu du site www.poissonnerieduport.fr</small></h3>
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
			<div class="col-md-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Inbox Design<small>User Mail</small></h2>
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
						<!-- MAIL LIST -->
						<div class="row">
							<div class="col-sm-3 mail_list_column">
								<button id="compose" class="btn btn-sm btn-success btn-block" type="button">NOUVEAU</button>
								<?php
								while ($mail = $mails->fetch())
								{
									?>
									<a href="index.php?page=inbox&amp;id=<?= $mail['id'] ?>">
										<div class="mail_list">
											<div class="left">
												<i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
											</div>
											<div class="right">
											<h3><?=$mail['mail_name'] ?> <small><?=$mail['mail_date'] ?></small></h3>
												<p><?=$mail['mail_subject'] ?></p>
											</div>
										</div>
									</a>
									<?php
								}
								$mails->closeCursor();
								?>
							</div>
							<!-- /MAIL LIST -->
							<!-- MAIL CONTENT -->
							<?php if (isset($_GET['id']))
							{
							?>
							<div class="col-sm-9 mail_view">
								<div class="inbox-body">
									<div class="mail_heading row">
										<div class="col-md-8">
											<div class="btn-group">
												<button class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Répondre</button>
												<button class="btn btn-sm btn-default" type="button"  data-placement="top" data-toggle="tooltip" data-original-title="Forward"><i class="fa fa-share"></i></button>
												<button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></button>
												<button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
											</div>
										</div>
										<div class="col-md-4 text-right">
											<p class="date"> <?=  $mailOne['mail_date'] ?> </p>
										</div>
										<div class="col-md-12">
											<h4><?= htmlspecialchars($mailOne['mail_subject']) ?></h4>
										</div>
									</div>
									<div class="sender-info">
										<div class="row">
											<div class="col-md-12">
												<strong><?= htmlspecialchars($mailOne['mail_name'])?></strong>
												<span>(<?=$mailOne['mail_mail'] ?>)</span> to
												<strong>me</strong>
												<a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
											</div>
										</div>
									</div>
									<br>
									<div class="view-mail">
										<p><?= htmlspecialchars($mailOne['mail_content']) ?></p>
									</div>
									<div class="btn-group">
										<button class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Répondre</button> 
										<button class="btn btn-sm btn-default" type="button"  data-placement="top" data-toggle="tooltip" data-original-title="Forward"><i class="fa fa-share"></i></button>
										<button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></button>
										<button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
									</div>
								</div>
							</div>
							<?php
							}
							?>
							<!-- /MAIL CONTENT -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('view/templates/templateAdmin.php'); ?>