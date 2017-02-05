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
                <svg id="aw-svg" width="300" height="200" xmlns="http://www.w3.org/2000/svg">
                    <path id="w-1"
                          d="M90,55 L120,145"
                          stroke="#000"
                          stroke-width="15"
                          stroke-linecap="round"></path>
                    <path id="w-4"
                          d="M180,145 L210,55"
                          stroke="#000"
                          stroke-width="15"
                          stroke-linecap="round"></path>
                    <path id="w-2"
                          d="M120,145 L150,55"
                          stroke="<?php echo $theme_color?>"
                          stroke-width="15"
                          stroke-linecap="round"></path>
                    <path id="w-3"
                          d="M150,55 L180,145"
                          stroke="<?php echo $theme_color?>"
                          stroke-width="15"
                          stroke-linecap="round"></path>
                    <path id="w-drop"
                          d="M150,100 L149,103 A1,1,0,0,0,151,103"
                          fill="<?php echo $theme_color?>"></path>
                    <animate xlink:href="#w-drop"
                             attributeName="d"
                             attributeType="XML"
                             to="M150,100 L143,121 A7,7,0,0,0,157,121"
                             dur="0.3s"
                             begin="2.2s"
                             fill="freeze"></animate>
                </svg>
            </div>
            <div id="b-row" class="row center-align">
                <div class="col s4">
                    <a id="b-themer" class="waves-effect btn-flat">Themer</a>
                </div>
                <div class="col s4">
                    <a id="b-developer" class="waves-effect btn-flat">Developer</a>
                </div>
                <div class="col s4">
                    <a id="b-student" class="waves-effect btn-flat selected">Student</a>
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
<script type="text/javascript" src="/bower_components/Snap.svg/dist/snap.svg-min.js"></script>
<script type="text/javascript" src="/include/js/home.js"></script>

</body>

</html>