<!DOCTYPE html>
<html lang="en">
<?php
include("include/config.php");
$page_title = "Home";
$page_description = "Main Page";
$theme_color = "#0097A7"; //dark cyan
global $cssArr;
array_push($cssArr, 'home');
phpHeader(); ?>
<body>

<?php phpNav(); ?>

<main>
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br>
                <br>
                <h1 class="header center white-text text-lighten-2 pad-top-20">Home Page</h1>
                <div class="row center">
                    <h5 class="header col s12 light white-text">//TODO</h5>
                </div>
                <!-- <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light black lighten-1">Get Started</a>
        </div> -->
                <br>
                <br>

            </div>
        </div>
        <div class="parallax blur-darken"><img src="images/polygon_clouds.jpg" alt="Polygon Clouds Header"></div>
    </div>

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col m3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103.79968 118.68008">
                        <defs>
                            <filter id="c" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity=".49804" flood-color="#000" result="flood"></feFlood>
                                <feComposite in="flood" in2="SourceGraphic" operator="in"
                                             result="composite1"></feComposite>
                                <feGaussianBlur in="composite1" stdDeviation="6" result="blur"></feGaussianBlur>
                                <feOffset dx="6" dy="6" result="offset"></feOffset>
                                <feComposite in="SourceGraphic" in2="offset" result="composite2"></feComposite>
                            </filter>
                            <filter id="a" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity=".49804" flood-color="#000" result="flood"></feFlood>
                                <feComposite in="flood" in2="SourceGraphic" operator="in"
                                             result="composite1"></feComposite>
                                <feGaussianBlur in="composite1" stdDeviation="6" result="blur"></feGaussianBlur>
                                <feOffset dx="6" dy="6" result="offset"></feOffset>
                                <feComposite in="SourceGraphic" in2="offset" result="composite2"></feComposite>
                            </filter>
                            <filter id="b" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity=".49804" flood-color="#000" result="flood"></feFlood>
                                <feComposite in="flood" in2="SourceGraphic" operator="in"
                                             result="composite1"></feComposite>
                                <feGaussianBlur in="composite1" stdDeviation="6" result="blur"></feGaussianBlur>
                                <feOffset dx="6" dy="6" result="offset"></feOffset>
                                <feComposite in="SourceGraphic" in2="offset" result="composite2"></feComposite>
                            </filter>
                        </defs>
                        <path fill="#03a9f4" d="M121.6797 618.83008l-297.06647-514.5342h594.1329z"
                              transform="matrix(.09423 0 0 .12894 22.124 31.613)" filter="url(#a)"></path>
                        <path fill="#b3e5fc" d="M121.6797 618.83008l-297.06647-514.5342h594.1329z"
                              transform="matrix(.09423 0 0 .12894 58.744 32.252)" filter="url(#b)"></path>
                        <path fill="#0288d1" d="M156.2467 18.94767l109.39443 189.4767H46.85228z" filter="url(#c)"
                              transform="scale(.33206)"></path>
                    </svg>
                </div>
                <div class="col m9 center-align">
                    <h6 id="testt" class="vertical-center"></h6>
                    <div class='content'>
                        <div class='visible'>
                            <div class="il">
                                Hello
                            </div>
                            <ul class="ir">
                                <li>world !</li>
                                <li>Bob !</li>
                                <li>users !</li>
                                <li>everybody !</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<?php
phpFooter();
//js('home');
?>
</body>

</html>