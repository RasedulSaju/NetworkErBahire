<?php
session_start();
if (isset($_SESSION['role']) && ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'manager')) {
    $pageTitle = 'Prominent Spots';
    include 'header.php';
?>
    <!-- Section heading -->
    <div class="mt-lg-5 mb-5">

        <h4 class="text-left font-weight-bold dark-grey-text"><?php echo $pageTitle; ?></h4>
        <div class="card">
            <div class="card-body">
                <table id="dtMaterialDesignExample" class="table table-striped table-bordered table-hover table-sm" cellspacing="0" width="100%">
                <caption>List of <?php echo $pageTitle; ?></caption>    
                <thead>
                        <tr>
                            <th class="th-sm">Spots <i class="fas fa-sort"></i></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        try {
                            $sqlquery = "SELECT * FROM spots";

                            try {
                                $returnval = $dbcon->query($sqlquery); ///PDO Statement

                                $spotstable = $returnval->fetchAll();

                                foreach ($spotstable as $row) {
                        ?>
                                    <tr>
                                        <td><?php echo $row['name'] ?></td>
                                    </tr>

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
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Spots</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
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