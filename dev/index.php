<!DOCTYPE html>
<html lang="en" ng-app="frameApp">
<?php
include("../include/config.php");
$page_title = "Projects";
$page_description = "Main Page";
$navFrom = 'proj';
$navTo = 'projects';
$n_key = 'Coding Projects';
$theme_color = '#4CAF50'; //green
$hamburger_menu_color = "#ffffff";
phpHeader(true);
?>
<script src="/scripts/vendor/angular.min.js"></script>
</head>
<body>

<?php phpNav() ?>

<main>

    <?php
    banner('android-n.jpg', 'Themes', 'Android Apps', 'Open Source');
    ?>
    <div class="container" ng-cloak>
        <div class="row" id="projects">
            <aw-app-card title="Material Glass" id="material-glass" image="heroimage.jpg"
                         desc="The first Android theme created for Android 5.0.">
                <aw-bullets>
                    <li>Running since Lollipop and still going with Marshmallow.</li>
                    <li>Supports over 60 overlays in both CM and RRO, and comes with over 200 icons.</li>
                    <li>Also contains a full app UI with online wallpapers</li>
                    <li>Over 500 000 downloads!</li>
                </aw-bullets>
                <app-card-links>
                    <a href="https://github.com/PitchedApps/Material-Glass" target="_blank">Github-CM</a>
                    <a href="https://github.com/PitchedApps/Material-Glass-Substratum" target="_blank">Github-OMS</a>
                    <a href="https://play.google.com/store/apps/details?id=com.pitchedapps.material.glass.free"
                       target="_blank">Play Store</a>
                </app-card-links>
            </aw-app-card>
            <aw-app-card title="Frost for Facebook" id="frost-for-facebook" image="frost_banner.jpg"
                         desc="A comprehensive third party Facebook app, made with design and functionality in mind.">
                <aw-bullets>
                    <li>Fully themeable</li>
                    <li>Battery friendly</li>
                    <li>Uses the graph API</li>
                </aw-bullets>
                <app-card-links>
                    <a href="https://github.com/AllanWang/Facebook-Frost" target="_blank">Github</a>
                    <a href="https://play.google.com/store/apps/details?id=com.pitchedapps.facebook.frost"
                       target="_blank">Play Store</a>
                </app-card-links>
            </aw-app-card>
        </div>
        <div class="row" id="libraries">
            <aw-app-card title="Icon Showcase" id="icon-showcase" image="icon_showcase.jpg"
                         desc="An extensive UI library for icon packs.">
                <aw-bullets>
                    <li>Also contains a request tool, a preview viewpager, a wallpaper chooser, and more.
                    </li>
                    <li>Created with Jahir Fiquitiva</li>
                </aw-bullets>
                <app-card-links>
                    <a href="https://github.com/jahirfiquitiva/IconShowcase" target="_blank">Github</a>
                </app-card-links>
            </aw-app-card>
            <aw-app-card title="Capsule" id="capsule" image="capsule.jpg"
                         desc="An android UI framework library for heavy designs.">
                <aw-bullets>
                    <li>Built around the coordinator layout view</li>
                    <li>Supports easy FAB and permission handling with EventBus</li>
                    <li>Comes with many useful util methods</li>
                </aw-bullets>
                <app-card-links>
                    <a href="https://github.com/AllanWang/Capsule" target="_blank">Github</a>
                </app-card-links>
            </aw-app-card>
        </div>
        <div class="row" id="allanbots">
            <aw-app-card title="Allanbot" id="allanbot" image="allanbot_banner.jpg"
                         desc="An extensive Facebook chatbot with Firebase integration.">
                <aw-bullets>
                    <li>General chatbot through pandorabots</li>
                    <li>Supports reminders and notifications</li>
                    <li>Can change chat colors, chat title, and chat nicknames</li>
                    <li>For a full list of features, message "@allanbot help"</li>
                </aw-bullets>
                <app-card-links>
                    <a href="https://github.com/AllanWang/AllanBot-Public" target="_blank">Github</a>
                    <a href="https://www.facebook.com/profile.php?id=100004410158491&fref=ts" target="_blank">Facebook
                        Account</a>
                </app-card-links>
            </aw-app-card>
            <aw-app-card title="Allanbot Official" id="allanbot-official" image="allanbot_official_banner.jpg"
                         desc="New bot, new features; uses the official messenger SDK">
                <aw-bullets>
                    <li>Currently built to scrape for McGill lecture recordings.</li>
                </aw-bullets>
                <app-card-links>
                    <a href="https://m.me/theallanbot" target="_blank">Chat</a>
                </app-card-links>
            </aw-app-card>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
<!--Angular-->
<script src="/scripts/app.js"></script>
<script src="/scripts/directives/app-card.js"></script>
</body>

</html>
