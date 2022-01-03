<?php
    $dbserver="localhost"; // Database Server or Host
    $dbuser="soft"; // Database User
    $dbpass="WareLab"; // Database User's Password
    $db="soft_travel"; // Database Name
    $dbport="3306"; // Database Port

    try {
        $dbcon = new PDO("mysql:host=$dbserver:$dbport;dbname=$db;", "$dbuser", "$dbpass");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        echo $ex;
    }
?>