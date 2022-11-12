<?php
require_once('includes/header.php');
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

<!------------------------------------- Login Form  Start -------------------------------------------->
<div class="container align-content-center mt-5">
    <div class=" row">
        <div class="col-md-3 mt-5"></div>
        <div class=" col col-md-6 p-3">
            <div class="w-75 back-ground-wight border-1 p-2  p-lg-5 shadow p-3 m-auto mb-5 bg-white rounded ">
                <div class="loginHeader my-3">
                    <h3 class="text-center ">Login to DA</h3>
                </div>
                <section id="formSection" class="m-auto">
                    <form action="backend/login_process.php" method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text back-ground" id="basic-addon1"><i
                                    class="bi bi-person-bounding-box w "></i></span>
                            <input type="text" name="email" class="form-control m-0" id="userName"
                                oninput="validation(event)" placeholder="email" aria-describedby="userNameFeedback"
                                required />
                            <div id="userNameFeedback" class="invalid-feedback">
                                Username is not correct.
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text back-ground" id="basic-addon"><i
                                    class="bi bi-key w"></i></span>
                            <input type="password" name="password" class="form-control m-0" id="password"
                                placeholder="Password" aria-describedby="passwordFeedback" required />
                            <div id="passwordFeedback" class="invalid-feedback">
                                userName or password not correct.
                            </div>
                        </div>
                        <input type="submit" class="btn btn-outline-success d-block w-50 m-auto my-3 " value="Submit">
                        <a class="btn btn-outline-success d-block w-50 m-auto my-3 " href="sign_up.php"
                            role="button">Sign Up</a>

                    </form>
            </div>
        </div>
    </div>
</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>

<script src="/assets/js/login.js"></script>
</body>

</html>