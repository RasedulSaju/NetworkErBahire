<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

    <!-- SideNav slide-out button -->
    <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
    </div>

    <!-- Breadcrumb -->
    <div class="breadcrumb-dn mr-auto">
        <p>Network Er Bahire</p>
    </div>

    <!-- Mode Change starting -->
    <!-- <div class="d-flex change-mode">

        <div class="ml-auto mb-0 mr-3 change-mode-wrapper">
            <button class="btn btn-outline-black btn-sm" id="dark-mode">Change Mode</button>
        </div> -->
        <!-- /. Mode Change starting -->

        <!-- Navbar links -->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
                <a href="../../NetworkErBahire/" class="nav-link waves-effect"><i class="fas fa-globe"></i> <span class="clearfix d-none d-sm-inline-block">Main Site</span></a>
            </li>
            <!-- Dropdown -->

            <!-- Notifications -->
            <!-- <li class="nav-item dropdown notifications-nav">
                <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="badge red">3</span> <i class="fas fa-bell"></i>
                    <span class="d-none d-md-inline-block">Notifications</span>
                </a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">
                        <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                        <span>New order received</span>
                        <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 13 min</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                        <span>New order received</span>
                        <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 33 min</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
                        <span>Your campaign is about to end</span>
                        <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 53 min</span>
                    </a>
                </div>
            </li> -->
            <!-- Notifications -->
            
            <!-- <li class="nav-item">
                <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
            </li> -->

            <?php
            if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
            ?>
                <li class="nav-item avatar dropdown">
                    <a class="nav-link waves-effect dropdown-toggle" id="admin-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['email'] ?> <img src="../user/<?php echo $_SESSION['role'] ?>.jpg" class="rounded-circle z-depth-0" alt="avatar image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-success" aria-labelledby="admin-dropdown">
                        <a class="dropdown-item" href="../profile">Profile</a>
                        <a class="dropdown-item" href="../logout">Logout</a>
                    </div>
                </li>
            <?php
            } else if (isset($_SESSION['role']) && $_SESSION['role'] == 'manager') {
            ?>
                <li class="nav-item avatar dropdown">
                    <a class="nav-link waves-effect dropdown-toggle" id="manager-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['email'] ?> <img src="../user/<?php echo $_SESSION['role'] ?>.jpg" class="rounded-circle z-depth-0" alt="avatar image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg-right dropdown-success" aria-labelledby="manager-dropdown">
                        <a class="dropdown-item" href="../profile">Profile</a>
                        <a class="dropdown-item" href="../logout">Logout</a>
                    </div>
                </li>
            <?php
            }
            ?>
        </ul>
        <!-- Navbar links -->

    <!-- Mode Change Ending -->
    <!-- </div> -->
    <!-- /. Mode Change Ending -->

</nav>
<!-- Navbar -->