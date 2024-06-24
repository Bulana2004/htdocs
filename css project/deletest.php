<?php
include "dbase.php";
 $acode= $_POST["pvals"];

$str1 = "DELETE FROM account WHERE acode= $acode";
    $rs1 = $bdd->query($str1) or die("Error on $str1");

    echo "account deleted successfully";

?>