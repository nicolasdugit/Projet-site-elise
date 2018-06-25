<?php
use Poissonneriedupost\Elise\Backend\model\MailManager;
use Poissonneriedupost\Elise\Backend\model\UserManager;

require_once('model/MailManager.php');
require_once('model/UserManager.php');

function adminHome()
{
	require('view/adminView.php');
}

function adminInbox()
{
	$mailManager = new MailManager();

	$mails = $mailManager->getMails();
	
	require('view/inboxView.php');
}