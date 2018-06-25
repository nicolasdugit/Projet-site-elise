<?php
namespace Poissonneriedupost\Elise\Backend\Model;

require_once("Manager.php");

class MailManager extends Manager
{
	public function getMail() 
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM boot-mail ');
		$affectedLines = $req->fetch();
		return $affectedLines;
	}
}