<?php
include "dtbase.php";

$stindex = $_POST["stindex"];

$str1 = "delete from student where stindex=$stindex";
$ts1 = $bdd->query($str1) or die("error on $str1");

echo "Delete Complete";
?>
