<?php
session_start();
if (isset($_SESSION['role']) && ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'manager')) {
    $pageTitle = 'Page Name';
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