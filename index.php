<?php 
include('server.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home - FC Bayern Munich</title>
        <link rel="stylesheet" href="main/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="nav">
            <ul class="topnav">
                <li><img class="bayern" src="images/bayern.png" alt="bayern logo"></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="team.php">Team</a></li>
                <li><a href="standings.php">Standings</a></li>
                <li><a href="stadium.php">AllianzArena</a></li>
                <?php if (isset($_SESSION['username']) and $_SESSION['username'] == 'admin') { ?>
                    <li><a href="addnews.php">User</a></li>
                <?php } else if (isset($_SESSION['username'])){ ?>
                    <li><a href="shirts.php">User</a></li>
                <?php } else { ?>
                    <li><a href="login.php">User</a></li>
                    <?php } ?>
            </ul>
        </div>
        <div class="images">
            <img class="col-12" src="images/img1.webp" alt="bayern vs leipzig image">
        </div>
        <div class="time">
            <p >1 day, 2 hours and 40 minutes left</p>
        </div>
        
        <div class="details">
            <div class="parag">
                <p><b>BUNDESLIGA</b><br>SAT 3-6-2021 7:30 PM<br>Stadium: Leipzig</p>
            </div>
            <div class="rbleipzig">
                <p>RB Leipzig</p>
            </div>
            <img class="leipzig" src="images/Leipzig.png" alt="leipzig logo">
            <div class="vs">
                <h1>- : -</h1>
            </div>
            <img class="bayern1" src="images/bayern.png" alt="bayern logo">
            <div class="rbleipzig">
                <p>FC Bayern</p>
            </div>
        </div>

        <div class="pic">
            <div class="photos">
                <h1>Photos</h1>
            </div>
            <img class="train" src="images/training.jpg" alt="bayern training picture">
            <img class="team" src="images/team.jpeg" alt="bayern team picture">
            <img class="champ" src="images/champion.jpeg" alt="bayern champoinsleague 2020 picture">
            <div class="cups">
                <h1>CUPS</h1>
            </div>
            <div class="flexbox cup-box">
                <div class="cup-item">
                    <img src="images/bundesligacup.png" alt="bundesliga cup">
                    <p>30</p>
                    <h4>German League</h4>
                </div>
                <div class="cup-item">
                    <img src="images/germancup.jpeg" alt="german cup">
                    <p>20</p>
                    <h4>German Cup</h4>
                </div>
                <div class="cup-item">
                    <img src="images/supercup.jpeg" alt="super cup">
                    <p>9</p>
                    <h4>German Supercup</h4>
                </div>
                <div class="cup-item">
                    <img src="images/uefacup.jpeg" alt="UEFA cup">
                    <p>1</p>
                    <h4>UEFA Cup</h4>
                </div>
                <div class="cup-item">
                    <img src="images/champoinscup.jpeg" alt="champoins league cup">
                    <p>6</p>
                    <h4>Champoins League</h4>
                </div>
            </div>
            <div class="divImg">
                <img src="images/bayern.png" alt="bayern logo" style="width: 100px;">
            </div>
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
    </body>
</html>
