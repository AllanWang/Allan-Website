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
                        <svg id="aw-svg" width="300" height="110" xmlns="http://www.w3.org/2000/svg">
                            <path id="w-1"
                                  d="M90,10 L120,100"
                                  stroke="#000"
                                  stroke-width="15"
                                  stroke-linecap="round"></path>
                            <path id="w-4"
                                  d="M180,100 L210,10"
                                  stroke="#000"
                                  stroke-width="15"
                                  stroke-linecap="round"></path>
                            <path id="w-2"
                                  d="M120,100 L150,10"
                                  stroke="#F44336"
                                  stroke-width="15"
                                  stroke-linecap="round"></path>
                            <path id="w-3"
                                  d="M150,10 L180,100"
                                  stroke="#F44336"
                                  stroke-width="15"
                                  stroke-linecap="round"></path>
                            <path id="w-drop"
                                  d="M150,55 L149,58 A1,1,0,0,0,151,58"
                                  fill="#F44336"></path>
                            <animate xlink:href="#w-drop"
                                     attributeName="d"
                                     attributeType="XML"
                                     to="M150,55 L143,76 A7,7,0,0,0,157,76"
                                     dur="0.3s"
                                     begin="2.2s"
                                     fill="freeze"></animate>
                        </svg>
                    </div>
                    <div class="row center-align">
                        <div class="col s4">
                            <span id="s-themer">Themer</span>
                        </div>
                        <div class="col s4">
                            <span id="s-developer">Developer</span>
                        </div>
                        <div class="col s4">
                            <span id="s-student">Student</span>
                        </div>
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
<!--<script type="text/javascript" src="/bower_components/Snap.svg/dist/snap.svg-min.js"></script>-->
<!--<script type="text/javascript" src="about.js"></script>-->
</body>

</html>
