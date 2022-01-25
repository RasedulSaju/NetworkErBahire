<?php
$pageTitle = 'Welcome';
include 'header.php';
?>

    $search = null;
    $num = null;

    if (isset($_POST['search']))
    {
        $search = $_POST['search'];
        $query= "SELECT * 
             FROM tour_guide
             WHERE area LIKE '%$search%' ";
             $queryfire = mysqli_query($con,$query); 
             $num = mysqli_num_rows($queryfire);

    }
    elseif (isset($_GET['areaname']))
    {
        $search = $_GET['areaname'];
        $query= "SELECT * 
             FROM tour_guide
             WHERE area LIKE '$search' ";
             $queryfire = mysqli_query($con,$query);
             $num = mysqli_num_rows($queryfire);

    }
    else
    {
        $query= "SELECT * FROM `tour_guide` WHERE 1  ";
             $queryfire = mysqli_query($con,$query);
             $num = mysqli_num_rows($queryfire);
       
    }
     

    




    if(isset($_POST['id']))
    {
        $t_id= $_POST['id'];
        
        $query1= "DELETE FROM `tour_guide` WHERE id LIKE '$t_id'";

        if($con->query($query1) === TRUE) 
        {
          ?>
          <script>alert("Remove Successfully!!!") </script>
          <?php
          header("Location:add_remove_tourguide.php");
        } 
        else 
        {
         ?>
          <script>alert("Remove Failed??") </script>
          <?php
        }
     
    

    }

   
?>
    
    
    
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <title>Ghure Ashi</title>
</head>

<body>
     <!-- Navbar started -->
     <?php
       include("navbar.php");
      ?>
    <!-- Navbar end -->

    <!-- login modal start -->
    <!-- Button trigger modal -->
        <!--login  Modal -->
        <div class="modal fade" id="logineModal" tabindex="-1" role="dialog" aria-labelledby="logineModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logineModalLabel">Log In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action=LogSign.php>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="emaill" id="emaill" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email" />
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="passl" id="passl" type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password" />
                        </div>

                        <button type="submit" class="btn btn-primary" name="submitl" id="submitl">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- login modal end -->

    <!-- sign up modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Sign up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="LogSign.php">
                        <div class="form-group">
                            <label for="username" >Username</label>
                            <input name="name" id="name" type="text" class="form-control" id="username" aria-describedby="usernameHelp"
                                placeholder="Enter Username"  />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" >Email address</label>
                            <input name="email" id="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email" />
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" >Password</label>
                            <input name="pass" id="pass" type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label for="contactno" >Contact No.</label>
                            <input name="contact" id="contact" type="text" class="form-control" id="contactno" aria-describedby="contactnoHelp"
                                placeholder="Enter Your Contact Number" />
                        </div>
                        
                        <div class="form-group">
                            <label for="address" >Address</label>
                            <input name="address" id="address" type="text" class="form-control" id="contactno" aria-describedby="contactnoHelp"
                                placeholder="Enter Your Contact Number" />
                        </div>
                        
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0" >Gender</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                            value="option1" checked />
                                        <label class="form-check-label" for="gridRadios1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                            value="option2" />
                                        <label class="form-check-label" for="gridRadios2">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up modal end -->


    <!-- show search result -->
    <div class="container">
        <form class="form-horizontal mx-3 my-3" method="post" action=" ">
                            <?php
                            if(isset($_SESSION['Aemail'])){
                            ?>
                           
                            <div class="form-group">
                                <h4 class="mt-4">Enter an Area:</h4>
                                <input type="text" name="search" class="form-control" id="email" placeholder="Enter an Area"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                             <a href="write_tourguide.php" class="btn btn-primary mb-5 mt-1 float-right" aria-label="Search" name="wb" id="wb"><strong>Add new  Tourguide</strong></a><br><br>
                            <?php } ?>
<br>
                        </form>
    </div>
    <?php
    
    if($num == 0)
    {?>
    <div class="container my-5">
        <div class="text-center" style="margin: 150px;">
            <h2 class="featurette-heading">Sorry No Tour Guide Found. </h2>
        </div>
    </div>
    <?php
    }
    else{
        while($details = mysqli_fetch_array($queryfire))
        {?>
            <!-- show search result -->
    <div class="container my-5">
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7 order-md-1">
                <form action="add_remove_tourguide.php" class="mb-3" method="post">
                 <h2 class="featurette-heading">ID: <?php echo $details['id'] ?> </h2>
                <h4><span class="text-muted">Name: <?php echo $details['name'] ?></span></h4>
                <p class="lead">Area: <?php echo $details['area'] ?></p>
    <p class="lead">NID : <?php echo $details['NID'] ?></p>
                <p class="lead">Contact: <?php echo $details['contact'] ?></p>
                <p class="lead">Hire Rate: <?php echo $details['hire_rate'] ?></p>
                <input type="hidden" name="id" value="<?php echo $details['id']?>">
                <button type="submit" class="btn btn-primary mb-2 mt-3 mr-2" name="Remove">Remove</button>
                </form>   
            </div>
            <div class="col-md-5 order-md-2">
                <?php echo '<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" src="data:image/jpeg;base64,'.base64_encode( $details['image'] ).'"alt="" style="border:5px solid black"/>';?>
            </div>
        </div>
    </div>
    <!-- show search result end -->
     <?php   }
    }
    
    ?>

<?php include 'footer.php'; ?>

    