<?php
$dsn = 'mysql:host=localhost;dbname=vidhyardhi';
$username = 'manju';
$password = 'Mm1234@!';
//create a PDO object
try{
	$db = new PDO($dsn,$username,$password);
	echo "<p>You are connected to <b>Vidhyardhi</b> database</p>";
	}
catch(PDOException $e){
	$error_message = $e->getMessage();
	include "database_error.php";
}
?>