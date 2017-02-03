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
                    <div style="height: 200px"></div>
<!--                    <img src="images/aw-material.svg">-->
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