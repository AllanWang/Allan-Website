<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Pandemic";
$page_description = "Pandemic";
$page_keywords = ['Pandemic'];
$navFrom = 'pandemic';
//$navTo = 'commons';
$theme_color = "#4078c0"; //github blue
global $cssArr;
array_push($cssArr, 'pandemic');

phpHeader(); ?>
<body>

<?php
phpNav(); ?>

<main>

    <div class="container">
        <div class="section">
            <div class="row">
                    <h3 class="header center">Pandemic</h3>
                    <div class="hidden-card"/>

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
