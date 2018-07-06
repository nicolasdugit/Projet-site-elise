<?php 

if(!empty($_FILES)) {

	function insertImage($image_name)
	{
		$db = new \PDO('mysql:host=localhost;dbname=poissonnerieduport1111;charset=utf8', 'root', '');
		$req = $db->prepare('INSERT INTO boot_images(image_name) VALUES (:image_name)');
		$req->execute(array(
			':image_name' => $image_name,
		));
	};

	$tempFile = $_FILES['file']['tmp_name'];
	$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

	// $targetFile = 'build/'.strtotime(date('Y-m-d H:i:s')).'.'.$extension;
	$targetFile = '../../public/images/recettes/'.rand(100,1000000).'.'.$extension;
	move_uploaded_file($tempFile, $targetFile);


	$newNameTemp = pathinfo($targetFile, PATHINFO_BASENAME);
	$newName = 'public/images/recettes/'.$newNameTemp;

	insertImage($newName);

}