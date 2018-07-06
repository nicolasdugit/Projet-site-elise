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
}