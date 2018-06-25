<?php
session_start();
require('controller/backend.php');

try {
	if (isset($_GET['action']) OR isset($_GET['page'])) {
		if ($_GET['page'] == 'inbox') {
			adminInbox();
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