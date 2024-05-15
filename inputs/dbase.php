<?php
try {
	$bdd=new PDO('mysql:host=localhost;dbname=example_db;','root','');
}catch(Exception $e){
	exit("Unable to connect to database.myiii mysql_error()");
	
}
?>