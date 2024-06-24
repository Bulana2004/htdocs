<?php
include 'database.php';

$values = $_POST["sbvalues"];
$str1 = "select * from items order by iCode desc";
$rs1 = $bdd -> query($str1) or die ("error on $str1");
$row = $rs1 -> fetch();

$iid = $row["iCode"] + 1;
$str1 ="insert into items (`iCode`, `iName`, `catagort`) values($iid,'$values[0]','$values[1]')";
$ts1 = $bdd->query($str1) or die("error on $str1");
echo "Complete!"
?>