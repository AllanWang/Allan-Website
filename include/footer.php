<?php
global $navFrom, $navTo;
?>

<footer class="page-footer"
    <?php theme_background() ?>>
    <!--defaults to teal-->
    <div class="container">
        <div class="row">
            <div class="col l3 s12">
                <p><i class="fa fa-angle-up clickable grey-text text-lighten-4" id="to-top"> TOP</i></p>
            </div>
            <div align="center" class="col l6 s12">
                <ul class="icon-row">
                    <li><a href="mailto:me@allanwang.com?Subject=Web Inquiry" target="_blank"><i class="fa fa-envelope"></i></a></li>
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
<?php
js('jquery/jquery-2.4.4.min');
js('materialize/materialize.min');
js('init');
?>

<script>
    //script for scroll animations

    window.onload = function () {
        <?php
        if (isset($_GET['scroll_to'])) echo "animateTo(\"{$_GET["scroll_to"]}\", 250, true);\n";
        ?>
    };

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

<!--load last-->
<?php
js('jade/lunr.min');
js('jade/search_data');
js('jade/search.min');
?>
