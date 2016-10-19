<?php include('config.php') ?>
<footer class="page-footer" style="background-color:
<?php echo(isset($theme_color) ? $theme_color : '#009688'); ?>
    !important ">
    <!--defaults to teal-->
    <div class="container">
        <div class="row">
            <div class="col l3 s12" id="to-top">
                <p><i class="fa fa-angle-up clickable grey-text text-lighten-4"> TOP</i></p>
            </div>
            <div align="center" class="col l6 s12">
                <ul class="icon-row">
                    <li><a href="mailto:me@allanwang.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    <li><a href="https://github.com/AllanWang" target="_blank"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://www.paypal.me/Allanw9" target="_blank"><i class="fa fa-paypal"></i></a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <!--                <p class="white-text" align="right">&copy; Allan Wang 2016</p>-->
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
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

    $('#to-top').bind('click', function (event) {
        $('html, body').animate({
            scrollTop: 0
        }, 700, 'easeInOutExpo');
        event.preventDefault();
    });

    //check for nav override vars
    <?php if (isset($navFrom)) {
        echo('navAnimOverride("' . $navFrom . '", "');
        echo((isset($navTo) ? $navTo : 'null') . "\");\n");
    } ?>


</script>
