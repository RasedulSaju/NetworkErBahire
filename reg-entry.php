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
echo"i am rakib";
    try {
        ///php-mysql 3 way. We will use PDO - PHP data object
        $dbcon = new PDO("mysql:host=$dbserver:$dbport;dbname=$db;", "$dbuser", "$dbpass");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sqlquery = "Insert into users (email, password) values ('$var1', '$var2')";
        echo $sqlquery;
        try {

            $returnval = $dbcon->query($sqlquery);
            $table = $returnval->fetchAll();
            ?>
            <script>
                window.location.assign('login');
            </script>
        <?php
        }
    
         catch (PDOException $ex) {
            ?>
            <script>
                window.location.assign('register');
            </script>
        <?php
        }
    } catch (PDOException $ex) {
        ?>
        <script>
            window.location.assign('register');
        </script>
    <?php
    }
} else {
    ?>
    <script>
        window.location.assign('register');
    </script>
<?php
}
?>