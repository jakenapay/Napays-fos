<?php
include 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Document title -->
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
</head>

<body>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Product
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <div class="navigation-bar">
        <div class="container bg-dark">
            <div class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <div class="">
                <img class="img-fluid" style="width: 70px;" src="napays.png">
            </div>
            <div class="links">
                <ul>
                    <li><a href="#" class="link">Home</a></li>
                    <li><a href="#" class="link">Foods</a></li>
                    <li><a href="#" class="link">About us</a></li>
                    <li><a href="#" class="link">Login</a></li>
                </ul>
            </div>
        </div>
    </div>





    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>