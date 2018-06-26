<?php
session_start();
require('controller/backend.php');

try {
	if (isset($_GET['action']) OR isset($_GET['page'])) {
		if ($_GET['page'] == 'inbox') 
		{
			if (isset($_GET['id']) && $_GET['id'] > 0)
			{
				mailShow($_GET['id']);
			}
			else {
				adminInbox();

			}
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