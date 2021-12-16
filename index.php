<?php include 'config.php';
try{
	$dbcon = new PDO("mysql:host=$dbserver:$dbport;dbname=$db;","$dbuser","$dbpass");
	$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Network Er Bahire</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <style>
    html,
        body,
        header,
        .jarallax {
          height: 100%;
        }

        @media (min-width: 560px) and (max-width: 740px) {
          html,
          body,
          header,
          .jarallax {
            height: 500px;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #3E4551!important;
            }
            .navbar {
              box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12) !important;
            }
        }
    </style>
</head>

<body class="intro-page travel-lp">

  <!--Navigation & Intro-->
  <header>

    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar danger-color">
      <div class="container">
        <a class="navbar-brand" href="#">
          <strong>Network Er Bahire</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!--Links-->
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#destination" data-offset="100">Destination</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact" data-offset="100">Contact</a>
            </li>
          </ul>

          <!--Social Icons-->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--/Navbar-->

    <!-- Intro Section -->
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(img/SlideBackground.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-black-strong">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row smooth-scroll">
            <div class="col-md-12 white-text text-center">
              <div class="wow fadeInDown" data-wow-delay="0.2s">
                <h2 class="display-3 font-weight-bold text-uppercase mb-2 spacing rgba-white-slight px-4 py-3">
                  <strong>Let's go</strong>
                </h2>

                <h4 class="subtext-header mt-4 mb-5">Network Er Bahire
				</h4>
              </div>
              <a href="#destination" data-offset="100" class="btn btn-white btn-rounded font-weight-bold dark-grey-text wow fadeInUp"
                data-wow-delay="0.2s">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>
  <!--/Navigation & Intro-->

  <!--Main content-->
  <main>

    <div class="container">

      <!--Section: Features v.1-->
      <section id="destination" class="mt-4">

        <!--Section heading-->
        <h4 class="text-center my-5 font-weight-bold wow fadeIn" data-wow-delay="0.2s">
          <strong>Where do you want to go?</strong>
        </h4>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">Let's visit somewhere & be <b>Network Er Bahire</b>. Search for destination below.</p>
        <!--Grid row-->
        <div class="row flex-center">

          <!--Grid column-->
          <div class="col-lg-3 col-md-6">

            <div class="md-form">
			<?php
										$sqlquery="SELECT * FROM divisions";

										try{
											$returnval=$dbcon->query($sqlquery); ///PDO Statement

											$divisionstable=$returnval->fetchAll();
										?>
										<select name="division" id="form-autocomplete-1" class="mdb-select form-control mdb-autocomplete md-form colorful-select dropdown-primary" title="Select Division" searchable="Search Division..">
											<option value="" selected="" disabled="">Division</option>
											<?php foreach($divisionstable as $dvsdata){ ?>
											<option value="<?php echo $dvsdata['name'] ?>"><?php echo $dvsdata['name'] ?></option>
											<?php
												}
											?>
										</select>

              	<!-- <input type="search" id="form-autocomplete-1" class="form-control mdb-autocomplete"> -->
              	<label for="form-autocomplete" class="active">Desitination, country</label>
				  <?php
									}
									catch(PDOException $ex){
										echo $ex;
									}
					?>
            </div>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6">
            <div class="md-form">
              <input placeholder="Selected date" type="text" id="from" class="form-control datepicker">
              <label for="date-picker-example">From</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6">
            <div class="md-form">
              <input placeholder="Selected date" type="text" id="to" class="form-control datepicker">
              <label for="date-picker-example">To</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6">
            <a class="btn btn-blue btn-rounded">Search</a>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--/Section: Features v.1-->
    </div>

    <div class="container">

      <!--Section: destination-->
      <section id="destinations" class="mt-4 mb-2">

        <!--Section heading-->
        <h4 class="text-center mb-5 mt-5 pt-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">
          <strong>Explore destination</strong>
        </h4>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-3">

            <!--Card-->
            <div class="card card-personal mb-4">

              <!--Card image-->
              <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/10.jpg" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">

                <!--Title-->
                <a>
                  <h5 class="font-weight-bold text-uppercase my-4">TATRA MOUNTAIN</h5>
                </a>

                <!--Text-->
                <p class="grey-text mt-2 font-small">Hotel:
                  <!--Review-->
                  <i class="fas fa-star blue-text ml-2"> </i>
                  <i class="fas fa-star blue-text"> </i>
                  <i class="fas fa-star blue-text"> </i>
                  <i class="fas fa-star blue-text"> </i>
                </p>
                <p class="grey-text mt-2 font-small">Price:
                  <strong class="blue-text">$350.00</strong>
                </p>
                <p class="grey-text mt-2 font-small">Duration:
                  <strong class="dark-grey-text">10 days</strong>
                </p>

                <p class="grey-text mt-2 font-small">Person:
                  <strong class="dark-grey-text">3</strong>
                </p>

                <hr>
                <!--Grid column-->
                <div class="col-12 text-center">
                  <button class="btn btn-blue btn-sm font-weight-bold btn-rounded">
                    <strong>Book a room</strong>
                  </button>
                </div>
                <!--Grid column-->

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-3">

            <!--Card-->
            <div class="card card-personal mb-4">

              <!--Card image-->
              <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/29.jpg" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Title-->
                <a>
                  <h5 class="font-weight-bold text-uppercase my-4">
                    <strong>GREECE</strong>
                  </h5>
                </a>
                <!--Text-->
                <p class="grey-text mt-2 font-small">Hotel:
                  <!--Review-->
                  <i class="fas fa-star blue-text ml-2"> </i>
                  <i class="fas fa-star blue-text"> </i>
                  <i class="fas fa-star blue-text"> </i>
                  <i class="fas fa-star blue-text"> </i>
                </p>
                <p class="grey-text mt-2 font-small">Price:
                  <strong class="blue-text">$350.00</strong>
                </p>
                <p class="grey-text mt-2 font-small">Duration:
                  <strong class="dark-grey-text">6 days</strong>
                </p>

                <p class="grey-text mt-2 font-small">Person:
                  <strong class="dark-grey-text">2</strong>
                </p>
                <hr>
                <!--Grid column-->
                <div class="col-12 text-center">
                  <button class="btn btn-blue btn-sm font-weight-bold btn-rounded">
                    <strong>Book a room</strong>
                  </button>
                </div>
                <!--Grid column-->

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-3">

            <!--Card-->
            <div class="card card-personal mb-4">

              <!--Card image-->
              <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Title-->
                <a>
                  <h5 class="font-weight-bold text-uppercase my-4">
                    <strong>ICELAND</strong>
                  </h5>
                </a>
                <!--Text-->
                <p class="grey-text mt-2 font-small">Hotel:
                  <!--Review-->
                  <i class="fas fa-star blue-text ml-2"> </i>
                  <i class="fas fa-star blue-text"> </i>
                  <i class="fas fa-star blue-text"> </i>
                  <i class="fas fa-star blue-text"> </i>
                </p>
                <p class="grey-text mt-2 font-small">Price:
                  <strong class="blue-text">$350.00</strong>
                </p>
                <p class="grey-text mt-2 font-small">Duration:
                  <strong class="dark-grey-text">8 days</strong>
                </p>

                <p class="grey-text mt-2 font-small">Person:
                  <strong class="dark-grey-text">2</strong>
                </p>
                <hr>
                <!--Grid column-->
                <div class="col-12 text-center">
                  <button class="btn btn-blue btn-sm font-weight-bold btn-rounded">
                    <strong>Book a room</strong>
                  </button>
                </div>
                <!--Grid column-->

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-3">

            <!--Card-->
            <div class="card card-personal mb-4">

              <!--Card image-->
              <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/25.jpg" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Title-->
                <a>
                  <h5 class="font-weight-bold text-uppercase my-4">
                    <strong>ITALY</strong>
                  </h5>
                </a>
                <!--Text-->
                <p class="grey-text mt-2 font-small">Hotel:
                  <!--Review-->
                  <i class="fas fa-star blue-text ml-2"> </i>
                  <i class="fas fa-star blue-text"> </i>
                  <i class="fas fa-star blue-text"> </i>
                  <i class="fas fa-star blue-text"> </i>
                </p>
                <p class="grey-text mt-2 font-small">Price:
                  <strong class="blue-text">$350.00</strong>
                </p>
                <p class="grey-text mt-2 font-small">Duration:
                  <strong class="dark-grey-text">10 days</strong>
                </p>

                <p class="grey-text mt-2 font-small">Person:
                  <strong class="dark-grey-text">3</strong>
                </p>
                <hr>
                <!--Grid column-->
                <div class="col-12 text-center">
                  <button class="btn btn-blue btn-sm font-weight-bold btn-rounded">
                    <strong>Book a room</strong>
                  </button>
                </div>
                <!--Grid column-->

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!--/Section: destination-->

    </div>

    <!--Streak-->
    <div class="streak streak-photo streak-long-2 mt-5" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg');">
      <div class="flex-center mask rgba-black-light">
        <div class="container">

          <!-- Section heading -->
          <h3 class="text-center mb-5 pb-4 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
            <strong>Some facts about us</strong>
          </h3>

          <!--First row-->
          <div class="row text-center">

            <!--First column-->
            <div class="col-md-3 mb-2">
              <h1 class="white-text mb-1 font-weight-bold">+950</h1>
              <p class="white-text text-uppercase mt-3">Happy clients</p>
            </div>
            <!--/First column-->

            <!--Second column-->
            <div class="col-md-3 mb-2">
              <h1 class="white-text mb-1 font-weight-bold">+150</h1>
              <p class="white-text text-uppercase mt-3">Projects completed</p>
            </div>
            <!--/Second column-->

            <!--Third column-->
            <div class="col-md-3 mb-2">
              <h1 class="white-text mb-1 font-weight-bold">+85</h1>
              <p class="white-text text-uppercase mt-3">Destinations</p>
            </div>
            <!--/Third column-->

            <!--Fourth column-->
            <div class="col-md-3">
              <h1 class="white-text mb-1 font-weight-bold">+246</h1>
              <p class="white-text text-uppercase mt-3">Country visited</p>
            </div>
            <!--/Fourth column-->

          </div>
          <!--First row-->
        </div>

      </div>
    </div>
    <!--/Streak-->

    <div class="container">
      <!-- Section: About -->
      <section>

        <!--Section heading-->
        <h4 class="text-center mb-5 my-5 py-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">
          <strong>Choose your destination</strong>
        </h4>

        <!--Grid row-->
        <div class="row mb-5">

          <!--Grid column-->
          <div class="col-md-3 mb-4">

            <h6 class="font-weight-bold">Italy</h6>
            <p class="font-small grey-text mb-0">Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a
              pellentesque dui, non felis.
            </p>
            <a href="" class="font-small font-weight-bold blue-text">read more
              <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
            </a>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 mb-4">

            <h6 class="font-weight-bold">Greece</h6>
            <p class="font-small grey-text mb-0">Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas
              malesuada elit lectus.
            </p>
            <a href="" class="font-small font-weight-bold blue-text">read more
              <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
            </a>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 mb-4">

            <h6 class="font-weight-bold">Iceland</h6>
            <p class="font-small grey-text mb-0">Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas
              malesuada elit lectus.
            </p>
            <a href="" class="font-small font-weight-bold blue-text">read more
              <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
            </a>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 mb-4">

            <h6 class="font-weight-bold">USA</h6>
            <p class="font-small grey-text mb-0">Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas
              malesuada elit lectus felis,
              malesuada.
            </p>
            <a href="" class="font-small font-weight-bold blue-text">read more
              <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
            </a>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row mb-5">

          <!--Grid column-->
          <div class="col-md-3 mb-4">

            <h6 class="font-weight-bold">Australia</h6>
            <p class="font-small grey-text mb-0">Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a
              pellentesque dui, non felis.
            </p>
            <a href="" class="font-small font-weight-bold blue-text">read more
              <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
            </a>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 mb-4">

            <h6 class="font-weight-bold">Egypt</h6>
            <p class="font-small grey-text mb-0">Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas
              malesuada elit lectus.
            </p>
            <a href="" class="font-small font-weight-bold blue-text">read more
              <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
            </a>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 mb-4">

            <h6 class="font-weight-bold">Brasil</h6>
            <p class="font-small grey-text mb-0">Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas
              malesuada elit lectus.
            </p>
            <a href="" class="font-small font-weight-bold blue-text">read more
              <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
            </a>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 mb-4">

            <h6 class="font-weight-bold">France</h6>
            <p class="font-small grey-text mb-0">Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas
              malesuada elit lectus felis,
              malesuada.
            </p>
            <a href="" class="font-small font-weight-bold blue-text">read more
              <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
            </a>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!-- Section: About -->

    </div>

    <div class="container-fluid">

      <!-- Section: photos -->
      <section>

        <!--Grid row-->
        <div class="row my-5">

          <!--Grid column-->
          <div class="col-md-12">

            <!--First row-->
            <div class="row">
              <!--First column-->
              <div class="col-xl-3 col-md-6 no-margins px-0">
                <!--Single blog post-->
                <div class="waves-effect waves-light">
                  <!--Blog post link-->
                  <a href="#!">
                    <!--Image-->
                    <div class="view overlay">

                      <img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid" alt="">

                      <div class="mask flex-center rgba-blue-strong">
                        <h4 class="white-text font-weight-bold">Lorem ipsum dolor sit amet</h4>
                      </div>
                    </div>
                    <!--/Image-->
                  </a>
                  <!--Blog post link-->

                </div>
                <!--/Single blog post-->
              </div>
              <!--/First column-->

              <!--Second column-->
              <div class="col-xl-3 col-md-6 no-margins px-0">
                <!--Single blog post-->
                <div class="waves-effect waves-light">
                  <!--Blog post link-->
                  <a href="#!">
                    <!--Image-->
                    <div class="view overlay">

                      <img src="https://mdbootstrap.com/img/Photos/Others/images/29.jpg" class="img-fluid" alt="">

                      <div class="mask flex-center rgba-blue-strong">
                        <h4 class="white-text font-weight-bold">Lorem ipsum dolor sit amet</h4>
                      </div>
                    </div>
                    <!--/Image-->
                  </a>
                  <!--Blog post link-->

                </div>
                <!--/Single blog post-->
              </div>
              <!--/Second column-->

              <!--Third column-->
              <div class="col-xl-3 col-md-6 no-margins px-0">
                <!--Single blog post-->
                <div class="waves-effect waves-light">
                  <!--Blog post link-->
                  <a href="#!">
                    <!--Image-->
                    <div class="view overlay">

                      <img src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" class="img-fluid" alt="">

                      <div class="mask flex-center rgba-blue-strong">
                        <h4 class="white-text font-weight-bold">Lorem ipsum dolor sit amet</h4>
                      </div>
                    </div>
                    <!--/Image-->
                  </a>
                  <!--Blog post link-->

                </div>
                <!--/Single blog post-->
              </div>
              <!--/Third column-->

              <!--Fourth column-->
              <div class="col-xl-3 col-md-6 no-margins px-0">
                <!--Single blog post-->
                <div class="waves-effect waves-light">
                  <!--Blog post link-->
                  <a href="#!">
                    <!--Image-->
                    <div class="view overlay">

                      <img src="https://mdbootstrap.com/img/Photos/Others/images/23.jpg" class="img-fluid" alt="">

                      <div class="mask flex-center rgba-blue-strong">
                        <h4 class="white-text font-weight-bold">Lorem ipsum dolor sit amet</h4>
                      </div>
                    </div>
                    <!--/Image-->
                  </a>
                  <!--Blog post link-->
                </div>
                <!--/Single blog post-->
              </div>
              <!--/Fourth column-->
            </div>
            <!--/First row-->

          </div>
          <!--/Grid column-->

        </div>
        <!--/Grid row-->

      </section>
      <!-- Section: Photos -->

    </div>

    <div class="container">

      <!-- Section: Contact v.3 -->
      <section class="contact-section my-5">

        <!-- Section heading -->
        <h4 class="font-weight-bold text-center my-5">Contact us</h4>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum
          porro a pariatur veniam.</p>


        <!-- Form with header -->
        <div class="card">

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-lg-8">

              <div class="card-body form">

                <!-- Header -->
                <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>

                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="form-contact-name" class="form-control">
                      <label for="form-contact-name" class="">Your name</label>
                    </div>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="form-contact-email" class="form-control">
                      <label for="form-contact-email" class="">Your email</label>
                    </div>
                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="form-contact-phone" class="form-control">
                      <label for="form-contact-phone" class="">Your phone</label>
                    </div>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="form-contact-company" class="form-control">
                      <label for="form-contact-company" class="">Your company</label>
                    </div>
                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-md-12">
                    <div class="md-form mb-0">
                      <textarea type="text" id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                      <label for="form-contact-message">Your message</label>
                      <a class="btn-floating btn-lg blue">
                        <i class="far fa-paper-plane"></i>
                      </a>
                    </div>
                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

              </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4">

              <div class="card-body contact text-center h-100 white-text">

                <h3 class="my-4 pb-2">Contact information</h3>
                <ul class="text-lg-left list-unstyled ml-4">
                  <li>
                    <p><i class="fas fa-map-marker-alt pr-2"></i>New York, 94126, USA</p>
                  </li>
                  <li>
                    <p><i class="fas fa-phone pr-2"></i>+ 01 234 567 89</p>
                  </li>
                  <li>
                    <p><i class="fas fa-envelope pr-2"></i>contact@example.com</p>
                  </li>
                </ul>
                <hr class="hr-light my-4">
                <ul class="list-inline text-center list-unstyled">
                  <li class="list-inline-item">
                    <a class="p2 fa-lg tw-ic">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="p2 fa-lg li-ic">
                      <i class="fab fa-linkedin-in"> </i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="p2 fa-lg ins-ic">
                      <i class="fab fa-instagram"> </i>
                    </a>
                  </li>
                </ul>

              </div>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Form with header -->

      </section>
      <!-- Section: Contact v.3 -->

    </div>

  </main>
  <!--/Main content-->

  <!--Footer-->
  <footer class="page-footer stylish-color-dark text-center text-md-left mt-4 pt-4">

    <!--Footer Links-->
    <div class="container">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">

        <!--First column-->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur adipisicing elit.</p>
        </div>
        <!--/.First column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Second column-->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
          <p>
            <a href="#!">MDBootstrap</a>
          </p>
          <p>
            <a href="#!">MDWordPress</a>
          </p>
          <p>
            <a href="#!">BrandFlow</a>
          </p>
          <p>
            <a href="#!">Bootstrap Angular</a>
          </p>
        </div>
        <!--/.Second column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Third column-->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
          <p>
            <a href="#!">Collaboriation</a>
          </p>
          <p>
            <a href="#!">Media about me</a>
          </p>
          <p>
            <a href="#!">Newsletter</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>
        </div>
        <!--/.Third column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Fourth column-->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p>
            <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!--/.Fourth column-->

      </div>
      <!-- Footer links -->

      <hr>

      <div class="row py-3 d-flex align-items-center">

        <!--Grid column-->
        <div class="col-md-7 col-lg-8">

          <!--Copyright-->
          <p class="text-center text-md-left grey-text">
            © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com
            </a>
          </p>
          <!--/.Copyright-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 col-lg-4 ml-lg-0">

          <!--Social buttons-->
          <div class="social-section text-center text-md-left">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item mx-0">
                <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                  <i class="fab fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <!--/.Social buttons-->

        </div>
        <!--Grid column-->

      </div>

    </div>

  </footer>
  <!--/.Footer-->
  <!-- SCRIPTS -->
  <?php
	}
	catch(PDOException $ex){
			echo $ex;
	}
