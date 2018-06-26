
<div class="top_nav">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="">
					<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="view/images/img.jpg" alt="">
						<?php if (isset($_SESSION['user_name'])) : ?>
							<?= strtoupper(htmlspecialchars($_SESSION['user_name'])) ?>
						<?php else : ?>
							<?php throw new Exception('Probleme identification'); ?>
						<?php endif ; ?>
						<span class=" fa fa-angle-down"></span>
					</a>
					<ul class="dropdown-menu dropdown-usermenu pull-right">
						<li><a href="javascript:;"> Mon profil</a></li>
						<li><a href="javascript:;">Aide</a></li>
						<li><a href="index.php?action=deconnection"><i class="fa fa-sign-out pull-right"></i> Se Déconnecter</a></li>
					</ul>
				</li>

				<li role="presentation" class="dropdown">
					<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-envelope-o"></i>
						<span class="badge bg-green"><?= count($mailsNonLu) ?></span>
					</a>
					<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
						<?php foreach (array_slice($mailsNonLu, 0, 5) as $mail) : ?>
							<li>
								<a href="index.php?page=inbox&amp;id=<?= $mail['id'] ?>">
									<span class="image"><img src="view/images/img.jpg" alt="Profile Image" /></span>
									<span>
										<span><?=$mail['mail_name'] ?></span>
										<span class="time"><?=$mail['mail_date'] ?></span>
									</span>
									<span class="message">
										<?= htmlspecialchars($mail['mail_subject']) ?>
									</span>
								</a>
							</li>
						<?php endforeach ; ?>
						<li>
							<div class="text-center">
								<a href="index.php?page=inbox">
									<strong>Voir tous les messages</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>