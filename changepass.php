<?php
session_start();
if (isset($_SESSION['email'])) {
    $pageTitle = 'Change Password';
    include 'header.php';
    $email = $_SESSION['email'];
    $role = $_SESSION['role'];
    try {
        $sqlquery = "SELECT * FROM users where email='$email'";
        try {
            $returnval = $dbcon->query($sqlquery); ///PDO Statement

            $userinfo = $returnval->fetchAll();
            foreach ($userinfo as $userdata);
?>

            <!-- Main layout -->
            <main>
                <br><br><br>
                <div class="container-fluid">
                    <section class="section">
                        <div class="row">
                            <!-- Second column -->
                            <div class="col-md-6 mb-4 mx-auto">

                                <!-- Card -->
                                <div class="card card-cascade narrower wow rollIn">

                                    <!-- Card image -->
                                    <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                                        <h5 class="mb-0 font-weight-bold">Change Password</h5>
                                    </div>
                                    <!-- Card image -->

                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade text-center">

                                        <!-- Edit Form -->
                                        <form method="POST" action="updatepass.php">
                                            <!-- row -->
                                            <div class="row">

                                                <!-- First column -->
                                                <div class="col-md-12">
                                                    <div class="md-form mb-0">
                                                        <input type="text" id="oldpass" class="form-control form-control-lg required validate">
                                                        <label for="oldpass">Old Password</label>
                                                    </div>
                                                </div>
                                                <!-- Second column -->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="md-form mb-0">
                                                        <input type="text" id="newpass" class="form-control form-control-lg required validate">
                                                        <label for="newpass">New Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- row -->

                                            <!-- Fourth row -->
                                            <div class="row">
                                                <div class="col-md-12 text-center my-4">
                                                    <input type="submit" value="Update Password" class="btn btn-info btn-rounded">
                                                </div>
                                            </div>
                                            <!-- Fourth row -->

                                        </form>
                                        <!-- Edit Form -->

                                    </div>
                                    <!-- Card content -->

                                </div>
                                <!-- Card -->

                            </div>
                            <!-- Second column -->

                        </div>
                    </section>
                </div>
            </main>
            <!-- Main layout -->
        <?php include 'footer.php';
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
} else {
    ?>
    <script>
        window.location.assign('login');
    </script>
<?php
}
?>