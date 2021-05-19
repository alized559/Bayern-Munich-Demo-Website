<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>FC Bayern Login</title>
    <link rel="stylesheet" type="text/css" href="main/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function togglePassword() {
            var x = document.getElementById("toggle");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }       
    </script>
</head>
<body background="images/logwall.jpg">
    <div class="logForm">
        <div class="header">
                <h1>Hello there,<br>Login</h1>
        </div>
        <form class="form" method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div class="inputs">
                <input type="text" name="username" placeholder="Enter username" required>
            </div>
            <div class="inputs">
                <input type="password" id="toggle" name="password" placeholder="Enter password" required>
            </div>
            <input type="checkbox" class="tog" onclick="togglePassword()">Show Password
            <div class="inputs">
                <button type="submit" class="button1" name="login">LET'S GO</button>
            </div>
            <div class="member">
                <p>Not a member? <a href="signup.php">Signup</a></p>
                <p><a href="index.php">Back Home</a></p>
            </div>
        </form>
    </div>
</body>
</html>
