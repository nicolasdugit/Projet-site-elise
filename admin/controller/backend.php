<?php
use Poissonneriedupost\Elise\Backend\model\MailManager;
use Poissonneriedupost\Elise\Backend\model\UserManager;
use Poissonneriedupost\Elise\Backend\model\RecetteManager;
use Poissonneriedupost\Elise\Backend\model\ImageManager;

require_once('model/MailManager.php');
require_once('model/UserManager.php');
require_once('model/RecetteManager.php');
require_once('model/ImageManager.php');

function adminHome()
{
	$mailManager = new MailManager();
	$recetteManager = new RecetteManager();
	$imageManager = new ImageManager();

	$mails = $mailManager->getMails();
	$mails = $mails->fetchAll();

	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();

	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	$images = $imageManager->getImages();
	$images = $images->fetchAll();

	require('view/adminView.php');
	
}

function connectionAdminPage()
{
	require('view/loginMainView.php');
}

function connectionAdmin($pseudo, $pass)
{
	$userManager = new UserManager();

	$passTest = $userManager->connection($pseudo, $pass);

	if ($pass == $passTest['user_pass']) {
		$isPassCorrect = true;
	}
	else
	{
		$isPassCorrect = false;
	}
	if (!$passTest)
	{
		throw new Exception('Mauvais identifiant ou mot de passe');
	}
	else
	{
		if ($isPassCorrect == true) 
		{
			session_start();
			$_SESSION['user_status'] = $passTest['user_status'];
			$_SESSION['user_name'] = $pseudo;
			header('Location: index.php');
		}
		else
		{
			throw new Exception('Mauvais identifiant ou mot de passe');
		}
	}
}

function deconnection()
{
	$_SESSION = array();
	session_destroy();
	header('Location: index.php');
}

function adminInbox()
{
	$mailManager = new MailManager();

	$mails = $mailManager->getMails();
	$mails = $mails->fetchAll();

	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();

	require('view/inboxView.php');
}

function mailShow($mailId)
{
	$mailManager = new MailManager();

	$mails = $mailManager->getMails();
	$mails = $mails->fetchAll();

	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();

	$mailOne = $mailManager->getMail($mailId);

	$markMail = $mailManager->markMail($mailId);

	if (!empty($mailOne)) 
	{
		require('view/inboxView.php');
	}
	else
	{
		throw new Exception('Aucun message trouvé sur cette page');
	}
}

function eraseMail($mailId)
{
	$mailManager = new MailManager();

	$affectedLines = $mailManager->eraseMail($mailId);

	if ($affectedLines == false) 
	{
	    throw new Exception('Impossible de supprimer le mail !');
	}
	else
	{
	    header('Location: index.php?page=inbox');
	}
}

function creationRecette()
{
	$mailManager = new MailManager();
	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();

	$imageManager = new ImageManager();
	$images = $imageManager->getImages();
	$images = $images->fetchAll();


	require('view/creationRecetteView.php');
}

function publishRecette($recette_title, $recette_subtitle, $recette_time, $recette_portion, $recette_instruction, $recette_author, $recette_image)
{
	$recetteManager = new RecetteManager();

	$affectedLines = $recetteManager->newRecette($recette_title, $recette_subtitle, $recette_time, $recette_portion, $recette_instruction, $recette_author, $recette_image);
	if ($affectedLines == false) 
	{
		throw new Exception('Impossible d\'ajouter la recette !');
	}
	else 
	{
		header('Location: index.php?page=creationRecette');
	}
}

function uploadImage()
{
	$mailManager = new MailManager();
	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();
	require('view/uploadImageView.php');
}

function showImage()
{
	$mailManager = new MailManager();
	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();

	$imageManager = new ImageManager();
	$images = $imageManager->getImages();
	$images = $images->fetchAll();

	require('view/selectImageView.php');
}