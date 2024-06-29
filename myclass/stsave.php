<?php
include "dtbase.php";

$vals = $_POST["pvals"];
$stindex = $_POST["stindex"];

if($stindex) {
    $str1 = "update student set stname='$vals[0]', stadd='$vals[1]', sttel='$vals[2]', stdob='$vals[3]' where stindex=$stindex";
    $ts1 = $bdd->query($str1) or die("error on $str1");
    echo "Update Complete";
} else {
    $str1 = "select * from student order by stindex desc";
    $rs1 = $bdd->query($str1) or die("error on $str1");
    $row1 = $rs1->fetch();

    $stid = $row1["stindex"] + 1;
    $str1 = "insert into student values($stid,'$vals[0]','$vals[1]','$vals[2]','$vals[3]')";
    $ts1 = $bdd->query($str1) or die("error on $str1");
    echo "Insert Complete";
}
?>
