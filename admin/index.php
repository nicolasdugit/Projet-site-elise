<?php
session_start();
require('controller/backend.php');

try {
	if (isset($_SESSION['user_status']) AND $_SESSION['user_status'] == 1) 
	{
		if (isset($_GET['action']))
		{
			if ($_GET['action'] == 'deconnection') 
			{
				deconnection();
			}
			elseif ($_GET['action'] == 'eraseMail') 
			{
				if (isset($_GET['mailId']) && $_GET['mailId'] > 0) 
				{
					eraseMail($_GET['mailId']);
				}
				else
				{
					throw new Exception('Aucun mail à supprimer');
				}
			}
			elseif ($_GET['action'] == 'publishRecette')
			{
				if (isset($_POST['recette_title']) && isset($_POST['recette_subtitle']) && isset($_POST['recette_time']) && isset($_POST['recette_portion']) && isset($_POST['recette_author']) && isset($_POST['recette_image'])) 
				{
					publishRecette($_POST['recette_title'], $_POST['recette_subtitle'], $_POST['recette_time'], $_POST['recette_portion'], $_POST['recette_instruction'], $_POST['recette_author'], $_POST['recette_image']);
				}
				else
				{
					throw new Exception('Impossible de créer nouvelle recette');
				}
			}
			else
			{
				throw new Exception('page Non Trouvée');
			}
		}
		elseif (isset($_GET['page']))
		{
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
			elseif ($_GET['page'] == 'creationRecette') 
			{
				creationRecette();
			}
		}
		else 
		{
			adminHome();
		}
	}
	else 
	{
		if (isset($_GET['action'])) 
		{
			if ($_GET['action'] == 'connection') 
			{
				if ($_POST['pseudo'] && $_POST['pass']) 
				{
					connectionAdmin(($_POST['pseudo']), ($_POST['pass']));
				}
				else 
				{
					throw new Exception('Probleme identification');
				}
			}
		}
		else 
		{
			connectionAdminPage();
		}
	}
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/errorView.php');
}