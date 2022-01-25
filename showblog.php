<?php

$pageTitle = 'show blog';
include 'header.php';

    $did=null;
    if(isset($_POST['did'])) $did=$_POST['did'];
    

    try {
        $dbcon = new PDO("mysql:host=$dbserver:$dbport;dbname=$db;", "$dbuser", "$dbpass");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        echo $ex;
    }
    
    
$sqlquery = "SELECT * 
FROM blog
WHERE id LIKE '$did' ";

            try {
              $returnval = $dbcon->query($sqlquery); ///PDO Statement

} catch (PDOException $ex) {
              echo $ex;
            }
    
    $details = mysqli_fetch_array($queryfire);
//print_r ($details);
// echo '<img src="data:image/jpeg;base64,'.base64_encode( $details['image'] ).'"alt="" width="300" height="300" style="border:5px solid black/>';

 include 'footer.php'; ?>