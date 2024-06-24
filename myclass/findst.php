<?php
include "dtbase.php";

$vals = $_POST["pvals"];

$str1 = "select * from student where stindex=$vals";
$rs1= $bdd->query($str1) or die("error on $str1"); 
$row1 = $rs1 -> fetch();

$strj = "<script type='text/javascript'>";
$strj.= "$('#stindex').val('$row1[0]');";
$strj.= "$('#stname').val('$row1[1]');";
$strj.= "$('#stadd').val('$row1[2]');";
$strj.= "$('#sttel').val('$row1[3]');";
$strj.= "$('#stdob').val('$row1[4]')";
$strj.= "</script>";
echo $strj;

echo "Name of $row1[1]";

?>