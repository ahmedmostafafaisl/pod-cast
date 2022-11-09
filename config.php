<?php


// try {
//     $con = new PDO("mysql:host=localhost;dbname=crud", "root", 1234);

//     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // echo "Connected successfully";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

$con = mysqli_connect("localhost", "root", 1234, "crud");