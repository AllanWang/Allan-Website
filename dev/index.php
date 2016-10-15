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


<div class="container">
    <div class="section">

        <!--   Android Cards   -->
        <div class="row" id="projects">
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/heroimage.png">
                        <span class="card-title background-gradient">Material Glass</span>
                    </div>
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
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/frost_banner.png">
                        <span class="card-title background-gradient">Frost for Facebook</span>
                    </div>
                    <div class="card-content">
                        <p>A comprehensive third party Facebook app, made with design and functionality in mind.</p>
                    </div>
                    <div class="card-action">
                        <a href="https://github.com/AllanWang/Facebook-Frost" target="_blank">Github</a>
                        <a href="https://play.google.com/store/apps/details?id=com.pitchedapps.facebook.frost"
                           target="_blank">Play Store</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="../images/background3.jpg">
                        <span class="card-title background-gradient"></span>
                    </div>
                    <div class="card-content">
                        <p>Todo</p>
                    </div>
                    <div class="card-action">
                        <a href="https://github.com/AllanWang/Facebook-Frost" target="_blank">Github</a>
                        <a href="https://play.google.com/store/apps/details?id=com.pitchedapps.facebook.frost"
                           target="_blank">Play Store</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript -->
        <div class="row">
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/allanbot_banner.jpg">
                        <span class="card-title background-gradient">AllanBot</span>
                    </div>
                    <div class="card-content">
                        <p>An extensive Facebook chatbot with Firebase integration.</p>
                    </div>
                    <div class="card-action">
                        <a href="https://github.com/AllanWang/AllanBot-Public" target="_blank">Github</a>
                        <a href="https://www.facebook.com/profile.php?id=100004410158491&fref=ts" target="_blank">Facebook
                            Account</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include("../include/footer.php"); ?>

</body>

</html>
