<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>FC Bayern Signup</title>
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
            <h1>Hello there,<br>Register</h1>
        </div>
        <form class="form" method="post" action="signup.php">
            <?php include('errors.php'); ?>
            <div class="inputs">
                <input type="text" name="email" placeholder="Enter email" value="<?php echo $email; ?>" required>
            </div>
            <div class="inputs">
                <input type="text" name="username" placeholder="Enter username" value="<?php echo $username; ?>" required>
            </div>
            <div class="inputs">
                <input type="password" id="toggle" name="password" placeholder="Enter password" required>
                
            </div>
            
            <div class="inputs">
                <input type="password" name="password1" placeholder="Repeat password" required>
                
            </div>
            <input type="checkbox" class="tog" onclick="togglePassword()">Show Password
            <div class="inputs">
                <button type="submit" class="button1" name="signup">SignUp</button>
            </div>
            <div class="member">
                <p>Already have an account? <a href="login.php">Login</a> <br> </p>
                <p><a href="index.php">Back Home</a></p>
            </div>
        </form>
    </div>
</body>
</html>
