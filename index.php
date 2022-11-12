<?php
require_once("includes/header2.php")
?>
<div id="login">


    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="insert.php" method="post" enctype="multipart/form-data">
                        <h3 class="text-center text-info">Add Product</h3>
                        <div class="form-group">
                            <label for="name" class="text-info">Name</label><br>
                            <input required type="text" name="name" id="name" class="form-control" require>
                        </div>
                        <div class="form-group">
                            <label for="price" class="text-info">Price</label><br>
                            <input required type="text" name="price" id="price" class="form-control" min=1>
                        </div>
                        <div class="form-group">
                            <label for="category" class="text-info">Category</label><br>
                            <!-- <input required type="text" name="category" id="category" class="form-control" min=1> -->
                            <select name="category" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected value='اسلاميات'> اسلاميات</option>
                                <option value="لغات"> لغات </option>
                                <option value="رياضة">رياضة </option>
                                <option value='تاريخ'> تاريخ </option>
                                <option value='حصريات'>حصريات </option>
                                <option value="تقني"> تقني </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-info">Description</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="input-group-text">Image</label>
                            <input required type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="input-group-text">Song</label>
                            <input required type="file" name="audio" class="form-control">
                        </div>


                        <div class="form-group">
                            <input type="submit" value="Add Product" name="add" class="btn btn-success" data-bs-toggle="modal">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



</body>


</html>