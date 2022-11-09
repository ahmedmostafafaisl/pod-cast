<?php

include('config.php');



// insert data 

if (isset($_POST['add'])) {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_description = "uploads/" . $image_name;
    move_uploaded_file($image_location, 'uploads/' . $image_name);


    // audio upload 

    if (isset($_POST['add']) && isset($_FILES['audio'])) {

        $audio_name = $_FILES['audio']['name'];
        $tmp_name = $_FILES['audio']['tmp_name'];
        $error = $_FILES['audio']['error'];

        if ($error === 0) {
            $audio_ex = pathinfo($audio_name, PATHINFO_EXTENSION);

            $audio_ex_lc = strtolower($audio_ex);

            $allowed_exs = array("3gp", 'mp3', 'm4a', 'wav', 'm3u', 'ogg');

            if (in_array($audio_ex_lc, $allowed_exs)) {

                $new_audio_name = uniqid("audio-", true) . '.' . $audio_ex_lc;
                $audio_upload_path = 'uploads/' . $new_audio_name;
                move_uploaded_file($tmp_name, $audio_upload_path);

                // Now let's Insert the video path into database
                // $sql = "INSERT INTO videos(video_url) 
                //    VALUES('$new_video_name')";
                // mysqli_query($conn, $sql);
                // header("Location: view.php");
            } else {
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        }
    }


    mysqli_query($con, "INSERT INTO `products`(`name`, `price`, `category`, `description`, `image`, `audio`) VALUES
     ('$name',' $price',' $category',' $description','$image_description','$new_audio_name')");
    header('Location:show.php');
}



// update 


if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_description = "uploads/" . $image_name;
    move_uploaded_file($image_location, 'uploads/' . $image_name);

    echo " $price";
    mysqli_query(
        $con,
        "UPDATE `products` SET `name`='$name',`price`='$price',`category`='$category',`description`='$description',
        `image`=' $image_description' WHERE id ='$id'"
    );
    header('Location:show.php');
}



// if (isset($_POST['add']) == "Add Product") {
//     $dir = "uploads/";
//     $audio_path = $dir . basename($_FILES['audio']['tmp_name']);
//     if (move_uploaded_file($_FILES['audio']['tmp_name'], $audio_path)) {
//         echo "success";
//     } else {
//         echo "fail";
//     }
// }