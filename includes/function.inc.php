<?php

include 'config.inc.php';

// If username is already gotten
function checkusername($conn, $username)
{
    $sql = "SELECT username FROM users WHERE username='$username' LIMIT 1;";
    $result = mysqli_query($conn, $sql);

    // If no result
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

// Login
function login($conn, $username, $password)
{
    $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['address'] = $row['address'];
            }

            
        }
    }
}
