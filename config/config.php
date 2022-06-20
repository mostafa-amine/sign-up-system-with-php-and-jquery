<?php
// connecting to database 

$host = "localhost";
$user = "root";
$port = "3307";

$db = "notes_application";
$password = "";

$dsn = "mysql:host=$host;dbname=$db;port=$port";

try{
    $pdo = new PDO($dsn , $user , $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}






?>