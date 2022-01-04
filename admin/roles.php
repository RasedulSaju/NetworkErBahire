<?php
session_start();
if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'manager') {
    $pageTitle = 'Roles';
    include 'header.php';
?>
<!-- Section heading -->
<div class="mt-lg-5 mb-5">

<h4 class="text-left font-weight-bold dark-grey-text">Roles</h4>
<?php
                try {
                    $dbcon = new PDO("mysql:host=$dbserver:$dbport;dbname=$db;", "$dbuser", "$dbpass");
                    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sqlquery = "SELECT * FROM roles";

                    try {
                        $returnval = $dbcon->query($sqlquery); ///PDO Statement

                        $rolestable = $returnval->fetchAll();

                        foreach ($rolestable as $row) {
                ?>
                            <p class="grey-text mt-3"><?php echo $row['role'] ?></p>

                        <?php
                        }
                    } catch (PDOException $ex) {
                        ?>
                        <p class="grey-text mt-3">Data read error ...</p>
                    <?php
                    }
                } catch (PDOException $ex) {
                    ?>
                    <p class="grey-text mt-3">Data read error ... ...</p>
                <?php
                }
                ?>
<hr>
    </div>

    <?php include 'footer.php'; ?>
<?php
} else {
?>
    <script>
        window.location.assign('../');
    </script>
<?php
}
?>