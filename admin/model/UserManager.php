<?php
namespace Poissonneriedupost\Elise\Backend\Model;

require_once("Manager.php");

class UserManager extends Manager
{
	public function connection($pseudo, $pass)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, user_pass, user_status FROM boot_users WHERE user_name = ?');
		$req->execute(array($pseudo));
		$test = $req->fetch();

		return $test;
	}

	public function getUser($name) 
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, user_name, user_mail, user_status, user_picture FROM boot-users WHERE name = ?');
		$req->execute(array($name));
		$affectedLines = $req->fetch();
		
		return $affectedLines;
	}
}