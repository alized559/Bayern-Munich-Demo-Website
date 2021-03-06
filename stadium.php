<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>FC Bayern Stadium</title>
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
        <div class="stadium">
            <h1>Stadium</h1>
        </div>

        <div class="stad">
            <div class="stadflexbox stad-box">
                <div class="stad-item">
                    <img src="images/outdoor.jpeg" alt="outdoor allianz arena image">
                    <h1 class="out">Outdoor</h1>
                </div>
                <div class="stad-item">
                    <img src="images/indoor.jpeg" alt="indoor allianz arena image">
                    <h1 class="in">Indoor</h1>
                </div>
            </div>


            <p>Allianz Arena is a football stadium in Munich, Bavaria, Germany. Widely known for its exterior
                 of inflated ETFE <br>plastic panels, it is the first stadium in the world with a full colour changing
                  exterior. Located at 25 Werner-Heisenberg-Allee<br> at the northern edge of Munich's Schwabing-Freimann
                   borough on the Frottmaning Heath, it is the second-largest<br> arena in Germany behind Westfalenstadion in Dortmund.
                   <br><br>FC Bayern Munich has played its home games at the Allianz Arena since the start of the 2005/2006 season. <br>
                   The club had previously played their home games at the Munich Olympic Stadium since 1972. <br>1860 Munich previously
                    had a 50% share in the stadium, but Bayern Munich purchased their shares<br> for $11 million in April 2006 due to 1860
                     Munich suffering from financial issues. <br>The arrangement allowed 1860 Munich to play at the stadium while retaining
                      no ownership <br>until 2025.[2] However, in July 2017 the rental contract was terminated,<br> making Bayern Munich the sole
                       tenants of the stadium.
            </p>
            <h3>Capacity: 75000 seat</h3>
            <h3>Construction</h3>
            <p>Total concrete used during stadium construction: 120,000<br>
                Total concrete used for the parking garage: 85,000 <br>
                Total steel used during stadium construction: 22,000 tonnes<br>
                Total steel used for the parking garage: 14,000 tonnes</p>
            
                <h3>Transport</h3>
                <ul class="list">
                    <li>9,800 parking places.</li>
                    <li>1,200 places were built into the first two tiers of the Arena.</li>
                    <li>350 places are available for buses (240 at the north end, and 110 at the south entrance).</li>
                    <li>130 more spots are reserved for those with disabilities.</li>
                </ul>
            
                
            <h3>Cost</h3>
            <p>The cost of the construction itself ran to $286 million but financing costs raised that <br>figure to a
                 total of $340 million. In addition, the city and State incurred approximately<br> $210 million for area
                 development and infrastructure improvements.</p>
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
    </body>
</html>
