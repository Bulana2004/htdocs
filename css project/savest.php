<?php
include "dbase.php";

$vals=$_POST["pvals"];
echo $vals;
print_r($vals);
$str1="select * from account order by acode desc";
$rs1=$bdd->query($str1)or die("error on $str1");
$row1=$rs1->fetch();

$acode=$row1[0]+1;
if ($vals[2]==0){
	
$str1="insert into account values($acode,'$vals[0]','$vals[1]')";
}
else{
$str1="update account set aname='$vals[0]',acategory='$vals[1]' where acode='$vals[2]'";
}
$ts1=$bdd->query($str1)or die("error on $str1");

echo"complete";

?>