<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "user_auth.php";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = loginUser($username, $password);

    if (isset($_SESSION['username'])) {
        header("Location: index1.php"); 
        exit; 
    }

    if ($result === true) {
        $_SESSION['username'] = $username;
        header("Location: index1.php");
        exit();
    } else {
        echo "<script>alert('Enterd Username or Password incorrect!!');</script>";
        header("Location: error.php");
        unset($_SESSION['username']);
        session_destroy();
        exit();
    }
}

?>
