<?php
namespace Poissonneriedupost\Elise\Backend\Model;

require_once("Manager.php");

class RecetteManager extends Manager
{
	public function newRecette($content)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO boot_recette(recette_instruction) VALUES (:content)');
		$affectedLines = $req->execute(array(
			':content' => $content,
		));

		return $affectedLines;
	}
}
