<?php

require('controller/frontend.php');

try {
	if (isset($_GET['action'])) {

	}
	else {
		showHomePage();
	}
	
} catch (Exception $e) {
	$errorMessage = $e->getMessage();
	require('view/fontend/errorview.php');
	
}