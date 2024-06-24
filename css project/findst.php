<?php
include "dbase.php";


$vals=$_POST["pvals"];
echo $vals;

$str1="select * from account where acode=$vals";
$rs1=$bdd->query($str1) or die("error on $str1");
$row1=$rs1->fetch();
echo "name of $row1[1]";
$strj="<script type='text/javascript'>";
$strj .="$('#acode').val('$row1[0]');";
$strj .="$('#aname').val('$row1[1]');";
$strj .="$('#acategory').val('$row1[2]');";
$strj.="</script>";
echo $strj;
echo "complete";
?>