<!DOCTYPE html>
<html>
<head>
    <title>Welcome To Portfolio!!</title>
    <link rel="stylesheet" href="styles.css">
    
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
