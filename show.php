<?php
require_once("includes/header2.php");
require_once('classes/Auth.php');
require_once("helpers/isAdmin.php");

$admin = is_admin();

if (!$admin) {
    header('location:Home.php');
}
?>



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