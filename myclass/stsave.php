<?php
include "dtbase.php";

$val = $_POST["pvals"];
print_r($val);
$str1 = "select * from student order by stindex desc";
$rs1= $bdd->query($str1) or die("error on $str1");
$row1=$rs1 -> fetch();


$stid = $row1["stindex"] + 1;
$str1 ="insert into student values($stid,'$val[0]','$val[1]','$val[2]','$val[3]')";
$ts1 = $bdd->query($str1) or die("error on $str1");
echo "Complete";

?>