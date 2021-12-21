<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search | Network Er Bahire</title>
    <link href="logo.jpg" rel="icon"/>
</head>
<body>
    <h3>Search - <q><b><?php echo $_GET['v'] ?></b></q></h3>
    <?php
        if(isset($_GET['t']) && isset($_GET['v']) && !empty($_GET['t']) && !empty($_GET['v'])){
            if ($_GET['t'] == 'd'){
                $tableName='divisions';
            }
            elseif ($_GET['t'] == 's'){
                $tableName='spots';
            }
            elseif ($_GET['t'] == 'hr'){
                $tableName='hotels';
            }
        ?> 
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        try{
                            $dbcon = new PDO("mysql:host=$dbserver:$dbport;dbname=$db;","$dbuser","$dbpass");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            $searchval=$_GET['v'];
                            $sqlquery="";
                            if(!empty($searchval)){
                                $sqlquery="SELECT * FROM $tableName where name LIKE '%$searchval%'";
                            }
                            
                            try{
                                $returnval=$dbcon->query($sqlquery); ///PDO Statement
                                
                                $productstable=$returnval->fetchAll();
                                
                                foreach($productstable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['name'] ?></td>
                                        </tr>
                                    <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="2">Data read error ... ...</td>    
                                    </tr>
                                <?php
                            }
                            
                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="2">Data read error...</td>    
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>

    <?php
    }
    else{
        ?>
        <h1>Search Data Not Found</h1>
        <?php
    }
    ?>
</body>
</html>