<?php
namespace Poissonneriedupost\Elise\Frontend\Model;

require_once("Manager.php");

class RecetteManager extends Manager
{
	public function getRecettes()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, recette_title, recette_img, recette_subtitle, recette_time, recette_portion, recette_instruction, recette_author FROM boot_recette ORDER BY id DESC');
		return $req;
	}

	public function getRecette($recetteId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, recette_title, recette_img, recette_subtitle, recette_time, recette_portion, recette_instruction, recette_author FROM boot_recette WHERE id = ? ');
		$req->execute(array($recetteId));
		$recette = $req->fetch();

		return $recette;
	}
}