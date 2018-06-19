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
	}
	else {
		showHomePage();
	}
	
} catch (Exception $e) {
	$errorMessage = $e->getMessage();
	require('view/fontend/errorview.php');
	
}