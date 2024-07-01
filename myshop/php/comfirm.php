<?php
include "dbconnection.php";

$vals = $_POST['comfirm'];
$comfirm = implode (",",$vals);

$str1 = "UPDATE clients SET comfirmdata = 1 WHERE id IN ($comfirm)";
$rs1 = $bdd -> query($str1) or die ("error in $str1");
echo "Udpade comfirm Successful!";
?>