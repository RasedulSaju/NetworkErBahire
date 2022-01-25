<?php
$pageTitle = 'Welcome';
include 'header.php';
?>
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

            <h4 class="subtext-header mt-4 mb-5">Network Er Bahire</h4>
          </div>
          <a href="#destination" data-offset="100" class="btn btn-white btn-rounded font-weight-bold dark-grey-text wow fadeInUp" data-wow-delay="0.2s">Show more</a>
        </div>
      </div>
    </div>
  </div>
</div>

</header>
<!-- /. Navigation & Intro -->

<!--Main content-->
<main>

  <div class="container">

    <!-- Section: Features v.1 -->
     <section id="destination" class="mt-4 wow fadeInDown">

      <!--Section heading-->
      <h4 class="text-center my-5 font-weight-bold wow fadeIn" data-wow-delay="0.2s">
        <strong>Where do you want to go?</strong>
      </h4>
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">Let's visit somewhere & be <b>Network Er Bahire</b> for a while. Search for destination below.</p>
      <!-- Grid row . Division Search -->
      <div class="row flex-center">

        <!-- Grid column-->
        <div class="col-lg-6 col-md-6">

          <div class="md-form form-lg">
            <?php
            $sqlquery = "SELECT * FROM divisions";

            try {
              $returnval = $dbcon->query($sqlquery); ///PDO Statement

              $divisionstable = $returnval->fetchAll();
            ?>
              <select name="division" id="DiviSrch" class="mdb-select mdb-autocomplete md-form colorful-select dropdown-primary custom-select-lg" title="Select Division" searchable="Search Division...">
                <option value="" selected="" disabled="">Find Division</option>
                <?php foreach ($divisionstable as $dvsdata) { ?>
                  <option value="<?php echo $dvsdata['name'] ?>"><?php echo $dvsdata['name'] ?></option>
                <?php
                }
                ?>
              </select>

            <?php
            } catch (PDOException $ex) {
              echo $ex;
            }
            ?>
          </div>
        </div>

        <!-- Grid column . Search btn -->
        <div class="col-lg-6 col-md-6">
          <a id="diviSrchBtn" class="btn btn-blue btn-rounded">Search Division</a>
        </div>
        <!-- /. Grid column . Search Btn -->

        <script>
          var srcbtn = document.getElementById('diviSrchBtn');
          srcbtn.addEventListener('click', searchprocess);

          function searchprocess() {
            var searchvalue = document.getElementById('DiviSrch').value;
            window.location.assign("search?t=d&v=" + searchvalue);
          }
        </script>
        <!--Grid column-->
      </div>
      <!-- /. Grid row . Division Search -->

      <!-- Grid row . Prominent Spots Search -->
      <div class="row flex-center">

        <!--Grid column-->
        <div class="col-lg-6 col-md-6">

          <div class="md-form">
            <?php
            $sqlquery = "SELECT * FROM spots";

            try {
              $returnval = $dbcon->query($sqlquery); ///PDO Statement

              $spotstable = $returnval->fetchAll();
            ?>
              <select name="division" id="promSpotSrch" class="mdb-select mdb-autocomplete md-form colorful-select custom-select-lg dropdown-default" title="Select Spot" searchable="Search Spot...">
                <option value="" selected="" disabled="">Find Prominent Spot</option>
                <?php foreach ($spotstable as $sptsdata) { ?>
                  <option value="<?php echo $sptsdata['name'] ?>"><?php echo $sptsdata['name'] ?></option>
                <?php
                }
                ?>
              </select>

            <?php
            } catch (PDOException $ex) {
              echo $ex;
            }
            ?>
          </div>
        </div>

        <!-- Grid column . Search btn -->
        <div class="col-lg-6 col-md-6">
          <a id="promSpotSrchBtn" class="btn btn-default btn-rounded">Search Spot</a>
        </div>
        <!-- /. Grid column . Search Btn -->

        <script>
          var srcbtn = document.getElementById('promSpotSrchBtn');
          srcbtn.addEventListener('click', searchprocess);

          function searchprocess() {
            var searchvalue = document.getElementById('promSpotSrch').value;
            window.location.assign("search?t=s&v=" + searchvalue);
          }
        </script>
        <!-- Grid column -->
      </div>
      <!-- /. Grid row . Prominent Spots Search -->

      <!-- Grid row . Hotels or Resorts Search -->
      <div class="row flex-center">

        <!--Grid column-->
        <div class="col-lg-6 col-md-6">

          <div class="md-form">
            <?php
            $sqlquery = "SELECT * FROM hotels";

            try {
              $returnval = $dbcon->query($sqlquery); ///PDO Statement

              $htlrsttable = $returnval->fetchAll();
            ?>
              <select name="division" id="htlrsrtSrch" class="mdb-select mdb-autocomplete md-form colorful-select custom-select-lg dropdown-secondary" title="Select Spot" searchable="Search Hotel or Resort...">
                <option value="" selected="" disabled="">Find Hotels or Resorts</option>
                <?php foreach ($htlrsttable as $hrsdata) { ?>
                  <option value="<?php echo $hrsdata['name'] ?>"><?php echo $hrsdata['name'] ?></option>
                <?php
                }
                ?>
              </select>

            <?php
            } catch (PDOException $ex) {
              echo $ex;
            }
            ?>
          </div>
        </div>

        <!-- Grid column . Search btn -->
        <div class="col-lg-6 col-md-6">
          <a id="htlrsrtSrchBtn" class="btn btn-secondary btn-rounded">Search Hotel or Resort</a>
        </div>
        <!-- /. Grid column . Search Btn -->

        <script>
          var srcbtn = document.getElementById('htlrsrtSrchBtn');
          srcbtn.addEventListener('click', searchprocess);

          function searchprocess() {
            var searchvalue = document.getElementById('htlrsrtSrch').value;
            window.location.assign("search?t=hr&v=" + searchvalue);
          }
        </script>
        <!-- Grid column -->
      </div>
      <!-- /. Grid row . Hotels or Resorts Search -->

    </section>
    <!--/ Section: Features v.1-->
  </div>

  <!-- /. Search Section -->


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
                      <h4 class="white-text font-weight-bold">Bandarban</h4>
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
                      <h4 class="white-text font-weight-bold">Saintmartin</h4>
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
                      <h4 class="white-text font-weight-bold">Sajek valley</h4>
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
                      <h4 class="white-text font-weight-bold">sylhet</h4>
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
  <div class="streak streak-photo streak-long-2 mt-5" style="background-image: url('img/SlideBackground.jpg');">
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

  <div class="container">

    <!-- Section: Contact v.3 -->
    <section id="contact" class="contact-section my-5">

      <?php include 'contact.php'; ?>

    </section>
    <!-- Section: Contact v.3 -->

  </div>

</main>
<!--/Main content-->
<?php include 'footer.php'; ?>