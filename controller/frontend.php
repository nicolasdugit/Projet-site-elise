<?php
use Poissonneriedupost\Elise\Frontend\model\MailManager;
use Poissonneriedupost\Elise\Frontend\model\RecetteManager;

require_once('model/MailManager.php');
require_once('model/RecetteManager.php');

function showHomePage()
{
	$recetteManager = new RecetteManager();
	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();
	require('view/frontend/homePage.php');
}

function contactPage()
{
	$recetteManager = new RecetteManager();
	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();
	require('view/frontend/contactView.php');
}

function notreBancPage()
{
	$recetteManager = new RecetteManager();
	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	require('view/frontend/surLeBancView.php');
}
function platCuisinePage()
{
	$recetteManager = new RecetteManager();
	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	require('view/frontend/platsCuisineView.php');
}
function nosPlateauxPage()
{
	$recetteManager = new RecetteManager();
	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	require('view/frontend/plateauxView.php');
}
function nosRecettesPage()
{
	$recetteManager = new RecetteManager();
	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	require('view/frontend/recetteView.php');
}
function notreEquipePage()
{
	$recetteManager = new RecetteManager();
	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	require('view/frontend/equipeView.php');
}
function uneRecettePage($recetteId)
{
	$recetteManager = new RecetteManager();
	$recettes = $recetteManager->getRecettes();
	$recette = $recetteManager->getRecette($recetteId);
	$aleatoire = rand(1, 3);
	$recette1 = $recetteManager->getRecette($aleatoire);
	require('view/frontend/recetteBlogView.php');
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