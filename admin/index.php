<?php
session_start();
if (isset($_SESSION['role']) && ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'manager')) {
    $pageTitle = 'Dashboard';
    include 'header.php';
?>



<?php include 'footer.php';
} else {
?>
    <script>
        window.location.assign('../');
    </script>
<?php
}
?>