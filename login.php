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
    <title>Napay's</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/login.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- login form -->
    <main>
        <div class="center">
            <img src="napays.png" alt="logo" class="img-fluid" id="img-logo">
        </div>
        <div class="login-form">
            <form action="includes/login.inc.php" method="post">

                <!-- error message -->
                <?php
                if (isset($_GET['q'])) {
                    $msg = "";

                    if ($_GET['q'] == 'ef') {
                        $msg = "All fields are required";
                        echo '<div class="error form-group">
                    <p>' . $msg . '</p>
                </div>';
                    }
                }

                ?>

                <!-- username  -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" aria-describedby="username">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>

                <!-- password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" aria-describedby="password">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>

                <!-- toggle password type -->
                <div class="form-group">
                    <input type="checkbox" name="showhide" id="showhide" aria-describedby="showhide" onclick="showHidePassword()">
                    <label for="showhide" id="labelshowhide">Show Password</label>
                </div>

                <!-- login button -->
                <div class="form-group">
                    <button type="submit" class="btn btn-main" id="login-btn" name="login-btn">Login</button>
                </div>

                <div class="w-100 my-4">
                    <hr>
                </div>

                <div class="links">
                    <a href="#">Register</a>
                    <a href="#">Forgot Password</a>
                </div>
            </form>
        </div>
    </main>


    <!-- script for toggle password type -->
    <script>
        function showHidePassword() {
            var x = document.getElementById("password");
            var y = document.getElementById("labelshowhide");
            if (x.type === "password") {
                x.type = "text";
                y.innerHTML = "Hide Password";
            } else {
                x.type = "password";
                y.innerHTML = "Show Password";
            }
        }
    </script>


    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Navigation bar -->
    <script src="assets/js/navbar.js"></script>
</body>

</html>