<!DOCTYPE html>
<html>
    <head>
        <title>Add News</title>
        <link rel="stylesheet" href="main/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            form {
                margin-top: 100px;
                margin-left: 120px;
            }

            .photo {
                width: 240px;
            }

            .area {
                margin-bottom: 10px;
            }

            input[type=password]::-ms-reveal,
input[type=password]::-ms-clear
{
    display: none;
}
        </style>
    </head>
    <body style="background-color: black; color: rgb(167, 42, 42)">
        <div class="nav">
            <ul class="topnav">
                <li><img class="bayern" src="images/bayern.png" alt="bayern logo"></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="addnews.php">AddNews</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

            <form class="form" method="post" action="addnews.php">
            <div class="">
                <h2>Enter New Text</h2>
            </div>
            <div class="inputs">
                <textarea class="area" name="w3review" rows="4" cols="30"></textarea>
            </div>
            <div class="">
                <h2>Enter New Link</h2>
            </div>
            <div class="inputs">
            <textarea class="area" name="link" rows="4" cols="30"></textarea>
            </div>
            <div class="">
                <h2>Upload Photo </h2>
            </div>
            <div class="inputs">
                <input type="file" class="photo" name="photo"  required>
            </div>
            <div class="inputs">
                <button type="submit" class="button1" name="signup">Upload</button>
            </div>
        </form>
    </body>
</html>