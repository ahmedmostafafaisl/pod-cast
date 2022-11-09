<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div id="login">


        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="insert.php" method="post"
                            enctype="multipart/form-data">
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
                                <input required type="number" name="category" id="category" class="form-control" min=1>
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
                                <input type="submit" value="Add Product" name="add" class="btn btn-success"
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