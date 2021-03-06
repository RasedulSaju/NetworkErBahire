<?php
$pageTitle = 'Search';
include 'header.php';
?><br>

<?php
if (isset($_GET['t']) && isset($_GET['v']) && !empty($_GET['t']) && !empty($_GET['v'])) {
    if ($_GET['t'] == 'd') {
        $tableName = 'divisions';
    } elseif ($_GET['t'] == 's') {
        $tableName = 'spots';
    } elseif ($_GET['t'] == 'hr') {
        $tableName = 'hotels';
    }
?>
<h3>Search - <q><b><?php echo $_GET['v'] ?></b></q></h3>
    <table>
        <br><br>
        <tbody>
            <?php
            try {
                $dbcon = new PDO("mysql:host=$dbserver:$dbport;dbname=$db;", "$dbuser", "$dbpass");
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $searchval = $_GET['v'];
                $sqlquery = "";
                if (!empty($searchval)) {
                    $sqlquery = "SELECT * FROM $tableName where name LIKE '%$searchval%'";
                }

                try {
                    $returnval = $dbcon->query($sqlquery); ///PDO Statement

                    $productstable = $returnval->fetchAll();

                    foreach ($productstable as $row) {
            ?>
                        <div class="container">


                            
                                <h3 class="text-warning"><?php echo $row['name'] ?></h3>
                            
        </tbody>
    </table>

    <form method="POST" action="bookingConfirmed.html">
        <div class="col-lg-3 col-md-6">
            <div class="md-form">
                <input placeholder="Selected date" type="text" id="from" class="form-control datepicker">
                <label for="date-picker-example">From</label>
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6">
            <div class="md-form">
                <input placeholder="Selected date" type="text" id="to" class="form-control datepicker">
                <label for="date-picker-example">To</label>
            </div>
        </div>

        <!--Grid column-->
        <div class="col-lg-3 col-md-6">
            <div class="md-form">
                <input type="submit" class="btn btn-rounded blue-gradient" value="Book">
            </div>
        </div>

    </form>



    <!-- Date Picker -->
    <!--Grid column-->

    <!--Grid column-->
    <!-- /. Date Picker -->
<?php
                    }
                } catch (PDOException $ex) {
?>
<tr>
    <td colspan="2">Data read error ... ...</td>
</tr>
<?php
                }
            } catch (PDOException $ex) {
?>
<tr>
    <td colspan="2">Data read error...</td>
</tr>
<?php
            }
?>


<?php
} else {
?>
    <h1>Search Data Not Found</h1>
<?php
}
?>
<?php include 'footer.php' ?>