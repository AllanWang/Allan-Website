<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "About Allan";
$page_description = "About Allan";
$navFrom = 'about';
//$navTo = 'commons';
$theme_color = "#4078c0"; //github blue
global $cssArr;
array_push($cssArr, 'about');

phpHeader(); ?>
<body>

<?php
phpNav(); ?>

<main>

    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m9 l10">
                    <h3 class="header center">About Allan Wang</h3>
                    <span>I'm just a student who loves to share. I am currently in my second year at <a
                                href="http://mcgill.ca/">McGill University</a> studying Pharmacology and Computer Science</span>
                    <div id="about-logo-container" class="center">
                        <svg width="140" height="110" xmlns="http://www.w3.org/2000/svg">
                            <path id="w-1"
                                  d="M10,10 L40,100"
                                  stroke="#000"
                                  stroke-width="15"
                                  stroke-opacity="0.7"
                                  stroke-linecap="round"></path>
                            <path id="w-4"
                                  d="M100,100 L130,10"
                                  stroke="#000"
                                  stroke-width="15"
                                  stroke-opacity="0.7"
                                  stroke-linecap="round"></path>
                            <path id="w-2"
                                  d="M40,100 L70,10"
                                  stroke="#F44336"
                                  stroke-width="15"
                                  stroke-opacity="0.7"
                                  stroke-linecap="round"></path>
                            <path id="w-3"
                                  d="M70,10 L100,100"
                                  stroke="#F44336"
                                  stroke-width="15"
                                  stroke-opacity="0.7"
                                  stroke-linecap="round"></path>
                            <path id="w-drop"
                                  d="M70,55 L63,76 A7,7,0,0,0,77,76"
                                  fill="#F44336"
                                  fill-opacity="0.7"></path>

                        </svg>
                    </div>
                    <div class="row center-align">
                        <div id="s-themer" class="col s4">Themer</div>
                        <div id="s-developer" class="col s4">Developer</div>
                        <div id="s-student" class="col s4">Student</div>
                    </div>
                    <div id="dev">
                        <img class="dev-icon big" src="dev/java.svg">
                        <img class="dev-icon medium" src="dev/node-js.svg">
                    </div>

                </div>
                <div class="col hide-on-small-only m3 l2">
                    <div class="pinned vertical-center black-link">
                        <h5>Referrals</h5>
                        <?php
                        bullets(
                            linkNewTab("Dropbox", "https://db.tt/x1aIBz3r"),
                            linkNewTab("$1 web hosting<br>(One.com)", "http://one.me/enahtapy")
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
<!--<script type="text/javascript" src="/bower_components/typed.js/dist/typed.min.js"></script>-->
<!--<script type="text/javascript" src="about.js"></script>-->
</body>

</html>
