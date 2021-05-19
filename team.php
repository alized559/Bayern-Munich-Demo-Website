<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>FC Bayern Team</title>
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

        <div class="squad">
            <a href="standings.php">
                <img src="images/team.webp" alt="FC Bayern team">
            </a>
        </div>
        <div class="data">
            <table class="table1">
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Nationality</th>
                    <th>Age</th>
                </tr>
                <tr>
                    <th colspan="4" style="text-align: center">GoalKeeper</th>
                </tr>
                <tr>
                    <td>39</td>
                    <td>Ron-Thorben Hoffmann</td>
                    <td>Germany</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Manuel Neuer</td>
                    <td>Germany</td>
                    <td>35</td>
                </tr>
                <tr>
                    <td>35</td>
                    <td>Alexander Nubel</td>
                    <td>Germany</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>Lukas Schneller</td>
                    <td>Germany</td>
                    <td>20</td>
                </tr>
                <tr>
                    <th colspan="4" style="text-align: center">Defender</th>
                </tr>
                <tr>
                    <td>27</td>
                    <td>David Alaba</td>
                    <td>Austria</td>
                    <td>29</td>
                </tr>
                <tr>
                    <td>43</td>
                    <td>Brigth Arrey-Mbi</td>
                    <td>Germany</td>
                    <td>18</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Jerome Boateng</td>
                    <td>Germany</td>
                    <td>33</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Alphonso Davies</td>
                    <td>Canada</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Luca Hernandez</td>
                    <td>France</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>48</td>
                    <td>Alexander Lungwitz</td>
                    <td>Germany</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Tanguy Nianzou Kouassi</td>
                    <td>France</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Benjamin pavard</td>
                    <td>France</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Bouna Sarr</td>
                    <td>Guinea</td>
                    <td>29</td>
                </tr>
                <tr>
                    <td>37</td>
                    <td>Kilian Senkbeil</td>
                    <td>Germany</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Niklas Sule</td>
                    <td>Germany</td>
                    <td>26</td>
                </tr>
                <tr>
                    <th colspan="4" style="text-align: center">Midfielder</th>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Leon Goretzka</td>
                    <td>Germany</td>
                    <td>26</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Javi Martinez</td>
                    <td>Spain</td>
                    <td>33</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Joshua Kimmich</td>
                    <td>Germany</td>
                    <td>26</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Marc Roca</td>
                    <td>Spain</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>42</td>
                    <td>Jamal Musiala</td>
                    <td>Germany</td>
                    <td>18</td>
                </tr>
                <tr>
                    <td>38</td>
                    <td>Daniels Ontuzans</td>
                    <td>Latvia</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>Christopher Scott</td>
                    <td>Germany</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>36</td>
                    <td>Angelo Stiller</td>
                    <td>Germany</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>Tiago Dantas</td>
                    <td>Portugal</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td>40</td>
                    <td>Malik Tillman</td>
                    <td>Germany</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Corentin Tolisso</td>
                    <td>France</td>
                    <td>27</td>
                </tr>
                <tr>
                    <td>49</td>
                    <td>Maximilian Zaiser</td>
                    <td>Germany</td>
                    <td>22</td>
                </tr>
                <tr>
                    <th colspan="4" style="text-align: center">Forward</th>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Jann-Fiete Arp</td>
                    <td>Germany</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Eric Maxim Choupo-Moting</td>
                    <td>Germany</td>
                    <td>32</td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>Kingsley Coman</td>
                    <td>France</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Douglas Costa</td>
                    <td>Brazil</td>
                    <td>31</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Serge Gnabry</td>
                    <td>Germany</td>
                    <td>26</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Robert Lewandowski</td>
                    <td>Pland</td>
                    <td>33</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Thomas Muller</td>
                    <td>Germany</td>
                    <td>32</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Leroy Sane</td>
                    <td>Germany</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>47</td>
                    <td>Armindo Sieb</td>
                    <td>Germany</td>
                    <td>18</td>
                </tr>
                <tr>
                    <th colspan="4" style="text-align: center">Coach</th>
                </tr>
                <tr>
                    <td> </td>
                    <td>Hansi Flick</td>
                    <td>Germany</td>
                    <td>56</td>
                </tr>
            </table>
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
