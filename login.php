<?php
session_start();
if (isset($_SESSION['email'])) {
?>
  <script>
    window.location.assign('../NetworkErBahire');
  </script>
<?php
} else {
  $pageTitle = 'Log In';
  include 'header.php';
?>
  <!-- Intro Section -->
  <section class="login-page lview intro-2" style="background-image: url(img/login-back.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="mask rgba-indigo-light h-100 d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

            <!-- Form with header -->
            <div class="card wow fadeInLeft" data-wow-delay="0.3s" style="background-color: rgba(200, 200, 200, 0.7);">
              <div class="card-body">

                <!-- Header -->
                <div class="form-header ripe-malinka-gradient">
                  <h3>Log in:</h3>
                </div>

                <!-- Body -->
                <form method="POST" class="needs-validation was-validated" action="loginverify.php">
                  <div class="md-form mb-0">
                    <i class="fas fa-envelope prefix white-text"></i>
                    <input name="email" type="email" id="orangeForm-email" class="form-control validate" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    <label for="orangeForm-email">Your email</label>
                    <div class="invalid-feedback">Provide a valid email</div>
                    <div class="valid-feedback">Looks good!</div>
                  </div>

                  <div class="md-form mb-0">
                    <i class="fas fa-lock prefix white-text"></i>
                    <input name="pass" type="password" id="orangeForm-pass" class="form-control valiadate" required>
                    <label for="orangeForm-pass">Your password</label>
                    <div class="invalid-feedback">Can't be empty</div>
                    <div class="valid-feedback">Looks good! It's not empty</div>
                  </div>

                  <div class="text-center">
                    <input type="submit" class="btn btn-rounded purple-gradient btn-lg" value="Log In">
                    <hr>
                    <p class="text-dark">No Account? <a href="register">Create Now</a></p>
                  </div>
                </form>

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
<?php
}
?>