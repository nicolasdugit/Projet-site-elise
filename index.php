<?php

require('controller/frontend.php');

try {
	if (isset($_GET['page'])) {
		if ($_GET['page'] == "contact") {
			contactPage();
		}
	}
	else {
		showHomePage();
	}
	
} catch (Exception $e) {
	$errorMessage = $e->getMessage();
	require('view/fontend/errorview.php');
	
}