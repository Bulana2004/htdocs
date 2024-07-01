<?php
include "dbconnection.php";

$vals = $_POST['pvals'];
$id = $_POST['id'];

if ($id) {
    // Update existing client
    $str1 = "UPDATE clients SET name = ?, email = ?, phone = ?, address = ?, gender = ? WHERE id = ?";
    $stmt = $bdd->prepare($str1);
    $stmt->execute([$vals[0], $vals[1], $vals[2], $vals[3], $vals[4], $id]);
    echo "Update Successful!";
} else {
    /* Get id desc order */
    $str1 = "SELECT * FROM clients ORDER BY id DESC";
    $rs1 = $bdd -> query ($str1) or die("error on $str1");
    $row = $rs1 -> fetch();

    /* Insert the data to database */
    $id = $row["id"] + 1;
    $str1 = "INSERT INTO clients VALUES ('$id','$vals[0]','$vals[1]','$vals[2]','$vals[3]','$vals[4]','')";
    $rs1 = $bdd -> query ($str1) or die("error on $str1");
    echo "Insert Successfully!";
}
?>