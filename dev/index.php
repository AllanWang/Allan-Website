<!DOCTYPE html>
<html lang="en">
<?php
$page_title = "Projects";
$page_description = "Main Page";
$navFrom = 'proj';
$navTo = 'projects';
$theme_color = '#4CAF50'; //green
include("../include/header.php"); ?>
<body>
<?php include("../include/nav.php"); ?>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br>
            <br>
            <h1 class="header center white-text text-lighten-2 pad-top-20">Coding Projects</h1>
            <div class="row center">
                <h5 class="header col s12 light">Themes &bull; Android Apps &bull; Open Source</h5>
            </div>
            <!-- <div class="row center">
      <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light black lighten-1">Get Started</a>
    </div> -->
            <br>
            <br>

        </div>
    </div>
    <div class="parallax blur-darken"><img src="images/android-n.jpg" alt="Unsplashed background img 1"></div>
</div>

<?php

function preCard($image, $title)
{
    echo "<div class=\"col s12 m4\">
                <div class=\"card medium\">
                    <div class=\"card-image\">
                        <img src=\"images/${image}\">
                        <span class=\"card-title background-gradient\">${title}</span>
                    </div>";
}

function postCard()
{
    echo "</div>
            </div>";
}

?>

<div class="container">
    <div class="section">
        <!--   Android Cards   -->
        <div class="row" id="projects">
            <?php preCard("heroimage.png", "Material Glass") ?>
            <div class="card-content">
                <p>The first Android theme created for Android 5.0.</p>
                <p>Running since Lollipop and still going with Marshmallow.</p>
            </div>
            <div class="card-action">
                <a href="https://github.com/https://github.com/PitchedApps/Material-Glass" target="_blank">Github-CM</a>
                <a href="https://github.com/PitchedApps/Material-Glass-Layers" target="_blank">Github-Layers</a>
                <a href="https://play.google.com/store/apps/details?id=com.pitchedapps.material.glass.free"
                   target="_blank">Play Store</a>
            </div>
            <?php postCard() ?>


            <?php preCard("frost_banner.png", "Frost for Facebook") ?>
            <div class="card-content">
                <p>A comprehensive third party Facebook app, made with design and functionality in mind.</p>
            </div>
            <div class="card-action">
                <a href="https://github.com/AllanWang/Facebook-Frost" target="_blank">Github</a>
                <a href="https://play.google.com/store/apps/details?id=com.pitchedapps.facebook.frost"
                   target="_blank">Play Store</a>
            </div>
            <?php postCard() ?>

            <?php preCard("icon_showcase.png", "Icon Showcase") ?>
            <div class="card-content">
                <p>An extensive UI library for icon packs.</p>
                <p>Also contains a request tool, a preview viewpager, a wallpaper chooser, and more.</p>
            </div>
            <div class="card-action">
                <a href="https://github.com/jahirfiquitiva/IconShowcase" target="_blank">Github</a>
            </div>
            <?php postCard() ?>

        </div>
        <!--Libraries-->
        <div class="row">
            <?php preCard("capsule.png", "Capsule") ?>
            <div class="card-content">
                <p>A UI framework library for heavy designs.</p>
            </div>
            <div class="card-action">
                <a href="https://github.com/AllanWang/Capsule" target="_blank">Github</a>
            </div>
            <?php postCard() ?>
        </div>
        <!-- JavaScript -->
        <div class="row">
            <?php preCard("allanbot_banner.jpg", "AllanBot") ?>
            <div class="card-content">
                <p>An extensive Facebook chatbot with Firebase integration.</p>
            </div>
            <div class="card-action">
                <a href="https://github.com/AllanWang/AllanBot-Public" target="_blank">Github</a>
                <a href="https://www.facebook.com/profile.php?id=100004410158491&fref=ts" target="_blank">Facebook
                    Account</a>
            </div>
            <?php postCard() ?>

            <?php preCard("allanbot_official_banner.jpg", "AllanBot Official") ?>
            <div class="card-content">
                <p>New bot, new features; uses the official messenger SDK</p>
                <p>Currently built to scrape for McGill lecture recordings.</p>
            </div>
            <div class="card-action">
                <a href="http://m.me/theallanbot" target="_blank">Chat</a>
            </div>
            <?php postCard() ?>
        </div>
    </div>
</div>

<?php include("../include/footer.php"); ?>

</body>

</html>
