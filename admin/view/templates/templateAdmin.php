<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="view/images/favicon.ico" type="image/ico" />
   		<title><?= $title ?></title>
		<!-- Bootstrap -->
		<link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

		<!-- Dropzone.js -->
		<link href="vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
		<!-- Custom Theme Style -->
		<link href="build/css/custom.min.css" rel="stylesheet">
		<link href="build/css/nicolas.css" rel="stylesheet">
	</head>
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<?= $content ?>
				<?php require('view/templates/footer.php') ?>
			</div>
		</div>
		<!-- jQuery -->
		<script src="vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- bootstrap-wysiwyg -->
		<script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
		<script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
		<script src="vendors/google-code-prettify/src/prettify.js"></script>
		
		<!-- Dropzone.js -->
		<script src="vendors/dropzone/dist/min/dropzone.min.js"></script>
		<!-- Custom Theme Scripts -->
		<script src="build/js/custom.js"></script>
		<script src="build/js/nicolas.js"></script>
	</body>
</html>