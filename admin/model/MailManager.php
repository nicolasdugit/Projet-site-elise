<?php
namespace Poissonneriedupost\Elise\Backend\Model;

require_once("Manager.php");

class MailManager extends Manager
{
	public function getMails()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT mail_name, mail_content, mail_date, mail_subject FROM boot_mail');
		
		return $req;
	}
}

