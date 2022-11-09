<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign_up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styleBS.css">
  </head>
  <body>
  <?php
  session_start();
  if (isset($_SESSION['errors'])) {

    echo '<div class="alert alert-danger">';
    foreach ($_SESSION['errors'] as $error) {
      echo "<div>{$error}</div>";
    }
    echo '</div>';
    unset($_SESSION['errors']);
  }
  
  ?>
    <section id="formSection" >
        <div class="container align-content-center">
          <div class=" row">
            <div class="col-md-3"></div>
            <div class=" col col-md-6 p-3">
              <div class="w-75 back-ground-wight border-1 p-2  p-lg-5 shadow p-3 m-auto mb-5 bg-white rounded ">
                <div class="loginHeader my-3">
                  <h3 class="text-center ">Register to our website</h3>
                </div>
                <form method="post" action="backend/register_process.php"  enctype="multipart/form-data">

                  <div class="input-group mb-3">
                    <span class="input-group-text back-ground" id="basic-addon1"><i
                      class="bi bi-person-bounding-box w "></i></span>
                    <input type="text" class="form-control" id="firstName"  name="First_name" placeholder="firstName"
                      aria-describedby="firstNameFeedback" required />
                    <div id="firstNameFeedback" class="invalid-feedback">
                      Please enter valid firstName as char only.
                    </div>
                 
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text back-ground" id="basic-addon23"><i
                      class="bi bi-person-bounding-box w "></i></span>
                    <input type="text" class="form-control" id="lastName" name="last_name" placeholder="lastName"
                      aria-describedby="lastNameFeedback" required />
                    <div id="lastNameFeedback" class="invalid-feedback">
                      Please enter valid lastName as char only.
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text back-ground" id="basic-addon23qw"><i
                      class="bi bi-person-bounding-box w "></i></span>
                    <input type="email" name="email" class="form-control" id="email" placeholder="email"
                      aria-describedby="emailFeedback" required />
                    <div id="emailFeedback" class="invalid-feedback">
                      Please enter valid email as char only.
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text back-ground" id="basic-addon2"><i class="bi bi-key w"></i></span>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                      aria-describedby="passwordFeedback" required />
                    <div id="passwordFeedback" class="invalid-feedback">
                      Password must be 8 chars at least and at least 1 capital letter , 1 small , 1 number .
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text back-ground" id="basic-addonsd"><i class="bi bi-key w"></i></span>
                    <input type="password" class="form-control" id="confirmpassword" placeholder="confirmpassword"
                      aria-describedby="confirmpasswordFeedback" required />
                    <div id="confirmpasswordFeedback" class="invalid-feedback">
                        confirmpassword is not like password
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text back-ground" id="basic-addon3">
                        <i class="bi bi-file-image-fill w"></i></span>
                    <input type="file" class="form-control" id="Avatar" name="avatar" placeholder="Uplode your image"
                      aria-describedby="AvatarFeedback" required />
                    <div id="AvatarFeedback" class="invalid-feedback">
                      Mobile should start with 010 or 011 or 012 and 11 digits
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text back-ground" id="basic-addonesw3">
                        <i class="bi bi-calendar-date-fill w" ></i></span>
                    <input type="text" class="form-control" id="Age" name="age" placeholder="Age"
                      aria-describedby="AgeFeedback" required />
                    <div id="AgeFeedback" class="invalid-feedback">
                      your Eage must be numbers
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text back-ground" id="basic-addon3qw">
                      <i class="bi bi-telephone-fill w"></i></span>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone"
                      aria-describedby="phoneFeedback" required />
                    <div id="phoneFeedback" class="invalid-feedback">
                      Mobile should start with 010 or 011 or 012 and 11 digits
                    </div>
                  </div>
                  <input type="submit" class="btn btn-outline-success d-block w-50 m-auto my-3 "  value="sign_up">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script  src="assets/js/add.js"></script>
  </body>
</html>