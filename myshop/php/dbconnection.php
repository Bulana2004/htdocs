<?php

    try {
        $bdd = new PDO ('mysql: host=localhost; dbname=myshop;', "root", "");
    }catch (Exeption $e){
        exit("Unable to Connect to database.myiii mysql_error()");
    }

?>
