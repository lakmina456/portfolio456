<!DOCTYPE html>
<html>
<head>
    <title>Bulid your own Portfolio,Register NOW</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-image: url('images/back1.jpg');">
    <div class="container">
        <h1>Bulid your own Portfolio</h1>
        <form action="register_handler.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Register">
        </form>
        <p>Already have an account? <a href="index.php">Login here</a></p>
    </div>
</body>
</html>
