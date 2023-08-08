<!DOCTYPE html>
<html>
<head>
    <title>Bulid your own Portfolio,Register NOW</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    /* Reset default margin and padding for the body */
body {
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-image: url('images/back1.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Style the container */
.container {
    text-align: center;
    padding: 50px;
}

/* Style the form */
form {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: 0 auto;
}

/* Style the form labels and inputs */
label, input[type="text"], input[type="password"], input[type="submit"] {
    display: block;
    width: 100%;
    margin-bottom: 15px;
}

/* Media query for smaller device sizes */
@media (max-width: 768px) {
    form {
        padding: 40px;
    }

    /* You can also adjust the background image size or any other styles here */
}

    </style>
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
