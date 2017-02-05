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

    <div class="container">
        <div class="section">

            <div id="w-logo-container" class="center">
                <svg id="aw-svg" width="300" height="200" xmlns="http://www.w3.org/2000/svg"></svg>
            </div>
            <div id="b-row" class="row center-align">
                <div class="col s4">
                    <a id="b-themer" class="waves-effect btn-flat">Themer</a>
                </div>
                <div class="col s4">
                    <a id="b-developer" class="waves-effect btn-flat">Developer</a>
                </div>
                <div class="col s4">
                    <a id="b-student" class="waves-effect btn-flat">Student</a>
                </div>
            </div>
            <div id="w-content-container">

            </div>

        </div>
    </div>
</main>
<?php
phpFooter();
?>
<script type="text/javascript" src="/include/js/home.js"></script>

</body>

</html>