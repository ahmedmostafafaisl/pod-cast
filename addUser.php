<?php
//echo __DIR__ . '/layout/header.php';
include __DIR__ . '/layout/header.php';?>

<?php
//session_start();
if (isset($_SESSION['errors'])) {

	echo '<div class="alert alert-danger">';
	foreach ($_SESSION['errors'] as $error) {
		echo "<div>{$error}</div>";
	}
	echo '</div>';
	unset($_SESSION['errors']);
}

?>
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Sign up</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Sign up </p>
            </div>
        </div>
    </div>

  <section id="formSection">
    <div class="container align-content-center">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col col-md-6 p-3">
          <div class="outForm w-75 border-1 p-2 p-lg-5 p-3 m-auto mb-5 rounded">
            <h1 class="p-2">Add New User</h1>

            <form action="../register_process.php" method="post" enctype="multipart/form-data" class="p-0">
              <div class="input-group mb-2">
                <input type="text" name="name" class="form-control" id="userName" placeholder="Name"
                  aria-describedby="userNameFeedback"  />
                <div id="userNameFeedback" class="invalid-feedback">
                  Please enter valid username as char only.
                </div>
              </div>

              <div class="input-group mb-2">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" aria-describedby="emailFeedback"
                   />
                <div id="userNameFeedback" class="invalid-feedback">
                  Please enter valid Email.
                </div>
              </div>

              <div class="input-group mb-2">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                  aria-describedby="passwordFeedback"  />
                <div id="passwordFeedback" class="invalid-feedback">
                  Password must be 8 chars at least and at least 1 capital
                  letter , 1 small , 1 number .
                </div>
              </div>

              <div class="input-group mb-2">
                <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password"
                  aria-describedby="confirm_passwordFeedback"  />
                <div id="confirm_passwordFeedback" class="invalid-feedback">
                  Password must be 8 chars at least and at least 1 capital
                  letter , 1 small , 1 number .
                </div>
              </div>

              <div class="input-group mb-2">
                <input type="number" name="room" class="form-control" id="roomNo" placeholder="Room NO"  />
              </div>

              <div class="input-group mb-2">
                <input type="number" name="ext" class="form-control" id="ext" placeholder="EXT"  />
              </div>
              <div class="input-group mb-2">
                <input type="file" name="image" class="form-control" placeholder="Upload Profile Photo" />
              </div>

              <div class="col-12">
                <button class="btn btn-primary" type="submit">
                  Submit form
                </button>
                <button class="btn btn-primary mt-2" type="reset">
                  reset
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="add.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
    <?php
include __DIR__ . '/layout/footer.php';
?>