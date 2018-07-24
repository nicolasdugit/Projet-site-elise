<?php
namespace Poissonneriedupost\Elise\Backend\Model;

require_once("Manager.php");

class ImageManager extends Manager
{
	public function getImages()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, image_name FROM boot_images ORDER BY id DESC');
		
		return $req;	
	}

	public function deleteImage($imageId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM boot_images WHERE id = :imageId');
		$affectedLines = $req->execute(array(
			':imageId' => $imageId,
		));

		return $affectedLines;
	}
}