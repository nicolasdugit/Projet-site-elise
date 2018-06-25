<?php
session_start();
require('controller/backend.php');

try {
	if (isset($_GET['action'])) {
		if ($_GET['action'] == '') {
			# code...
		}
		elseif ($_GET['action'] == '') {
			# code...
		}
	}
	else {
		adminHome();
	}
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/errorView.php');
}