<?php
include 'config.php';

if (
    isset($_POST['email']) && isset($_POST['pass'])
    && !empty($_POST['email']) && !empty($_POST['pass'])
) {
    /// data receive
    /// database check email, password
    /// yes, forward homepage
    /// no, forward loginpage

    $var1 = $_POST['email'];
    $var2 = $_POST['pass']; //md5($_POST['pass']);

    try {
        ///php-mysql 3 way. We will use PDO - PHP data object
        $dbcon = new PDO("mysql:host=$dbserver:$dbport;dbname=$db;", "$dbuser", "$dbpass");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sqlquery = "SELECT email, role FROM users WHERE email='$var1' and password='$var2'";
        //echo $sqlquery;
        try {
            $returnval = $dbcon->query($sqlquery);
            $table = $returnval->fetchAll();
            if ($returnval->rowCount() == 1) {
                $usertype = $table[0]['role'];
                ///one valid user found
                session_start();

                $_SESSION['email'] = $var1;
                $_SESSION['role'] = $usertype;

                //echo $var1;
                //echo $usertype;

                if ($usertype == 'admin') {
?>
                    <script>
                        window.location.assign('../NetworkErBahire');
                    </script>
                <?php
                } else if ($usertype == 'manager') {
                ?>
                    <script>
                        window.location.assign('../NetworkErBahire');
                    </script>
                <?php
                } else if ($usertype == 'user') {
                ?>
                    <script>
                        window.location.assign('../NetworkErBahire');
                    </script>
                <?php
                }
            } else {
                ///invalid user
                ?>
                <script>
                    window.location.assign('register');
                </script>
            <?php
            }
        } catch (PDOException $ex) {
            ?>
            <script>
                window.location.assign('login');
            </script>
        <?php
        }
    } catch (PDOException $ex) {
        ?>
        <script>
            window.location.assign('login');
        </script>
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