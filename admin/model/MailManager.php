<?php
namespace Poissonneriedupost\Elise\Backend\Model;

require_once("Manager.php");

class MailManager extends Manager
{
	public function getMails()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, mail_name, mail_mail, mail_content, mail_date, mail_subject, mail_status FROM boot_mail ORDER BY id DESC');
		
		return $req;
	}

	public function getMail($mailId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, mail_name, mail_mail, mail_content, mail_date, mail_subject FROM boot_mail WHERE id = ?');
		$req->execute(array($mailId));
		$mail = $req->fetch();

		return $mail;
	}
}

