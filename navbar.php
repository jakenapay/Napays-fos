<header>
    <nav class="nav">
        <div class="container-nav">
            <a href="index.html" style="text-decoration: none;">
                <h1 class="nav-logo"><img src="napays.png" alt="Napay's Logo" class="img-fluid" style="width: 60px;"></h1>
            </a>
            <ul class="menu align-items-center">
                <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                    echo '<li><a href="index.php" class="active">Home</a></li>';
                    // echo basename($_SERVER['PHP_SELF']);
                } else {
                    echo '<li><a href="index.php" class="">Home</a></li>';
                }
                ?>

                <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') {
                    echo '<li><a href="about.php" class="active">About</a></li>';
                    // echo basename($_SERVER['PHP_SELF']);
                } else {
                    echo '<li><a href="about.php" class="">About</a></li>';
                }
                ?>

                <?php if (basename($_SERVER['PHP_SELF']) == 'shop.php') {
                    echo '<li><a href="shop.php" class="active">Shop</a></li>';
                    // echo basename($_SERVER['PHP_SELF']);
                } else {
                    echo '<li><a href="shop.php" class="">Shop</a></li>';
                }
                ?>

                <?php if (basename($_SERVER['PHP_SELF']) == 'shop.php') {
                    echo '<li><a href="shop.php" type="button" class="btn btn-main text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Cart</a></li>';
                    // echo basename($_SERVER['PHP_SELF']);
                } else {
                    echo '<li><a href="shop.php" type="button" class="btn btn-main text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Cart</a></li>';
                }
                ?>


                <?php
                if (isset($_SESSION['id']) and ($_SESSION['id']) != '') {
                    echo '<li><a href="profile.php">Profile</a></li>';
                    if (isset($_SESSION['typ']) and ($_SESSION['typ'] != 'user')) {
                        echo '<li><a href="books.php">Bookings</a></li>';
                    }
                    echo '<li><a href="process/logout.inc.php">Logout</a></li>';
                }
                ?>

            </ul>

            <button class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>
</header>
<nav class="mobile-nav">
    <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php" class="msg-btn">Services</a></li>
        <?php
        if (isset($_SESSION['id']) and ($_SESSION['id']) != '') {
            echo '<li><a href="profile.php">Profile</a></li>';
            if (isset($_SESSION['typ']) and ($_SESSION['typ'] != 'user')) {
                echo '<li><a href="books.php">Bookings</a></li>';
            }
            echo '<li><a href="process/logout.inc.php">Logout</a></li>';
        }
        ?>
    </ul>
</nav>
<!-- end of navigation bar -->