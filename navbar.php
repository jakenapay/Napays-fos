<header>
    <nav class="nav">
        <div class="container-nav">
            <a href="index.html" style="text-decoration: none;">
                <h1 class="nav-logo"><img src="napays.png" alt="Napay's Logo" class="img-fluid" style="width: 60px;"></h1>
            </a>
            <ul class="menu">
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