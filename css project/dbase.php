<?php 
try {
	$bdd=new PDO('mysql:host=localhost;dbname=account;','root','');
}catch(Exception $e){
	exit("Unable to connect to database.myiii mysql_error()");
	
}

?>