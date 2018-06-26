<?php
use Poissonneriedupost\Elise\Backend\model\MailManager;
use Poissonneriedupost\Elise\Backend\model\UserManager;

require_once('model/MailManager.php');
require_once('model/UserManager.php');

function adminHome()
{
	$mailManager = new MailManager();

	$mails = $mailManager->getMails();
	$mailsTop = $mailManager->getMails();

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
	$mailsTop = $mailManager->getMails();
	$mailInbox = $mailManager->getMails();
	
	require('view/inboxView.php');
}

function mailShow($mailId)
{
	$mailManager = new MailManager();
	$mailInbox = $mailManager->getMails();
	$mailsTop = $mailManager->getMails();
	$mailOne = $mailManager->getMail($mailId);

	if (!empty($mailOne)) 
	{
		require('view/inboxView.php');
	}
	else
	{
		throw new Exception('Aucun message trouvé sur cette page');
	}

}