?>
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script>
    $(function () {
      var selectedClass = "";
      $(".filter").click(function () {
        selectedClass = $(this).attr("data-rel");
        $("#gallery").fadeTo(100, 0.1);
        $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
        setTimeout(function () {
          $("." + selectedClass).fadeIn().addClass('animation');
          $("#gallery").fadeTo(300, 1);
        }, 300);
      });
    });

  </script>

  <script>
    //Animation init
    new WOW().init();

    //Modal
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

    // MDB Lightbox Init
    $(function () {
      $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
    });

  </script>

  <script>
    // Data Picker Initialization
    $('.datepicker').pickadate();

  </script>
  <script>
    var countries = [
      "Afghanistan",
      "Albania",
      "Algeria",
      "Andorra",
      "Angola",
      "Antigua and Barbuda",
      "Argentina",
      "Armenia",
      "Australia",
      "Austria",
      "Azerbaijan",
      "Bahamas",
      "Bahrain",
      "Bangladesh",
      "Barbados",
      "Belarus",
      "Belgium",
      "Belize",
      "Benin",
      "Bhutan",
      "Bolivia",
      "Bosnia and Herzegovina",
      "Botswana",
      "Brazil",
      "Brunei",
      "Bulgaria",
      "Burkina Faso",
      "Burundi",
      "Cabo Verde",
      "Cambodia",
      "Cameroon",
      "Canada",
      "Central African Republic (CAR)",
      "Chad",
      "Chile",
      "China",
      "Colombia",
      "Comoros",
      "Costa Rica",
      "Cote d'Ivoire",
      "Croatia",
      "Cuba",
      "Cyprus",
      "Czech Republic",
      "Denmark",
      "Djibouti",
      "Dominica",
      "Dominican Republic",
      "Ecuador",
      "Egypt",
      "El Salvador",
      "Equatorial Guinea",
      "Eritrea",
      "Estonia",
      "Ethiopia",
      "Fiji",
      "Finland",
      "France",
      "Gabon",
      "Gambia",
      "Georgia",
      "Germany",
      "Ghana",
      "Greece",
      "Grenada",
      "Guatemala",
      "Guinea",
      "Guinea-Bissau",
      "Guyana",
      "Haiti",
      "Honduras",
      "Hungary",
      "Iceland",
      "India",
      "Indonesia",
      "Iran",
      "Iraq",
      "Ireland",
      "Israel",
      "Italy",
      "Jamaica",
      "Japan",
      "Jordan",
      "Kazakhstan",
      "Kenya",
      "Kiribati",
      "Kosovo",
      "Kuwait",
      "Kyrgyzstan",
      "Laos",
      "Latvia",
      "Lebanon",
      "Lesotho",
      "Liberia",
      "Libya",
      "Liechtenstein",
      "Lithuania",
      "Luxembourg",
      "Macedonia (FYROM)",
      "Madagascar",
      "Malawi",
      "Malaysia",
      "Maldives",
      "Mali",
      "Malta",
      "Marshall Islands",
      "Mauritania",
      "Mauritius",
      "Mexico",
      "Micronesia",
      "Moldova",
      "Monaco",
      "Mongolia",
      "Montenegro",
      "Morocco",
      "Mozambique",
      "Myanmar (Burma)",
      "Namibia",
      "Nauru",
      "Nepal",
      "Netherlands",
      "New Zealand",
      "Nicaragua",
      "Niger",
      "Nigeria",
      "North Korea",
      "Norway",
      "Oman",
      "Pakistan",
      "Palau",
      "Palestine",
      "Panama",
      "Papua New Guinea",
      "Paraguay",
      "Peru",
      "Philippines",
      "Poland",
      "Portugal",
      "Qatar",
      "Romania",
      "Russia",
      "Rwanda",
      "Saint Kitts and Nevis",
      "Saint Lucia",
      "Saint Vincent and the Grenadines",
      "Samoa",
      "San Marino",
      "Sao Tome and Principe",
      "Saudi Arabia",
      "Senegal",
      "Serbia",
      "Seychelles",
      "Sierra Leone",
      "Singapore",
      "Slovakia",
      "Slovenia",
      "Solomon Islands",
      "Somalia",
      "South Africa",
      "South Korea",
      "South Sudan",
      "Spain",
      "Sri Lanka",
      "Sudan",
      "Suriname",
      "Swaziland",
      "Sweden",
      "Switzerland",
      "Syria",
      "Taiwan",
      "Tajikistan",
      "Tanzania",
      "Thailand",
      "Timor-Leste",
      "Togo",
      "Tonga",
      "Trinidad and Tobago",
      "Tunisia",
      "Turkey",
      "Turkmenistan",
      "Tuvalu",
      "Uganda",
      "Ukraine",
      "United Arab Emirates (UAE)",
      "United Kingdom (UK)",
      "United States of America (USA)",
      "Uruguay",
      "Uzbekistan",
      "Vanuatu",
      "Vatican City (Holy See)",
      "Venezuela",
      "Vietnam",
      "Yemen",
      "Zambia",
      "Zimbabwe"
    ];

    $('#form-autocomplete-1').mdb_autocomplete({
      data: countries
    });

  </script>
</body>

</html>
