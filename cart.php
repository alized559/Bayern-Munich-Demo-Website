<?php 
ob_start();
require("shirts.php");
$data = ob_get_clean();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Shopping Cart</title>
        <link rel="stylesheet" href="main/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="background-color: white;">
        <div class="payHeader">
            <img src="images/bayern.png">
        </div>
        <div class="back">
            <a href="shirts.php"><h3>Back</h3></a>
        </div>
        <hr class="payhr">
        <div class="yours">
            <h1>Your Cart</h1>
        </div>
        <hr class="payhr1">
        
        <div class="home">
            <img src="images/homeshirt.jpeg">
            <span style="color: rgb(167, 42, 42);"><h3>FC Bayern Home Shirt 20/21</span><br><br><span style="color: grey;"> Available immediately</span></h3>
        </div>
        <span style="color: rgb(167, 42, 42);"><h3 class="h3home">Quantity: <?php echo $homeQuantity ?></h3></span>
        <hr class="hrhome">
        
        <hr class="payhr2">
        <div class="home1">
            <img src="images/awayshirt.jpeg">
            <span style="color: rgb(167, 42, 42);"><h3>FC Bayern Home Shirt 20/21</span><br><br><span style="color: grey;"> Available immediately</h3>
        </div>
        <span style="color: rgb(167, 42, 42);"><h3 class="h3home">Quantity: <?php echo $awayQuantity ?></h3></span>
        <hr class="hrhome1">
        
        <div class="cartform">
            <form method="post" action="checkout.php">
                <label>your delivery country</label>
                <select>
                <option>Germany</option>
                <option>Spain</option>
                <option>Italy</option>
                <option>Netherlands</option>
                <option>Belgika</option>
                <option>France</option>
                <option>Portugal</option>
                </select>
                <p>Expected shipment costs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.00$</p>
                <hr>
                <br>
                <h3 class="tot">Total</h3>
                <h3 class="cartformh3"><?php echo $totalPrice ?></h3>
                <h5>Including VAT</h5>
                <button class="check">Pay</button>
            </form>
        </div>
    </body>
</html>