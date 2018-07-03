<?php

require('controller/frontend.php');

try {
	if (isset($_GET['page'])) {
		if ($_GET['page'] == "contact") {
			contactPage();
		}
		elseif ($_GET['page'] == "notreBanc") {
			notreBancPage();
		}
		elseif ($_GET['page'] == "platCuisine") {
			platCuisinePage();
		}
		elseif ($_GET['page'] == "nosPlateaux") {
			nosPlateauxPage();
		}
		elseif ($_GET['page'] == "nosRecettes") {
			nosRecettesPage();
		}
		elseif ($_GET['page'] == "notreEquipe") {
			notreEquipePage();
		}
		elseif ($_GET['page'] == "uneRecette") {
			uneRecettePage();
		}
	}
	elseif (isset($_GET['action'])) {
		 if ($_GET['action'] == 'sentMail') {
		 	sentMail($_POST['subject'], $_POST['name'],$_POST['mail'], $_POST['content']);
		 }
		
	}
	else {
		showHomePage();
	}
	
} catch (Exception $e) {
	$errorMessage = $e->getMessage();
	require('view/fontend/errorview.php');
}