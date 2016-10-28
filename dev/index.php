<!DOCTYPE html>
<html lang="en">
<?php
include("../include/config.php");
$page_title = "Projects";
$page_description = "Main Page";
$navFrom = 'proj';
$navTo = 'projects';
$theme_color = '#4CAF50'; //green
phpHeader(); ?>
<body>

<?php phpNav() ?>

<main>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br>
                <br>
                <h1 class="header center white-text text-lighten-2 pad-top-20">Coding Projects</h1>
                <div class="row center white-text">
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

    function card($image, $title, $desc, $full_desc, array $links)
    {
        $id = strtolower(str_replace(" ", "-", $title));
        echo
        "<div class=\"col s12 m6\">
    <div id=\"$id\" class=\"card medium sticky-action\">
        <div class=\"card-image waves-effect waves-block waves-light\">
            <img class=\"activator\" src=\"images/${image}\">
            <span class=\"card-title activator background-gradient\">${title}</span>
        </div>
        <div class=\"card-content\">
            <p>${desc}</p>
        </div>
        <div class=\"card-action\">";

        foreach ($links as $item) {
            $pair = explode("|", $item);
            echo "<a href=\"$pair[0]\" target=\"_blank\">$pair[1]</a>";
        }

        echo "</div>
        <div class=\"card-reveal\">
            <span class=\"card-title grey-text text-darken-4\">${title}<i class=\"material-icons right\">close</i></span>
            <p>${full_desc}</p>
        </div>
    </div>
</div>";
    }

    ?>

    <div class="container">
        <div class="section">
            <!--   Android Cards   -->
            <div class="row" id="projects">
                <?php
                card("heroimage.jpg",
                    "Material Glass",
                    "The first Android theme created for Android 5.0.",
                    "&bull; Running since Lollipop and still going with Marshmallow.
                    <br>&bull; Supports over 60 overlays in both CM and RRO, and comes with over 200 icons.
                    <br>&bull; Also contains a full app UI with online wallpapers
					<br>&bull; Over 500 000 downloads!",
                    array("https://github.com/PitchedApps/Material-Glass|Github-CM",
                        "https://github.com/PitchedApps/Material-Glass-Layers|Github-RRO",
                        "https://play.google.com/store/apps/details?id=com.pitchedapps.material.glass.free|Play Store"));

                card("frost_banner.jpg",
                    "Frost for Facebook",
                    "A comprehensive third party Facebook app, made with design and functionality in mind.",
                    "&bull; Fully themeable
                    <br>&bull; Battery friendly
                    <br>&bull; Uses the graph API",
                    array("https://github.com/AllanWang/Facebook-Frost|Github",
                        "https://play.google.com/store/apps/details?id=com.pitchedapps.facebook.frost|Play Store"));
                ?>
            </div>
            <div class="row" id="libraries">
                <?php
                card("icon_showcase.jpg",
                    "Icon Showcase",
                    "An extensive UI library for icon packs.",
                    "&bull; Also contains a request tool, a preview viewpager, a wallpaper chooser, and more.
                    <br>&bull; Created with Jahir Fiquitiva",
                    array("https://github.com/jahirfiquitiva/IconShowcase|Github"));

                card("capsule.jpg",
                    "Capsule",
                    "An android UI framework library for heavy designs.",
                    "&bull; Built around the coordinator layout view
                    <br>&bull; Supports easy FAB and permission handling
                    <br>&bull; Comes with many useful util methods",
                    array("https://github.com/AllanWang/Capsule|Github"));
                ?>
            </div>
            <div class="row" id="allanbots">
                <?php
                card("allanbot_banner.jpg",
                    "AllanBot",
                    "An extensive Facebook chatbot with Firebase integration.",
                    "&bull; General chatbot through pandorabots
                    <br>&bull; Supports reminders and notifications
                    <br>&bull; Can change chat colors, chat title, and chat nicknames
                    <br>&bull; For a full list of features, message \"@allanbot help\"",
                    array("https://github.com/AllanWang/AllanBot-Public|Github",
                        "https://www.facebook.com/profile.php?id=100004410158491&fref=ts|Facebook Account"));

                card("allanbot_official_banner.jpg",
                    "Allanbot Official",
                    "New bot, new features; uses the official messenger SDK",
                    "&bull; Currently built to scrape for McGill lecture recordings.",
                    array("http://m.me/theallanbot|Chat"));
                ?>
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>

</body>

</html>
