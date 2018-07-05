<?php
namespace Poissonneriedupost\Elise\Backend\Model;

require_once("Manager.php");

class RecetteManager extends Manager
{
	public function newRecette($recette_title, $recette_subtitle, $recette_time, $recette_portion, $recette_instruction, $recette_author)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO boot_recette(recette_title, recette_subtitle, recette_time, recette_portion, recette_instruction, recette_author) VALUES (:recette_title, :recette_subtitle, :recette_time, :recette_portion, :recette_instruction, :recette_author)');
		$affectedLines = $req->execute(array(
			':recette_title' => $recette_title,
			':recette_subtitle' => $recette_subtitle,
			':recette_time' => $recette_time,
			':recette_portion' => $recette_portion,
			':recette_instruction' => $recette_instruction,
			':recette_author' => $recette_author,

		));

		return $affectedLines;
	}
}
