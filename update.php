<?php
require_once("includes/header2.php")
?>

<div id="login">


    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <?php
                    include "config.php";
                    include "insert.php";

                    $id = $_GET['id'];
                    $record = mysqli_query($con, "SELECT * FROM `products` WHERE id=$id");
                    $data = mysqli_fetch_array($record);



                    ?>
                    <form id="login-form" class="form" action="insert.php" method="post" enctype="multipart/form-data">
                        <!-- <input type="hidden" name="p_id" value="<?php echo $data['id']; ?>"> -->
                        <h3 class="text-center text-info">Edit Product</h3>
                        <div class="form-group">
                            <label for="name" class="text-info">Name</label><br>
                            <input required type="text" name="name" id="name" class="form-control"
                                value="<?php echo $data['name']; ?>" require>
                        </div>
                        <div class="form-group">
                            <label for="price" class="text-info">Price</label><br>
                            <input required type="text" name="price" id="price" class="form-control" min=1
                                value="<?php echo $data['price']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="price" class="text-info">Category</label><br>
                            <input required type="text" name="category" id="category" class="form-control" min=1
                                value="<?php echo $data['category']; ?>">
                            <select name="category" class="form-select form-select-lg mb-3"
                                aria-label=".form-select-lg example">
                                <option selected value="<?php echo $data['category']; ?>"">
                                    <?php echo $data['category']; ?></option>
                                <option value=' اسلاميات'>اسلاميات</option>
                                <option value=' لغات'> لغات </option>
                                <option value=" رياضة">رياضة </option>
                                <option value=' تاريخ'> تاريخ </option>
                                <option value=' حصريات'>حصريات </option>
                                <option value=' تقني'> تقني </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-info">Description</label>
                            <textarea class="form-control"
                                name="description"><?php echo $data['description']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label class="input-group-text">Image</label>
                            <td><input type="file" name="image" value="<?php echo $data['image']; ?>"
                                    class="form-control"> <img src="<?php echo $data['image']; ?>" alt=""></td>
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="input-group-text">Song</label>
                            <td><input type="file" name="audio" value="<?php echo $data['audio']; ?>"
                                    class="form-control"> <audio src="<?php echo $data['audio']; ?>"></td>
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        </div>

                        <div class=" form-group">
                            <input type="submit" value="update Product" name="update" class="btn btn-success"
                                data-bs-toggle="modal">
                        </div>

                    </form>





                </div>
            </div>
        </div>
    </div>
</div>



</body>


</html>