<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>FC Bayern Standings</title>
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
                <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="shirts.php">User</a></li>
                <?php } else { ?>
                    <li><a href="login.php">User</a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="contain">
            <div class="season">
                <h1>Bundesliga Season 2020/2021</h1>
            </div>
            <div class="standing">
                <table >
                    <tr>
                        <th class="col">Pos.</th>
                        <th>Team</th>
                        <th class="col">P</th>
                        <th class="col">W</th>
                        <th class="col">D</th>
                        <th class="col">L</th>
                        <th class="col">Goals</th>
                        <th class="col">Diff.</th>
                        <th class="col">Pts.</th>
                    </tr>
                    <tr>
                        <td class="col">1</td>
                        <td>FC Bayern Munich</td>
                        <td class="col">27</td>
                        <td class="col">20</td>
                        <td class="col">4</td>
                        <td class="col">3</td>
                        <td class="col">79:35</td>
                        <td class="col">44</td>
                        <td class="col">64</td>
                    </tr>
                    <tr>
                        <td class="col">2</td>
                        <td>RB Leipzig</td>
                        <td class="col">27</td>
                        <td class="col">17</td>
                        <td class="col">6</td>
                        <td class="col">4</td>
                        <td class="col">48:22</td>
                        <td class="col">26</td>
                        <td class="col">57</td>
                    </tr>
                    <tr>
                        <td class="col">3</td>
                        <td>VFL Wolfsburg</td>
                        <td class="col">27</td>
                        <td class="col">15</td>
                        <td class="col">9</td>
                        <td class="col">3</td>
                        <td class="col">46:22</td>
                        <td class="col">24</td>
                        <td class="col">54</td>
                    </tr>
                    <tr>
                        <td class="col">4</td>
                        <td>Eintracht Frankfurt</td>
                        <td class="col">27</td>
                        <td class="col">13</td>
                        <td class="col">11</td>
                        <td class="col">3</td>
                        <td class="col">55:37</td>
                        <td class="col">18</td>
                        <td class="col">50</td>
                    </tr>
                    <tr>
                        <td class="col">5</td>
                        <td>Borussia Dortmund</td>
                        <td class="col">27</td>
                        <td class="col">13</td>
                        <td class="col">4</td>
                        <td class="col">10</td>
                        <td class="col">55:39</td>
                        <td class="col">16</td>
                        <td class="col">43</td>
                    </tr>
                    <tr>
                        <td class="col">6</td>
                        <td>Bayer 04 Leverkusen</td>
                        <td class="col">27</td>
                        <td class="col">12</td>
                        <td class="col">7</td>
                        <td class="col">8</td>
                        <td class="col">45:32</td>
                        <td class="col">13</td>
                        <td class="col">43</td>
                    </tr>
                    <tr>
                        <td class="col">7</td>
                        <td>1. FC Union Berlin</td>
                        <td class="col">27</td>
                        <td class="col">9</td>
                        <td class="col">12</td>
                        <td class="col">6</td>
                        <td class="col">41:33</td>
                        <td class="col">8</td>
                        <td class="col">39</td>
                    </tr>
                    <tr>
                        <td class="col">8</td>
                        <td>VFB Stuttgart</td>
                        <td class="col">27</td>
                        <td class="col">10</td>
                        <td class="col">9</td>
                        <td class="col">8</td>
                        <td class="col">46:41</td>
                        <td class="col">-1</td>
                        <td class="col">37</td>
                    </tr>
                    <tr>
                        <td class="col">9</td>
                        <td>Borussia Monchengladbach</td>
                        <td class="col">27</td>
                        <td class="col">10</td>
                        <td class="col">9</td>
                        <td class="col">8</td>
                        <td class="col">46:41</td>
                        <td class="col">5</td>
                        <td class="col">39</td>
                    </tr>
                    <tr>
                        <td class="col">10</td>
                        <td>SC Freiburg</td>
                        <td class="col">27</td>
                        <td class="col">10</td>
                        <td class="col">7</td>
                        <td class="col">10</td>
                        <td class="col">40:41</td>
                        <td class="col">-1</td>
                        <td class="col">37</td>
                    </tr>
                    <tr>
                        <td class="col">11</td>
                        <td>FC Augsburg</td>
                        <td class="col">27</td>
                        <td class="col">9</td>
                        <td class="col">5</td>
                        <td class="col">13</td>
                        <td class="col">29:41</td>
                        <td class="col">-12</td>
                        <td class="col">32</td>
                    </tr>
                    <tr>
                        <td class="col">12</td>
                        <td>TSG 1899 Hoffenheim</td>
                        <td class="col">27</td>
                        <td class="col">8</td>
                        <td class="col">6</td>
                        <td class="col">13</td>
                        <td class="col">41:47</td>
                        <td class="col">-6</td>
                        <td class="col">30</td>
                    </tr>
                    <tr>
                        <td class="col">13</td>
                        <td>SV Werder Bremen</td>
                        <td class="col">27</td>
                        <td class="col">7</td>
                        <td class="col">9</td>
                        <td class="col">11</td>
                        <td class="col">31:39</td>
                        <td class="col">-8</td>
                        <td class="col">30</td>
                    </tr>
                    <tr>
                        <td class="col">14</td>
                        <td>Hertha BSC Berlin</td>
                        <td class="col">27</td>
                        <td class="col">6</td>
                        <td class="col">7</td>
                        <td class="col">14</td>
                        <td class="col">32:46</td>
                        <td class="col">-14</td>
                        <td class="col">25</td>
                    </tr>
                    <tr>
                        <td class="col">15</td>
                        <td>1. FSV Mainz 05</td>
                        <td class="col">27</td>
                        <td class="col">6</td>
                        <td class="col">7</td>
                        <td class="col">14</td>
                        <td class="col">27:46</td>
                        <td class="col">-19</td>
                        <td class="col">25</td>
                    </tr>
                    <tr>
                        <td class="col">16</td>
                        <td>1. FC Koln</td>
                        <td class="col">27</td>
                        <td class="col">5</td>
                        <td class="col">8</td>
                        <td class="col">14</td>
                        <td class="col">25:47</td>
                        <td class="col">-22</td>
                        <td class="col">23</td>
                    </tr>
                    <tr>
                        <td class="col">17</td>
                        <td>DSC Arminia Bielefeld</td>
                        <td class="col">27</td>
                        <td class="col">6</td>
                        <td class="col">5</td>
                        <td class="col">16</td>
                        <td class="col">21:46</td>
                        <td class="col">-25</td>
                        <td class="col">23</td>
                    </tr>
                    <tr>
                        <td class="col">18</td>
                        <td>FC Schalke 04</td>
                        <td class="col">27</td>
                        <td class="col">1</td>
                        <td class="col">7</td>
                        <td class="col">19</td>
                        <td class="col">17:71</td>
                        <td class="col">-54</td>
                        <td class="col">10</td>
                    </tr>
                </table>
                <div class="season">
                    <h1>Champions League Season 2020/2021</h1>
                </div>
                <table>
                    <tr>
                        <th class="col">Pos.</th>
                        <th>Team</th>
                        <th class="col">P</th>
                        <th class="col">W</th>
                        <th class="col">D</th>
                        <th class="col">L</th>
                        <th class="col">Goals</th>
                        <th class="col">Diff.</th>
                        <th class="col">Pts.</th>
                    </tr>
                    <tr>
                        <td class="col">1</td>
                        <td>FC Bayern Munich</td>
                        <td class="col">6</td>
                        <td class="col">5</td>
                        <td class="col">1</td>
                        <td class="col">0</td>
                        <td class="col">18:5</td>
                        <td class="col">13</td>
                        <td class="col">16</td>
                    </tr>
                    <tr>
                        <td class="col">2</td>
                        <td>Atletico Madrid</td>
                        <td class="col">6</td>
                        <td class="col">2</td>
                        <td class="col">3</td>
                        <td class="col">1</td>
                        <td class="col">7:8</td>
                        <td class="col">-1</td>
                        <td class="col">9</td>
                    </tr>
                    <tr>
                        <td class="col">3</td>
                        <td>FC Red Bull Salzburg</td>
                        <td class="col">6</td>
                        <td class="col">1</td>
                        <td class="col">1</td>
                        <td class="col">4</td>
                        <td class="col">10:17</td>
                        <td class="col">-7</td>
                        <td class="col">4</td>
                    </tr>
                    <tr>
                        <td class="col">4</td>
                        <td>Lokomotiv Moscow</td>
                        <td class="col">6</td>
                        <td class="col">0</td>
                        <td class="col">3</td>
                        <td class="col">3</td>
                        <td class="col">5:10</td>
                        <td class="col">-5</td>
                        <td class="col">3</td>
                    </tr>
                </table>
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
