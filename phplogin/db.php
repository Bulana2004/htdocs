<?php
try{

$db = new PDO ('mysql:host=localhost; dbname=php_login_test; charset=utf8', 'root', '');

}catch(Exception $e){
    die('Connection error: ' . $e->getMassage() );
}
?>