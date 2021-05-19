<?php 

require_once("server.php");
$address = "";
$name = "";
$cnum = 0;

if (isset($_POST['pay'])) {
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $cnum = mysqli_real_escape_string($db, $_POST['cnum']);

    $query = $db -> query("INSERT INTO creditcard VALUES ('$address', '$name', '$cnum')");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Payment</title>
        <link rel="stylesheet" href="main/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body background="images/logwall.jpg">
    <div class="payheader">
        <h1>Hello there,<br>Pay Here</h1>
    </div>
        <div class="flexbox3 pay-box">
            <div class="pay-item">
            <form class="form" method="post">
            <div class="inputs">
                <input type="text" name="address" placeholder="Enter address" value="<?php echo $address; ?>" required>
            </div>
            <div class="inputs">
                <input type="text" name="city" placeholder="Enter city" required>
            </div>
            <div class="inputs">
                <input type="text" name="state" placeholder="Enter State" required>
            </div>
            <div class="inputs">
                <input type="text" name="zip" placeholder="Enter Zip" required>
            </div>
        </form>
            </div>
            <div class="pay-item1">
            <form class="form" method="post">
            <div class="inputs">
                <input type="text" name="name" placeholder="Enter name on card" value="<?php echo $name; ?>" required>
            </div>
            <div class="inputs">
                <input type="text" name="cnum" placeholder="Enter card number" value="<?php $cnum; ?>" required>
            </div>
            <div class="inputs">
                <input type="text" name="expmonth" placeholder="Enter exp month" required>
            </div>
            <div class="inputs">
                <input type="text" name="expyear" placeholder="Enter exp year" required>
            </div>
        </form>
            </div>
        </div>
        <form class="form5" method="post" action="paydone.html">
        <div class="inputs">
                <button type="submit" class="button1" name="pay">Pay</button>
        </div>
        <div class="member">
        <p><a href="cart.php">Your Cart</a></p>
            <p><a href="index.php">Back Home</a></p>
            
        </div>
            
        </form>
        
    </body>
</html>