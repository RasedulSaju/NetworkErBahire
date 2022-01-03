<?php
include 'config.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo $pageTitle; ?> | Network Er Bahire</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php
    try {
        $dbcon = new PDO("mysql:host=$dbserver:$dbport;dbname=$db;", "$dbuser", "$dbpass");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        echo $ex;
    }
    ?>


    <!--Navigation & Intro-->
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar danger-color">
            <div class="container">
                <a class="navbar-brand waves-effect" href="../NetworkErBahire/">
                    <strong>Network Er Bahire</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!--Links-->
                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="../NetworkErBahire/#home">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../NetworkErBahire/#destination" data-offset="100">Destination</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../NetworkErBahire/#contact" data-offset="100">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog" data-offset="100">Blog</a>
                        </li>
                    </ul>
                    <?php
                    if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                    ?>
                        <ul class="navbar-nav ml-auto nav-flex-icons">
                            <li class="nav-item">
								<a class="nav-link" href="profile"><?php echo $_SESSION['email'] ?></a>
							</li>
                            <li class="nav-item avatar dropdown">
                                <a class="nav-link dropdown-toggle" id="admin-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/admin.jpg" class="rounded-circle z-depth-0" alt="avatar image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="admin-dropdown">
                                    <a class="dropdown-item" href="admin/">Admin</a>
                                    <a class="dropdown-item" href="profile">Profile</a>
                                    <a class="dropdown-item" href="logout">Logout</a>
                                </div>
                            </li>
                        </ul>
                    <?php
                    } else if (isset($_SESSION['role']) && $_SESSION['role'] == 'manager') {
                    ?>
                        <ul class="navbar-nav ml-auto nav-flex-icons">
                            <li class="nav-item">
								<a class="nav-link" href="profile"><?php echo $_SESSION['email'] ?></a>
							</li>
                            <li class="nav-item avatar dropdown">
                                <a class="nav-link dropdown-toggle" id="manager-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/manager.png" class="rounded-circle z-depth-0" alt="avatar image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="manager-dropdown">
                                    <a class="dropdown-item" href="admin/">Admin</a>
                                    <a class="dropdown-item" href="profile">Profile</a>
                                    <a class="dropdown-item" href="logout">Logout</a>
                                </div>
                            </li>
                        </ul>
                    <?php
                    } else if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
                    ?>
                        <ul class="navbar-nav ml-auto nav-flex-icons">
                            <li class="nav-item">
								<a class="nav-link" href="profile"><?php echo $_SESSION['email'] ?></a>
							</li>
                            <li class="nav-item avatar dropdown">
                                <a class="nav-link dropdown-toggle" id="user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/user.png" class="rounded-circle z-depth-0" alt="avatar image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="user-dropdown">
                                    <a class="dropdown-item" href="profile">Profile</a>
                                    <a class="dropdown-item" href="logout">Logout</a>
                                </div>
                            </li>
                        </ul>
                    <?php
                    } else {
                    ?>
                        <ul class="navbar-nav ml-auto smooth-scroll">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navright-profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user"></i> Profile </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-danger" aria-labelledby="navright-profile">
                                    <a class="dropdown-item" href="login"><i class="fas fa-sign-in-alt"></i> Login</a>
                                    <a class="dropdown-item" href="register"><i class="fas fa-user-plus"></i> Register</a>
                                </div>
                            </li>
                        </ul>
                    <?php
                    }
                    ?>
                </div>

            </div>

        </nav>
        <!-- /. Navbar-->