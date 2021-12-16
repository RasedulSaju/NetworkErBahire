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
	<title>Welcome | Network Er Bahire</title>
	<!-- MDB icon -->
	<link rel="icon" href="img/logo.png" type="image/x-icon">
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
	<!-- <div id="mdb-preloader" class="flex-center">
		<div id="preloader-markup">
			<strong>Loading Network Er Bahire...</strong>
			<div class="spinner-grow text-primary" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
	</div> -->
	<!-- preloader ends here -->

	<!-- Start your project here -->
	<div class="container">
		<div class="flex-center">
			<!-- Application Starts Form Here -->
			<!-- Material form register -->
			<div class="card">

				<!--Card content-->
				<div class="card-body px-lg-5 pt-0">

					<!-- Form -->
					<form method="POST" class="text-center needs-validation" style="color: #757575;" action="search.php">
						<!-- Search -->
						<div class="form-row">

							<div class="col">
								<div class="md-form">
									<input type="text" id="Address" name="address" class="form-control" title="Provide Your Address" required>
									<label for="Address">Address</label>
								</div>
							</div>

							<div class="col">
								<div class="form-group">
										<?php
										$sqlquery="SELECT * FROM divisions";

										try{
											$returnval=$dbcon->query($sqlquery); ///PDO Statement

											$divisionstable=$returnval->fetchAll();
										?>
										<select name="division" class="mdb-select md-form colorful-select dropdown-primary" title="Select Division" searchable="Search Division..">
											<option value="" selected="" disabled="">Division</option>
											<?php foreach($divisionstable as $dvsdata){ ?>
											<option value="<?php echo $dvsdata['name'] ?>"><?php echo $dvsdata['name'] ?></option>
											<?php
												}
											?>
										</select>
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
							
						</div>
						
						<!-- Sign up button -->
						<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" type="submit">Search</button>

					</form>
					<!-- /. Form -->

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
