<!DOCTYPE html>
<html>
<head>
    <title>Welcome To Portfolio!!</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       body {
    margin: 0;
    padding: 0;
    background-image: url('images/back3.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    text-align: center;
    padding: 20px;
    margin: 20px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

.container form {
    margin-top: 20px;
}

/* Add media query for smaller screens */
@media (max-width: 768px) {
    .container {
        padding: 10px;
    }
}

    </style>
</head>

<body style="background-image: url('images/back3.jpg');">
    <?php
    require_once "user_auth.php";
    if (isset($_SESSION['username'])) {
        header("Location: index1.php"); 
        exit;
   }else{
        session_destroy();
   }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = loginUser($username, $password);
    if ($result === true) {
        $_SESSION['username'] = $username;
        header("Location: index1.php");
        exit();
    }
   }
    ?>
    <div class="container">
        <h1>Welcome To Portfolio!!</h1>

       
        <form action="login_handler.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Login">
        </form>
        <p>New here? <a href="register.php">Create an account</a></p>
    </div>
   
</body>
</html>
