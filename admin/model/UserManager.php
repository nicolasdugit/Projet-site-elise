<?php
namespace Poissonneriedupost\Elise\Backend\Model;

require_once("Manager.php");

class UserManager extends Manager
{
	public function getUser($name) 
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM boot-users WHERE name = ?');
		$req->execute(array($name));
		$affectedLines = $req->fetch();
		return $affectedLines;
	}
}