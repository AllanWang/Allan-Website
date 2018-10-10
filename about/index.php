<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "About Allan";
$page_description = "About Allan";
$page_keywords = ['About'];
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
                    <span>//TODO ¯\_(ツ)_/¯ I am currently in my last year at <a
                                href="http://mcgill.ca/">McGill University</a> studying <s>Pharmacology and Computer Science</s> Software Engineering</span>.
                    I interned at Google as a UX Engineer in the summer of 2018, and will be going back as a FTE in
                    2019.

                    <!--                    <div id="dev">-->
                    <!--                        <img class="dev-icon big" src="dev/java.svg">-->
                    <!--                        <img class="dev-icon medium" src="dev/node-js.svg">-->
                    <!--                    </div>-->

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
