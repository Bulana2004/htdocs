<?php
include 'dbase.php';

$vals = $_POST["input"];
print_r($vals);
$stid = 001;
$str1 = "insert into inputs values($stid,'$vals[0]','$vals[1]','$vals[2]')";
$ts1 = $bdd->query($str1) or die("error on $str1");
echo "Complete";

?>