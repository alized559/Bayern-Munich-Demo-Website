<?php
session_start();

$username = "";
$email = "";
$errors = array();

$db = mysqli_connect('localhost', 'id16555764_root', 'Bayern_munich1', 'id16555764_shopping');

if (isset($_POST['signup'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);

    if ($password1 != $password) {
        array_push($errors, "The two passwords do not match");
    }

    $query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['email'] == $email) {
            array_push($errors, "Email already exists!");
        }

        if ($user['username'] == $username) {
            array_push($errors, "Username already exists!");
        }
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Signup done :)";
        header('location: shirts.php');
    }
}

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "login done :)";
            if ($username == 'admin') {
                header('location: addnews.php');
            } else {
                header('location: shirts.php');
            }

        } else {
            array_push($errors, "Wrong username or password");
        }
    }
}


?>
