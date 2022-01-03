<?php
session_start();
if (isset($_SESSION['email'])) {
  $pageTitle = 'Profile';
  include 'header.php';
  $email = $_SESSION['email'];
  $role = $_SESSION['role'];
  try {
    $sqlquery = "SELECT * FROM users where email='$email'";
    try {
      $returnval = $dbcon->query($sqlquery); ///PDO Statement

      $userinfo = $returnval->fetchAll();
      foreach ($userinfo as $userdata);
?>
      <!-- Main layout -->
      <main>
        <div class="container-fluid">

          <!-- Section: Team v.1 -->
          <section class="section team-section">

            <!-- Grid row -->
            <div class="row text-center">

              <!-- Grid column -->
              <div class="col-md-8 mb-4">

                <!-- Card -->
                <div class="card card-cascade cascading-admin-card user-card wow fadeInDown">

                  <!-- Card Data -->
                  <div class="admin-up d-flex justify-content-start">
                    <i class="fas fa-users info-color py-4 mr-3 z-depth-2"></i>
                    <div class="data">
                      <h5 class="font-weight-bold dark-grey-text">Edit Profile - <span class="text-muted">Complete your
                          profile</span></h5>
                    </div>
                  </div>
                  <!-- Card Data -->

                  <!-- Card content -->
                  <div class="card-body card-body-cascade">

                    <!-- Grid row -->
                    <div class="row">

                      <!-- Grid column -->
                      <div class="col-lg-4">

                        <div class="md-form form-sm mb-0">
                          <input type="text" name="username" id="username" value="<?php echo md5($userdata['password']) ?>" class="form-control form-control-sm">
                          <label for="username" class="">Username</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-lg-4">

                        <div class="md-form form-sm mb-0">
                          <input type="text" name="email" id="email" value="<?php echo $email; ?>" class="form-control form-control-sm">
                          <label for="email" class="">Email address</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-lg-4">

                        <div class="md-form form-sm mb-0">
                          <input type="text" id="role" value="<?php echo $role; ?>" class="form-control form-control-sm" disabled>
                          <label for="role" class="disabled">Role</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row">

                      <!-- Grid column -->
                      <div class="col-md-6">

                        <div class="md-form form-sm mb-0">
                          <input type="text" name="fname" id="fname" class="form-control form-control-sm">
                          <label for="fname" class="">First name</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-6">

                        <div class="md-form form-sm mb-0">
                          <input type="text" name="lname" id="lname" class="form-control form-control-sm">
                          <label for="lname" class="">Last name</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row">

                      <!-- Grid column -->
                      <div class="col-md-12">

                        <div class="md-form form-sm mb-0">
                          <input type="text" name="address" id="address" class="form-control form-control-sm">
                          <label for="address" class="">Address</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row">

                      <!-- Grid column -->
                      <div class="col-lg-4 col-md-12">

                        <div class="md-form form-sm mb-0">
                          <input type="text" name="city" id="city" class="form-control form-control-sm">
                          <label for="city" class="">City</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-lg-4 col-md-6">

                        <div class="md-form form-sm mb-0">
                          <input type="text" name="zip" id="zip" class="form-control form-control-sm">
                          <label for="zip" class="">Postal Code</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-lg-4 col-md-6">

                        <div class="md-form form-sm mb-0">
                          <select name="division" id="DiviSrch" class="mdb-select mdb-autocomplete colorful-select dropdown-danger" title="Select Division" searchable="Search">
                            <option value="" selected="" disabled="">Blood group</option>
                            <option value="A+">A+ (Positive)</option>
                            <option value="A-">A- (Negative)</option>
                            <option value="B+">B+ (Positive)</option>
                            <option value="B-">B- (Negative)</option>
                            <option value="O+">O+ (Positive)</option>
                            <option value="O-">O- (Negative)</option>
                            <option value="AB+">AB+ (Positive)</option>
                            <option value="AB-">AB- (Negative)</option>
                          </select>
                        </div>

                      </div>
                      <!-- Grid column -->

                    </div>
                    <!-- Grid row -->


                  </div>
                  <!-- Card content -->

                </div>
                <!-- Card -->

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 mb-4">
                <br><br>
                <!-- Card -->
                <div class="card profile-card wow pulse">

                  <!-- Avatar -->
                  <div class="avatar z-depth-1-half mb-4">
                    <img src="user/<?php echo $_SESSION['role'] ?>.jpg" class="rounded-circle" alt="First sample avatar image">
                  </div>

                  <div class="card-body pt-0 mt-0">

                    <!-- Name -->
                    <h3 class="mb-3 font-weight-bold"><strong><?php echo $userdata['email']; ?></strong></h3>
                    <!-- <h6 class="font-weight-bold cyan-text mb-4">Web Designer</h6>

                <p class="mt-4 text-muted"></p> -->

                    <a href="changepass" class="btn btn-info btn-rounded"> Change Password</a>

                  </div>

                </div>
                <!-- Card -->

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </section>
          <!-- Section: Team v.1 -->

        </div>
      </main>
      <!-- Main layout -->
    <?php include 'footer.php';
    } catch (PDOException $ex) {
    ?>
      <p class="grey-text mt-3">Data read error ...</p>
    <?php
    }
  } catch (PDOException $ex) {
    ?>
    <p class="grey-text mt-3">Data read error ... ...</p>
  <?php
  }
} else {
  ?>
  <script>
    window.location.assign('login');
  </script>
<?php
}
?>