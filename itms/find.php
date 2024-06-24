<?php
include 'database.php';

$vals = $_POST["values"];

$str1 = "select * from items where iCode=$vals";
$rs1 = $bdd -> query($str1) or die ("error on $str1");
$row = $rs1 -> fetch();

$strj = "<script type='text/javascript'>";
$strj.= "$('#Name').val('$row[1]');";
$strj.= "$('#Catogory').val('$row[2]');";
$strj.= "</script>";
echo $strj;
?>