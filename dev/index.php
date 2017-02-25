<!DOCTYPE html>
<html lang="en">
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Projects";
$page_description = "Main Page";
$page_keywords = ['Dev', 'Projects', 'Coding'];
$navFrom = 'proj';
$navTo = 'projects';
$n_key = 'Coding Projects';
$theme_color = '#4CAF50'; //green
$hamburger_menu_color = "#ffffff";

phpHeader();
?>
<body>

<?php phpNav() ?>

<main>

    <?php
    banner('android-n.jpg', 'Themes', 'Android Apps', 'Open Source');
    ?>

    <div class="container">
        <div class="row" id="projects">
            <?php

            appCard("Material Glass", "The first Android theme created for Android 5.0.",
                "heroimage.jpg",
                array("Running since Lollipop and still going with Marshmallow.",
                    "Supports over 60 overlays in both CM and RRO, and comes with over 200 icons.",
                    "Also contains a full app UI with online wallpapers",
                    "Over 500 000 downloads!"),
                array("Github-CM" => "https://github.com/PitchedApps/Material-Glass",
                    "Github-OMS" => "https://github.com/PitchedApps/Material-Glass-Substratum",
                    "Play Store" => "https://play.google.com/store/apps/details?id=com.pitchedapps.material.glass.free"));

            appCard("Frost for Facebook", "A comprehensive third party Facebook app, made with design and functionality in mind.",
                "frost_banner.jpg",
                array("Fully themeable", "Battery friendly", "Uses the graph API"),
                array("Github" => "https://github.com/AllanWang/Facebook-Frost",
                    "Play Store" => "https://play.google.com/store/apps/details?id=com.pitchedapps.facebook.frost"));

            ?>

        </div>
        <div class="row" id="libraries">

            <?php

            appCard("Icon Showcase", "An extensive UI library for icon packs.", "icon_showcase.jpg",
                array("Also contains a request tool, a preview viewpager, a wallpaper chooser, and more.",
                    "Created with Jahir Fiquitiva"),
                array("Github" => "https://github.com/jahirfiquitiva/IconShowcase"));

            appCard("Capsule", "An android UI framework library for heavy designs.", "capsule.jpg",
                array("Built around the coordinator layout view",
                    "Supports easy FAB and permission handling with EventBus",
                    "Comes with many useful util methods"),
                array("Github" => "https://github.com/AllanWang/Capsule"));

            ?>

        </div>
        <div class="row" id="allanbots">

            <?php

            appCard("Allanbot", "An extensive Facebook chatbot with Firebase integration.", "allanbot_banner.jpg",
                array("General chatbot through pandorabots",
                    "Supports reminders and notifications",
                    "Can change chat colors, chat title, and chat nicknames",
                    "For a full list of features, message \"@allanbot help\""),
                array("Github" => "https://github.com/AllanWang/AllanBot-Public",
                    "Facebook Account" => "https://www.facebook.com/profile.php?id=100004410158491&fref=ts"));

            appCard("Allanbot Official", "New bot, new features; uses the official messenger SDK", "allanbot_official_banner.jpg",
                array("Currently built to scrape for McGill lecture recordings."),
                array("Chat" => "https://m.me/theallanbot"));

            ?>

        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
