<?php
$pageTitle = 'Register';
include 'header.php';
?>
<!-- Intro Section -->
<section class="login-page lview intro-2" style="background-image: url(img/register-back.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <div class="mask rgba-indigo-light h-100 d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

          <!-- Form with header -->
          <div class="card wow fadeInDown" data-wow-delay="0.3s">
            <div class="card-body">

              <!-- Header -->
              <div class="form-header ripe-malinka-gradient">
                <h3>Sign Up:</h3>
              </div>

              <!-- Body -->
              <div class="md-form mb-0">
                <i class="fas fa-envelope prefix white-text"></i>
                <input type="text" id="orangeForm-email" class="form-control">
                <label for="orangeForm-email">Your email</label>
              </div>

              <div class="md-form mb-0">
                <i class="fas fa-lock prefix white-text"></i>
                <input type="password" id="orangeForm-pass" class="form-control">
                <label for="orangeForm-pass">Your password</label>
              </div>

              <div class="text-center">
                <button class="btn rare-wind-gradient btn-lg">Sign up</button>
                <hr>
              </div>

            </div>
          </div>
          <!-- Form with header -->

        </div>
      </div>
    </div>
  </div>
</section>

</header>
<!-- Main Navigation -->
<?php include 'footer.php'; ?>