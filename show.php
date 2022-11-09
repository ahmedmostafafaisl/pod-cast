<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>podcast</title>
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <i class="bi bi-bar-chart-fill"></i>
                PodCast Store
            </a>
        </div>
    </nav>
    <!--Table-->
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>description</th>
                <th>Image</th>
                <th>Song</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>

            <?php include 'config.php';
            include 'insert.php';

            $query = "SELECT * FROM `products`";
            $run = mysqli_query($con, $query);

            if (mysqli_num_rows($run) > 0) {
                foreach ($run as $row) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td>
                    <img src="<?php echo  $row['image']; ?> " style="height:100px; width:100px;">
                </td>
                <td> <audio src="uploads/<?php echo  $row['audio']; ?>" controls></audio></td>

                <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Update</a></td>
            </tr>
            <?php
                }
            }
            ?>





        </tbody>
    </table>

</body>

</html>