<?php
namespace Poissonneriedupost\Elise\Backend\Model;

require_once("Manager.php");

class MailManager extends Manager
{
		public function sendMail($subject, $name, $mail, $content)
	{
		$db = $this->dbConnect();
		$req = $db->insert('INSERT INTO boot_mail(mail_subject, mail_name, mail_mail, mail_date, mail_content) VALUES (:subject, :name, :mail, :content)');
		$affectedLines = $req->execute(array(
			':subject' => $subject,
			':name' => $name,
			':mail' => $mail,
			':content' => $content,
		));

		return $affectedLines;
	}
}