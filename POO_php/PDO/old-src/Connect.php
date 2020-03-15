<?php

declare(strict_types=1);

$pdo = null;

try{

	//$pdo = new PDO('mysql:127.0.0.1=mysql;dbname=exemplo', 'root ', ' ');
	$pdo = new PDO('mysql:localhost=localhost;dbname=exemplo;charset=utf8', 'root', '');
}catch(Exception $e){

	echo $e->getMessage();
	die();
}


return $pdo;