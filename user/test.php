<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- assets/css/all.min.css -->
    <link rel="stylesheet" href="../">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="assets/css/homestyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-expand-lg ">
        <div class="container mb-1 ">
            <a class="navbar-brand" href="#">Pod <i class="bi bi-music-note-list"></i>cast</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <!-- ms=margin start -->
                <ul class="navbar-nav ms-auto">

                    <!-- home -->
                    <li class="nav-item">
                        <a class="pages nav-link fas fa-home mr-3" href="#"> </a>
                    </li>
                    <li class="nav-item">
                        <a class="pages nav-link fa-brands fa-product-hunt" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="pages nav-link fa-brands fa-salesforce" href="#">Sales</a>
                    </li>
                    <!-- cart -->
                    <li class="nav-item">
                        <!-- <i class="fa fa-shopping-cart"></i> -->
                        <a class="pages nav-link fa fa-shopping-cart" href="#"></a>
                    </li>


                    </li>
                    <li class="nav-item active">
                        <a class="pages nav-link fa-solid fa-right-to-bracket" href="#">Logout <span
                                class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid ">
        <div class="row mb-4">
            <div class="col-12 mypic"></div>
        </div>


        <!-----------------------------------------------      card      .............................................................................. -->


        <section class="music_card">

            <div class="container">
                <div class="card-deck mb-1">
                    <div class="card flex-row  gbg">
                        <img class="card-img-top" src="../images/user/1667952856.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"> </h5>
                            <p class="card-text">This is a wider card with supporting </p>
                            <audio src="../uploads/audio-636be1c7ecef72.05343976.mp3" controls></audio>
                        </div>
                    </div>

                </div>

                <div class="card-deck mb-1">
                    <div class="card flex-row  gbg">
                        <img class="card-img-top" src="../images/user/1667952856.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">anta omry</h5>
                            <p class="card-text">This is a wider card with supporting </p>
                            <audio src="../uploads/audio-636be1c7ecef72.05343976.mp3" controls></audio>
                        </div>
                    </div>

                </div>

            </div>
        </section>




        <!-----------------------------------------------      Footer      .............................................................................. -->


        <!-- Remove the container if you want to extend the Footer to full width. -->

        <div class="container-fluid p-0">
            <!-- Footer -->
            <footer class="text-center text-lg-start text-white" style="background-color: #45526e">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                    <!-- Section: Links -->
                    <section class="">
                        <!--Grid row-->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">
                                    About Us
                                </h6>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.

                                </p>
                            </div>
                            <!-- Grid column -->

                            <hr class="w-100 clearfix d-md-none" />

                            <!-- Grid column -->
                            <div class="links col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">Categories</h6>
                                <p>
                                    <a class="text-white">Category 1</a>
                                </p>
                                <p>
                                    <a class="text-white">Category 2</a>
                                </p>
                                <p>
                                    <a class="text-white">Category 3</a>
                                </p>
                                <p>
                                    <a class="text-white">Category 4</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- <hr class="w-100 clearfix d-md-none" />

         
          <!-- Grid column -->
                            <hr class="w-100 clearfix d-md-none" />

                            <!-- Grid column -->
                            <div class="links col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">Contact WITH US</h6>
                                <p><i class="fas fa-home mr-3"></i> ITI Menofia Branch</p>
                                <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                                <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                                <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!--Grid row-->
                    </section>
                    <!-- Section: Links -->

                    <hr class="my-3">

                    <!-- Section: Copyright -->
                    <section class="p-3 pt-0">
                        <div class="row d-flex align-items-center">
                            <!-- Grid column -->
                            <div class="col-md-7 col-lg-8 text-center text-md-start">
                                <!-- Copyright -->
                                <div class="p-3">
                                    ITI © 2022 Copyright:

                                </div>
                                <!-- Copyright -->
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                                <!-- Facebook -->
                                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                        class="fab fa-facebook-f"></i></a>

                                <!-- Twitter -->
                                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                        class="fab fa-twitter"></i></a>

                                <!-- Google -->
                                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                        class="fab fa-google"></i></a>

                                <!-- Instagram -->
                                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                            <!-- Grid column -->
                        </div>
                    </section>
                    <!-- Section: Copyright -->
                </div>
                <!-- Grid container -->
            </footer>
            <!-- Footer -->
        </div>
        <!-- End of .container -->



        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/all.min.js"></script>
</body>

</html>