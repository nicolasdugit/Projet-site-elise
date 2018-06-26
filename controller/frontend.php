<?php
use Poissonneriedupost\Elise\Frontend\model\MailManager;

require_once('model/MailManager.php');

function showHomePage()
{
	require('view/frontend/homePage.php');
}

function contactPage()
{
	require('view/frontend/contactView.php');
}

function notreBancPage()
{
	require('view/frontend/surLeBancView.php');
}
function platCuisinePage()
{
	require('view/frontend/platsCuisineView.php');
}
function nosPlateauxPage()
{
	require('view/frontend/plateauxView.php');
}
function nosRecettesPage()
{
	require('view/frontend/recetteView.php');
}
function notreEquipePage()
{
	require('view/frontend/equipeView.php');
}

function sentMail($subject, $name, $mail, $content)
{
	$mailManager = new MailManager();

	$affectedLines = $mailManager->sendMail($subject, $name, $mail, $content);
	if ($affectedLines === false) 
	{
		throw new Exception('Impossible d\'ajouter le commentaire !');
	}
	else 
	{
		header('Location: index.php?page=contact');
	}
}