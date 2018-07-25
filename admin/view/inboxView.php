<?php $title = 'PAGE ADMIN -Mail- Poissonnerie du Port Chez Elise'; ?>

<?php ob_start(); ?>
	<?php
	require('view/templates/leftSideBar.php');
	require('view/templates/topBar.php');
	?>
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
						<h2>Boite Mail<small>Vos mail</small></h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!-- MAIL LIST -->
						<div class="row">
							<div class="col-sm-3 mail_list_column">
								<!-- <button id="compose" class="btn btn-sm btn-success btn-block" type="button">NOUVEAU</button> -->
								<a href="mailto:" class="btn btn-sm btn-success btn-block">NOUVEAU</a>
								<?php foreach ($mails as $mail) : ?>
									<a href="index.php?page=inbox&amp;id=<?= $mail['id'] ?>">
										<div class="mail_list">
											<div class="left">
												<?php if ($mail['mail_status'] == 1) : ?>
													<i class="fa fa-circle-thin"></i>
													<?php else : ?>
													<i class="fa fa-circle"></i>
												<?php endif ; ?>
											</div>
											<div class="right">
											<h3>de : <?= htmlspecialchars($mail['mail_name']) ?> <small>recu le : <?=$mail['mail_date'] ?></small></h3>
												<p><?= strtoupper(htmlspecialchars($mail['mail_subject'])) ?></p>
											</div>
										</div>
									</a>
								<?php endforeach ; ?>
							</div>
							<!-- /MAIL LIST -->
							<!-- MAIL CONTENT -->
							<?php if (isset($_GET['id'])) : ?>
							<div class="col-sm-9 mail_view">
								<div class="inbox-body">
									<div class="mail_heading row">
										<div class="col-md-8">
											<div class="btn-group">
												<a class="btn btn-sm btn-primary" href="mailto:<?=$mailOne['mail_mail'] ?>"><i class="fa fa-reply"></i> Répondre</a>
												<a class="btn btn-sm btn-default" href="index.php?action=eraseMail&amp;mailId=<?= $_GET['id'] ?>"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
										<div class="col-md-4 text-right">
											<p class="date"> <?=  $mailOne['mail_date'] ?> </p>
										</div>
										<div class="col-md-12">
											<h4><?= strtoupper(htmlspecialchars($mailOne['mail_subject'])) ?></h4>
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
								</div>
							</div>
							<?php endif ; ?>
							<!-- /MAIL CONTENT -->

							<!-- compose -->
							<form action="mailto:" method="GET">
							<div class="compose col-md-6 col-xs-12">
								<div class="compose-header">Nouveau message
									<button type="button" class="close compose-close"><span>×</span></button>
								</div>
								<div class="compose-body">
									<div id="alerts"></div>
									<div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
										
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
									<div id="editor-mail" class="editor-wrapper"></div>
									<input type="hidden" id="new_mail" name="body" required>
								</div>
								<div class="compose-footer">
									<input id="mailForm" class="btn btn-sm btn-success" type="submit" value="Envoyer">
								</div>
							</div>
							</form>
							<!-- /compose -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('view/templates/templateAdmin.php'); ?>