<?php
include "dtbase.php";

$val = $_POST["pvals"];
print_r($val);
$stid = 110;

$str1 ="insert into student values($stid,'$val[0]','$val[1]','$val[2]','$val[3]')";
$ts1 = $bdd->query($str1) or die("error on $str1");
echo "Complete";

?>