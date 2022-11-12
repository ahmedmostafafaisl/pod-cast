<!--  -->
<?php
require_once("includes/header.php");
include 'config.php';
include 'insert.php';
?>
<div class="container-fluid ">
    <div class="row mb-4">
        <div class="col-12 mypic"></div>
    </div>


    <!-----------------------------------------------      card      .............................................................................. -->
    <?php

    $query = "SELECT * FROM `products` WHERE `category`= ' تقني'";
    $run = mysqli_query($con, $query);

    if (mysqli_num_rows($run) > 0) {
        foreach ($run as $row) {
    ?>



    <section class="music_card">

        <div class="container">
            <div class="card-deck mb-1">
                <div class="card flex-row  gbg">
                    <img class="card-img-top" src="<?php echo  $row['image']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row['name']; ?> </h4>
                        <h5 class="card-title"><?php echo $row['category']; ?> </h5>
                        <p class="card-text"><?php echo $row['description']; ?> </p>
                        <audio src="uploads/<?php echo  $row['audio']; ?>" controls></audio>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <?php }
    } ?>


    <!-----------------------------------------------      Footer      .............................................................................. -->

    <?php
    require_once("includes/footer.php")
    ?>