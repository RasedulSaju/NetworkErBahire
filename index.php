<?php include 'config.php';
try{
	$dbcon = new PDO("mysql:host=$dbserver:$dbport;dbname=$db;","$dbuser","$dbpass");
	$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Job Apply | Kids Fun</title>
	<!-- MDB icon -->
	<link rel="icon" href="../assets/img/logo.png" type="image/x-icon">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="css/mdb.min.css">
	<!-- Your custom styles (optional) -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- preloader starts here-->
	<div id="mdb-preloader" class="flex-center">
		<div id="preloader-markup">
			<strong>Loading Kids Fun Job Application...</strong>
			<div class="spinner-grow text-primary" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
	</div>
	<!-- preloader ends here -->

	<!-- Start your project here -->
	<div class="container">
		<div class="flex-center">
			<!-- Application Starts Form Here -->
			<!-- Material form register -->
			<div class="card">

				<h5 class="card-header info-color white-text text-center">
					<strong>Kids Fun - Application form</strong>
				</h5>

				<!--Card content-->
				<div class="card-body px-lg-5 pt-0">

					<!-- Form -->
					<form method="POST" class="text-center needs-validation was-validated" style="color: #757575;" action="submit.php" enctype="multipart/form-data">

						<!-- Full name -->
						<div class="md-form">
							<input type="text" id="Name" name="name" class="form-control" title="Provide Full Name" required>
							<label for="Name">Full name</label>
						</div>

						<!-- E-mail -->
						<div class="md-form mt-0">
							<input type="email" id="Email" name="email" class="form-control" title="Provide Email" required>
							<label for="Email">E-mail</label>
						</div>
						
						<div class="form-row">
							<!-- Day -->
							<div class="col">
								<div class="md-form">
									<input type="number" id="BirthDay" name="day" class="form-control" title="Provide Day of Birth" length="2" required>
									<label for="BirthDay">Day</label>
								</div>
							</div>
							
							<!-- Month -->
							<div class="col">
								<div class="form-group">
									<select name="month" class="mdb-select md-form colorful-select dropdown-primary" title="Select Your Birth Month" searchable="Search month.." required>
										<option value="" selected="" disabled="">Month</option>
										<option value="1">January</option>
										<option value="2">February</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">May</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">August</option>
										<option value="9">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
									<div class="invalid-feedback">Select Birth Month</div>
								</div>
						
							</div>
							
							<!-- Year -->
							<div class="col">
								<div class="md-form">
									<input type="number" id="BirthYear" name="year" class="form-control" title="Provide Year of Birth" length="4" required>
									<label for="BirthYear">Year</label>
								</div>
							</div>
						</div>
							

						<!-- Phone number -->
						<div class="md-form">
							<input type="number" id="FormPhone" name="phone" class="form-control" aria-describedby="PhoneHelpBlock" title="Provide Phone Number" length="14" required>
							<label for="FormPhone">Phone number</label>
							<small id="PhoneHelpBlock" class="form-text text-muted mb-4">
								8801XXXXXXXXX
							</small>
						</div>
						
						<br/>
						<!-- Gender -->
						<label for="Gender">Gender:</label>
						<div class="form-check form-check-inline">
							<input type="radio" class="form-check-input" id="Male" value="Male" name="gender"
							  required>
							<label class="form-check-label" for="Male">Male</label>
						</div>
						<div class="form-check form-check-inline">
							<input type="radio" class="form-check-input" id="Female" value="Female" name="gender"
							  required>
							<label class="form-check-label" for="Female">Female</label>
						</div>
						<div class="form-check form-check-inline mb-3">
							<input type="radio" class="form-check-input" id="Other" value="Other" name="gender"
							  required>
							<label class="form-check-label" for="Other">Other</label>
						</div>
						<!-- /. Gender -->
					
						<!-- Religion -->
						<div class="form-group">
							<select name="religion" class="mdb-select md-form colorful-select dropdown-primary" title="Select Your Religion" searchable="Search religion.." required>
								<option value="" selected="" disabled="">Religion</option>
								<option value="Islam">Islam</option>
								<option value="Hindu">Hindu</option>
								<option value="Christian">Christian</option>
								<option value="Buddist">Buddist</option>
								<option value="Other">Other</option>
							</select>
							<div class="invalid-feedback">Select Religion</div>
						</div>
						<!-- /. Religion -->
						
						<!-- Job Category -->
						<label for="Category">Job Category:</label>
						<div class="form-check form-check-inline">
							<input type="radio" class="form-check-input" id="Part" value="Part" name="job"
							  required>
							<label class="form-check-label" for="Part">Part Time</label>
						</div>
						<div class="form-check form-check-inline">
							<input type="radio" class="form-check-input" id="Full" value="Full" name="job"
							  required>
							<label class="form-check-label" for="Full">Full Time</label>
						</div>
						<div class="form-check form-check-inline mb-3">
							<input type="radio" class="form-check-input" id="Mixed" value="Mixed" name="job"
							  required>
							<label class="form-check-label" for="Mixed">Mixed (Part & Full Time)</label>
						</div>
						<!-- /. Job Category -->
						
						
						<div class="form-row">
							<div class="col">
								<!-- Educational Qualification -->
								<div class="md-form">
									<input type="text" id="Edu" name="edu" class="form-control" aria-describedby="EduHelpBlock"  title="Provide Your Last Completed Degree Name" required>
									<label for="Edu">Educational Qualification</label>
									<small id="EduHelpBlock" class="form-text text-muted mb-4">Completed degree: SSC, HSC, Hons, BSc</small>
								</div>
							</div>
							
							<div class="col-xs-4">
								<!-- Educational Passing Year -->
								<div class="md-form">
									<input type="number" id="EduPass" name="pyear" class="form-control" title="Provide last completed degree passing year" length="4" required>
									<label for="EduPass">Passing Year</label>
								</div>
							</div>
						</div>
						
						<!-- Address -->
						<div class="form-row">
							<div class="col">
								<div class="md-form">
									<input type="text" id="Address" name="address" class="form-control" title="Provide Your Address" required>
									<label for="Address">Address</label>
								</div>
							</div>

							<?php
	                            $sqlquery="SELECT * FROM districts";

	                            try{
	                                $returnval=$dbcon->query($sqlquery); ///PDO Statement

	                                $districtstable=$returnval->fetchAll();
	                                ?>
							<div class="col">
								<div class="form-group">
									<select name="district" class="mdb-select md-form colorful-select dropdown-primary" title="Select District" searchable="Search District.." required>
										<option value="" selected="" disabled="">District</option>
										<?php foreach($districtstable as $dstdata){ ?>
										<option value="<?php echo $dstdata['name'] ?>"><?php echo $dstdata['name'] ?></option>
								<?php
									}
								?>
									</select>
									<div class="invalid-feedback">Select District</div>
								</div>
							</div>
								<?php
									}
		                            catch(PDOException $ex){
		                                echo $ex;
		                            }
		                        $sqlquery="SELECT * FROM divisions";

	                            try{
	                                $returnval=$dbcon->query($sqlquery); ///PDO Statement

	                                $divisionstable=$returnval->fetchAll();
		                		?>
							<div class="col">
								<div class="form-group">
									<select name="division" class="mdb-select md-form colorful-select dropdown-primary" title="Select Division" searchable="Search Division.." required>
										<option value="" selected="" disabled="">Division</option>
										<?php foreach($divisionstable as $dvsdata){ ?>
										<option value="<?php echo $dvsdata['name'] ?>"><?php echo $dvsdata['name'] ?></option>
								<?php
									}
								?>
									</select>
									<div class="invalid-feedback">Select Division</div>
								</div>
							</div>
							<?php
									}
		                            catch(PDOException $ex){
		                                echo $ex;
		                            }
		                        }
		                        catch(PDOException $ex){
		                                echo $ex;
		                            }
		                		?>
							<div class="col">
								<div class="md-form">
									<input type="number" id="Zip" name="zipcode" class="form-control" title="Provide Your Post Code" length="4" required>
									<label for="Zip">Post Code</label>
								</div>
							</div>
						</div>
						<div class="md-form">
							<div class="file-field">
								<div class="btn btn-primary btn-outline-primary">
									<span>Upload Photo</span>
									<input type="file" name="photo" title="Add a recent passpost size picture" accept="image/*" data-max-file-size="2M" required>
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" placeholder="Upload a passpost size picture" title="Add a recent passpost size picture" accept="image/*" data-max-file-size="2M" >
								</div>
							</div>
						</div>
						
						<div class="md-form">
							<div class="file-field">
								<div class="btn btn-primary btn-outline-primary">
									<span>Upload NID/Birth Certificate</span>
									<input type="file" name="documents" title="Add Your NID or Birth Certificate" accept="application/pdf,image/*" data-max-file-size="2M" required>
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" placeholder="Upload NID/Birth Certificate" title="Add Your NID or Birth Certificate" accept="application/pdf,image/*" data-max-file-size="2M">
								</div>
							</div>
						</div>
						<!-- Sign up button -->
						<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" type="submit">Submit Application</button>

						

						<!-- Terms of service -->
						<!--
						<hr>
							<p>By clicking
							<em>Sign up</em> you agree to our
							<a href="" target="_blank">terms of service</a>-->

					</form>
					<!-- Form -->

				</div>

			</div>
			<!-- Material form register -->
			<!-- Application Ends Form Here -->
		</div>
	</div>
	<!-- End your project here-->

	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<!-- Your custom scripts (optional) -->
	<script type="text/javascript">
		// Material Select Initialization
		$(document).ready(function() {
		$('.mdb-select').materialSelect();
		});
	</script>

</body>
</html>
