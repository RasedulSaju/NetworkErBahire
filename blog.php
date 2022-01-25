<?php
//ob_start();
//session_start();

$pageTitle = 'Blog';
include 'header.php';

    $search=null;
    $num=null;
    if (isset($_POST['search']))
    {
        $search= $_POST['search'];
    }

    try {
        $dbcon = new PDO("mysql:host=$dbserver:$dbport;dbname=$db;", "$dbuser", "$dbpass");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        echo $ex;
    }

   

    $delete=null;
    if(isset($_GET['bid'])) $delete=$_GET['bid'];

    $sqlquery = "DELETE 
    FROM blog
    WHERE id LIKE '$delete' ";

            try {
              $returnval = $dbcon->query($sqlquery); ///PDO Statement

} catch (PDOException $ex) {
              echo $ex;
            }




    
        $sqlquery = "SELECT * 
        FROM blog
        WHERE area LIKE '%$search%'";
    
                try {
                  $returnval = $dbcon->query($sqlquery); ///PDO Statement
    
    } catch (PDOException $ex) {
                  echo $ex;
                }
?>
      
<?php
$pageTitle = 'Welcome';
include 'header.php';
?>

<body>

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
        <form class="form-horizontal my-3" method="post" action=" ">
                            
                            <div class="form-group">
                                <h4 class="mt-5">Enter an Area:</h4>
                                <input type="text" name="search" class="form-control" id="email" placeholder="Enter an Area"/>
                                <?php
                            if(isset($_SESSION['email'])){
                            ?>
                            <a href="writeblog.php" class="btn btn-primary mb-5 mt-5 float-right" aria-label="Search" name="wb" id="wb"><strong>Write a Blog</strong></a>
                            <?php } ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
<br>
<br>
<br>
                        </form>
    
</div>
    
    <?php
    
    if($num==0)
    {?>
    <div class="container my-5">
        <div class="text-center" style="margin: 150px;">
            <h2 class="featurette-heading">Sorry no blogs found. </h2>
        </div>
    </div>
    <?php
    }
    else{
        while($details = mysqli_fetch_array($queryfire))
        {?>
            <!-- show search result -->
    
    <div class="container my-5" <?php if(!isset($_SESSION['Aemail'])) { ?> style="box-shadow: 5px 10px 10px 5px #888888;" <?php } ?> > 
            
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7 order-md-1">
                <h2 class="featurette-heading ml-3 mt-2"><?php echo $details['tittle'] ?> </h2>
                
                <form action="showblog.php" class="mb-3 ml-3 mt-2" method="post">
                <h4><span class="text-muted">Area : <?php echo $details['area'] ?></span></h4>
                <h4><span class="text-muted">Posted By : <?php echo $details['user_name'] ?></span></h4>
                <h4><span class="text-muted">Posted Time : <?php echo $details['datetime'] ?></span></h4>
                    <input type="hidden" name="did" value="<?php echo $details['id']?>">
                    <button type="submit" class="btn btn-primary mb-2 mt-3 mr-2" name="see">See More</button>
                
        <?php        if(isset($_SESSION['Aemail'])) { ?>
                        <a href="blog.php?bid=<?php echo $details['id'] ?>"><button type="button" name="delhotel" class="btn btn-primary mb-2 mt-3 ">Delete</button></a>
            <?php    } ?>
                </form>
                
            </div>
            <div class="col-md-5 order-md-2 my-3">
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