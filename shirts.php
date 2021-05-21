<?php

require_once("server.php");
$name = "Home Shirt";
$size = "Small";
$quantity = 0;
$price = 100;
$username = $_SESSION['username'];

if (isset($_POST['add'])) {
    $size = mysqli_real_escape_string($db, $_POST['size']);
    $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
    $price *= $quantity;

    $query = $db -> query("INSERT INTO shirt (username, name, size, quantity, price) VALUES ('$username', '$name', '$size', '$quantity', '$price')");
}

if (isset($_GET['clear'])) {
    $query = $db -> query("DELETE FROM shirt WHERE username = '$username'");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>FC Bayern Shirts</title>
        <link rel="stylesheet" href="main/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
            <div class="nav">
                <ul class="topnav">
                    <li><img class="bayern" src="images/bayern.png" alt="bayern logo"></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shirts.php">Shirts</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        <div class="shirt">
            <h1>FC BAYERN HOME SHIRT 20/21</h1>
            <p class="here">If you want the away shirt click <a href="awayshirt.php">here</a></p>
            <img class="away" src="images/homeshirt.jpeg" alt="bayern home shirt image">
            <form method="post" action="shirts.php">
                <label for="size">Choose the size:</label>
                <select name="size" class="size" value="<?php echo $size; ?>">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>XLarge</option>
                    <option>XXLarge</option>
                    <option>3XLarge</option>
                </select>
                <br><br>
                <label for="quantity">Choose the quantity:</label>
                <input type="number" name="quantity" min="1" max="10" value="<?php echo $quantity; ?>" required>
                <hr class="line">
                <div class="price">
                    <h3>100$</h3>
                </div>
                <button class="button" name="add">Add to cart</button>
            </form>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <h2>Your Cart</h2>
                <table class="table2">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    <?php
                    $query = $db -> query("SELECT * FROM shirt WHERE username='$username'");
                    $array = array();
                    while($row = mysqli_fetch_assoc($query)){
                       $array[] = $row;
                    }
                    $totalPrice = 0;
                    $homeQuantity = 0;
                    $awayQuantity = 0;
                    for ($i = 0; $i < mysqli_num_rows($query); $i++) {
                        $totalPrice += $array[$i]['price'];
                        if ($array[$i]['name'] == "Home Shirt") {
                            $homeQuantity += $array[$i]['quantity'];
                        } else if ($array[$i]['name'] == "Away Shirt") {
                            $awayQuantity += $array[$i]['quantity'];
                        }
                    ?>
                    <tr>
                        <td><?php echo $array[$i]['id'] ?></td>
                        <td><?php echo $array[$i]['name'] ?></td>
                        <td><?php echo $array[$i]['size'] ?></td>
                        <td><?php echo $array[$i]['quantity'] ?></td>
                        <td><?php echo $array[$i]['price'] .= "$"?></td>
                    </tr>
                    <?php } ?>
                </table>
                <hr class="hr1">
                <h3>Total</h3>
                <h3 class="total"><?php echo $totalPrice .= "$"?></h3>
                <h5 class="vat">Including VAT</h5>
                <a href="cart.php"><button class="cart">To Cart</button></a>
                <a href="checkout.php"><button class="checkout">To Checkout</button></a>
                <button> <a href="shirts.php?clear='1'" style="color: black;">Clear</a> </button>
              </div>
              <button class="button2" onclick="openNav()">Open Cart</button>
              <script>
                function openNav() {
                  document.getElementById("mySidenav").style.width = "400px";
                }

                function closeNav() {
                  document.getElementById("mySidenav").style.width = "0";
                }
                </script>

        </div>
        <div class="divImg">
                <img src="images/bayern.png" alt="bayern logo" style="width: 100px;">
            </div>
        <div class="end">
            <div class="partners">
                <p>PARTNER</p>
            </div>
            <div class="flexbox1 company-box">
                <div class="company-item">
                    <a href="https://www.telekom.de/start" target="_blank"><img src="images/telekom.png" alt="telekom logo"></a>
                </div>
                <div class="company-item">
                    <a href="https://www.adidas.co.uk/football" target="_blank"><img src="images/adidas.png" alt="adidas logo"></a>
                </div>
                <div class="company-item">
                    <a href="https://www.audi.com/en/experience-audi/inspiration-and-lifestyle/sports/home-of-football.html" target="_blank"><img src="images/audi.png" alt="audi logo "></a>
                </div>
                <div class="company-item">
                    <a href="https://www.allianz.de/" target="_blank"><img src="images/allianz.png" alt="allianz logo"></a>
                </div>
            </div>
            <div class="follow">
                <h4>Follow FC Bayern On Social Media</h4>
            </div>
            <div class="flexbox2 end-box">
                <div class="end-item">
                    <a href="https://www.facebook.com/fcbayern.en/" target="_blank"><img src="images/fac.png" alt="facebook image"></a>
                </div>
                <div class="end-item">
                    <a href="https://www.instagram.com/fcbayern/" target="_blank"><img src="images/insta1.png" alt="instagram image"></a>
                </div>
                <div class="end-item">
                    <a href="https://twitter.com/fcbayern?lang=en" target="_blank"><img src="images/twitter.png" alt="twitter image"></a>
                </div>
                <div class="end-item">
                    <a href="https://www.youtube.com/channel/UCZkcxFIsqW5htimoUQKA0iA" target="_blank"><img src="images/youtube.png" alt="youtube image"></a>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
