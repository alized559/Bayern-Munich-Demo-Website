<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>FC Bayern News</title>
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
        <div class="news">
            <div class="gallery">
                <a href="https://fcbayern.com/en/news/2021/03/injury-on-international-duty--lewandowski-out" target="_blank"><img src="images/lewa.webp" alt="Lewandowski image"></a>
                <div class="desc">
                    <b>Lewandowski Injury</b>
                </div>
            </div>

            <div class="gallery">
                <a href="https://fcbayern.com/en/news/2021/04/schwarz-and-demichelis-take-over-bayern-reserves-ahead-of-schedule" target="_blank"><img src="images/coach.webp" alt="coaches image"></a>
                <div class="desc">
                    <b>Schwarz and Demichelis</b>
                </div>
            </div>

            <div class="gallery">
                <a href="https://fcbayern.com/en/news/2021/04/5-facts--figures-on-fc-bayern-vs-paris-saint-germain" target="_blank"><img src="images/facts.webp" alt="facts image"></a>
                <div class="desc">
                    <b>5 facts on quarter-final</b>
                </div>
            </div>

            <div class="gallery">
                <a href="https://fcbayern.com/en/news/2021/03/bundesliga-matchdays-29-to-32--timings-announced" target="_blank"><img src="images/sched.webp" alt="fixtures image"></a>
                <div class="desc">
                    <b>Matchdays 29 to 32</b>
                </div>
            </div>

            <div class="gallery">
                <a href="https://fcbayern.com/en/news/2021/04/strong-showing-gives-fcb-courage-ahead-of-return-leg"><img src="images/choupo.webp"></a>
                <div class="desc">
                    <b>Always keep going!</b>
                </div>
            </div>

            <div class="gallery">
                <a href="https://fcbayern.com/en/news/2021/04/gnabry-coronavirus"><img src="images/gnabry.webp"></a>
                <div class="desc">
                    <b>Gnabry tests positive</b>
                </div>
            </div>

            <div class="gallery">
                <a href="https://fcbayern.com/en/news/matchpreviews/2021/04/preview-champions-league-fc-bayern-vs-paris-saint-germain"><img src="images/coman.webp"></a>
                <div class="desc">
                    <b>Final reloaded!</b>
                </div>
            </div>

            <div class="gallery">
                <a href="https://fcbayern.com/en/news/2021/04/become-a-part-of-the-fc-bayern-world-squad"><img src="images/world.webp"></a>
                <div class="desc">
                    <b>Become a part of FC Bayern</b>
                </div>
            </div>
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
