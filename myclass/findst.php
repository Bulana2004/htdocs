<?php
include "dtbase.php";

$vals = $_POST["pvals"];

$str1 = "select * from student where stindex=$vals";
$rs1= $bdd->query($str1) or die("error on $str1"); 
$row1 = $rs1->fetch();

$strj = "<script type='text/javascript'>";
$strj .= "$('#stindex').val('$row1[stindex]');";
$strj .= "$('#stname').val('$row1[stname]');";
$strj .= "$('#stadd').val('$row1[stadd]');";
$strj .= "$('#sttel').val('$row1[sttel]');";
$strj .= "$('#stdob').val('$row1[stdob]');";
$strj .= "</script>";
echo $strj;

echo "Name of $row1[stname]";
?>
