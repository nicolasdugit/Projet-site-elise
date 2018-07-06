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
		<!-- NProgress -->
		<link href="vendors/nprogress/nprogress.css" rel="stylesheet">
		<!-- iCheck -->
		<link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
		<!-- bootstrap-progressbar -->
		<link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
		<!-- JQVMap -->
		<link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
		<!-- bootstrap-daterangepicker -->
		<link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
		<!-- bootstrap-wysiwyg -->
		<link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
		<!-- Custom Theme Style -->
		<link href="build/css/custom.min.css" rel="stylesheet">

		<!-- bootstrap-datetimepicker -->
		<link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
		<!-- Ion.RangeSlider -->
		<link href="vendors/normalize-css/normalize.css" rel="stylesheet">
		<link href="vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
		<link href="vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
		<!-- Bootstrap Colorpicker -->
		<link href="vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
		<!-- Cropper -->
		<!-- <link href="vendors/cropper/dist/cropper.min.css" rel="stylesheet"> -->
		<!-- Dropzone.js -->
		<link href="vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
		<!-- Custom Theme Style -->
		<link href="build/css/custom.min.css" rel="stylesheet">
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
		<!-- FastClick -->
		<script src="vendors/fastclick/lib/fastclick.js"></script>
		<!-- NProgress -->
		<script src="vendors/nprogress/nprogress.js"></script>
		<!-- Chart.js -->
		<script src="vendors/Chart.js/dist/Chart.min.js"></script>
		<!-- gauge.js -->
		<script src="vendors/gauge.js/dist/gauge.min.js"></script>
		<!-- bootstrap-progressbar -->
		<script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
		<!-- iCheck -->
		<script src="vendors/iCheck/icheck.min.js"></script>
		<!-- Skycons -->
		<script src="vendors/skycons/skycons.js"></script>
		<!-- Flot -->
		<script src="vendors/Flot/jquery.flot.js"></script>
		<script src="vendors/Flot/jquery.flot.pie.js"></script>
		<script src="vendors/Flot/jquery.flot.time.js"></script>
		<script src="vendors/Flot/jquery.flot.stack.js"></script>
		<script src="vendors/Flot/jquery.flot.resize.js"></script>
		<!-- Flot plugins -->
		<script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
		<script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
		<script src="vendors/flot.curvedlines/curvedLines.js"></script>
		<!-- DateJS -->
		<script src="vendors/DateJS/build/date.js"></script>
		<!-- JQVMap -->
		<script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
		<script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
		<script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
		<!-- bootstrap-daterangepicker -->
		<script src="vendors/moment/min/moment.min.js"></script>
		<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>	
		<!-- bootstrap-wysiwyg -->
		<script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
		<script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
		<script src="vendors/google-code-prettify/src/prettify.js"></script>




		<!-- bootstrap-daterangepicker -->
		<script src="vendors/moment/min/moment.min.js"></script>
		<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
		<!-- bootstrap-datetimepicker -->    
		<script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
		<!-- Ion.RangeSlider -->
		<script src="vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
		<!-- Bootstrap Colorpicker -->
		<script src="vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
		<!-- jquery.inputmask -->
		<script src="vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
		<!-- jQuery Knob -->
		<script src="vendors/jquery-knob/dist/jquery.knob.min.js"></script>
		<!-- Cropper -->
		<!-- <script src="vendors/cropper/dist/cropper.min.js"></script> -->


		<!-- Dropzone.js -->
		<script src="vendors/dropzone/dist/min/dropzone.min.js"></script>


		<!-- Custom Theme Scripts -->
		<script src="build/js/custom.min.js"></script>
		<script src="build/js/nicolas.js"></script>


	</body>
</html>