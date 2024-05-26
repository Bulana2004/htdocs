<?php
include "dtbase.php";

$vals = $_POST["pvals"];

$str1 = "select * from student where stindex=$vals";
$rs1= $bdd->query($str1) or die("error on $str1"); 
$row1 = $rs1 -> fetch();

echo "Name of $row1[1]";
echo " complete";

?>