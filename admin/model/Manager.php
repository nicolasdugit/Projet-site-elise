<?php
namespace Poissonneriedupost\Elise\Backend\Model;

class Manager
{
	protected function dbConnect()
	{
		$db = new \PDO('mysql:host=localhost;dbname=poissonnerieduport1111;charset=utf8', 'root', '');
		return $db;
	}
}