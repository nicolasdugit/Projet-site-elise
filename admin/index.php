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
			elseif ($_GET['action'] == 'modifRecette')
			{
				if (isset($_POST['recette_title']) && isset($_POST['recette_subtitle']) && isset($_POST['recette_time']) && isset($_POST['recette_portion']) && isset($_POST['recette_author']) && isset($_POST['recette_image']) && isset($_POST['recette_id'])) 
				{
					modifRecette($_POST['recette_title'], $_POST['recette_subtitle'], $_POST['recette_time'], $_POST['recette_portion'], $_POST['recette_instruction'], $_POST['recette_author'], $_POST['recette_image'], $_POST['recette_id']);
				}
				else
				{
					throw new Exception('Impossible de modifier la recette');
				}
			}
			elseif ($_GET['action'] == 'deleteRecette') 
			{
				if (isset($_GET['recetteId']) && $_GET['recetteId'] > 0) 
				{
					deleteRecette($_GET['recetteId']);
				}
				else
				{
					throw new Exception('Aucun mail à supprimer');
				}
			}
			elseif ($_GET['action'] == 'insertImage')
			{
				if(!empty($_FILES))
				{
					$tempFile = $_FILES['file']['tmp_name'];
					$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

					// $targetFile = 'build/'.strtotime(date('Y-m-d H:i:s')).'.'.$extension;
					$targetFile = '../public/images/recettes/'.rand(100,1000000).'.'.$extension;
					move_uploaded_file($tempFile, $targetFile);

					$newNameTemp = pathinfo($targetFile, PATHINFO_BASENAME);
					$newName = 'public/images/recettes/'.$newNameTemp;

					insertImage($newName);
				}
				else
				{
					throw new Exception('Aucune image à uploader');
				}
			}
			elseif ($_GET['action'] == 'deleteImage') 
			{
				if (isset($_GET['imageId']) && $_GET['imageId'] > 0) 
				{
					deleteImage($_GET['imageId']);
				}
				else
				{
					throw new Exception('Aucune image à supprimer');
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
			elseif ($_GET['page'] == 'gestionRecette') {
				gestionRecette();
			}
			elseif ($_GET['page'] == 'creationRecette') 
			{
				creationRecette();
			}
			elseif ($_GET['page'] == 'editRecette') 
			{
				if (isset($_GET['id']) && $_GET['id'] > 0)
				{
					editRecette($_GET['id']);
				}
				else
				{
					throw new Exception('recette Non Trouvée');
				}
			}
			elseif ($_GET['page'] == 'gestionImage') {
				gestionImage();
			}
			elseif ($_GET['page'] == 'uploadImage') 
			{
				uploadImage();
			}
			elseif ($_GET['page'] == 'showImage') 
			{
				showImage();
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