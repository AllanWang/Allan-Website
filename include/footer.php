<?php include('config.php') ?>
<footer class="page-footer" style="background-color:
<?php echo(isset($theme_color) ? $theme_color : '#009688'); ?>
    !important ">
    <!--defaults to teal-->
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer</h5>
                <p class="grey-text text-lighten-4">TODO</p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <!-- Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a> -->
            <p align="right">&copy; Allan Wang 2016</p>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="<?php echo $include_url; ?>js/jquery-2.4.4.min.js"></script>
<script src="<?php echo $include_url; ?>js/materialize.min.js"></script>
<script src="<?php echo $include_url; ?>js/init.js"></script>
<script src="<?php echo $include_url; ?>js/animate.js"></script>

<script>
    //script for scroll animations

    $(window).on("load", function () {
        <?php
        if (isset($_GET['scroll_to'])) {
            if (isset($preload)) {
                echo "jumpTo(\"{$_GET["scroll_to"]}\");\n";
            } else {
                echo "animateTo(\"{$_GET["scroll_to"]}\", 250);\n";
            }
        }
        if (isset($preload)) echo "$('body').addClass('loaded');\n";
        ?>
    });

    //check for nav override vars
    <?php if (isset($navFrom)) {
        echo('navAnimOverride("' . $navFrom . '", "');
        echo((isset($navTo) ? $navTo : 'null') . "\");\n");
    } ?>


</script>
