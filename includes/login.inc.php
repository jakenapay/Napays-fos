<?php


if (isset($_POST['login-btn'])) {

    include 'config.inc.php';
    include 'function.inc.php';

    if (empty($_POST['username']) or empty($_POST['password'])) {
        header("location: ../login.php?q=ef");
        exit();
    }

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    login($conn, $username, $password);
    // done process
} else {
    header("location: ../login.php");
    exit();
}
