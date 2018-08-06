<?php
namespace Poissonnerieduport\Elise\Backend\Model;

require_once("Manager.php");

class RecetteManager extends Manager
{
	public function newRecette($recette_title, $recette_subtitle, $recette_time, $recette_portion, $recette_instruction, $recette_author, $recette_image, $recette_real_author)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO boot_recette(recette_title, recette_subtitle, recette_time, recette_portion, recette_instruction, recette_author, recette_img, recette_real_author) VALUES (:recette_title, :recette_subtitle, :recette_time, :recette_portion, :recette_instruction, :recette_author, :recette_image, :recette_real_author)');
		$affectedLines = $req->execute(array(
			':recette_title' => $recette_title,
			':recette_subtitle' => $recette_subtitle,
			':recette_time' => $recette_time,
			':recette_portion' => $recette_portion,
			':recette_instruction' => $recette_instruction,
			':recette_author' => $recette_author,
			':recette_image' => $recette_image,
			':recette_real_author' => $recette_real_author,
		));

		return $affectedLines;
	}

	public function getRecettes()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, recette_title, recette_subtitle, recette_time, recette_portion, recette_instruction, recette_author, recette_img FROM boot_recette ORDER BY id DESC');

		return $req;
	}

	public function getRecette($recette_id)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM boot_recette WHERE id = :recette_id');
		$req->execute(array(
			':recette_id' => $recette_id,
		));
		$recette = $req->fetch();

		return $recette;
	}

	public function modifRecette($recette_title, $recette_subtitle, $recette_time, $recette_portion, $recette_instruction, $recette_author, $recette_image, $id)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE boot_recette SET recette_title=:recette_title, recette_subtitle=:recette_subtitle, recette_time=:recette_time, recette_portion=:recette_portion, recette_instruction=:recette_instruction, recette_author=:recette_author, recette_img=:recette_image WHERE ID=:id');
		$affectedLines = $req->execute(array(
			':recette_title' => $recette_title,
			':recette_subtitle' => $recette_subtitle,
			':recette_time' => $recette_time,
			':recette_portion' => $recette_portion,
			':recette_instruction' => $recette_instruction,
			':recette_author' => $recette_author,
			':recette_image' => $recette_image,
			':id' => $id,
		));

		return $affectedLines;
	}

	public function deleteRecette($recetteId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM boot_recette WHERE id = :recetteId');
		$affectedLines = $req->execute(array(
			':recetteId' => $recetteId,
		));

		return $affectedLines;
	}

}
