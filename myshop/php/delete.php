<?php

include "dbconnection.php";
$id = $_POST['did'];

$str1 = "DELETE FROM clients WHERE id = $id";
$rs1 = $bdd -> query($str1) or die ("error on $str1");

?>