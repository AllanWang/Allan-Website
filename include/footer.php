<gcse:searchresults-only gname="g-results"></gcse:searchresults-only>
<?php
global $navFrom, $navTo, $dynamic_notes, $theme_color, $jsArr;

if (!isset($scriptOnly) || !$scriptOnly):?>

    <footer class="page-footer theme-color-background">
        <!--defaults to teal-->
        <div class="container">
            <div class="row">
                <div class="col l3 s12">
                    <p><i class="fa fa-angle-up clickable grey-text text-lighten-4" id="to-top"> TOP</i></p>
                </div>
                <div align="center" class="col l6 s12">
                    <ul class="icon-row">
                        <li><a href="mailto:me@allanwang.com?Subject=Web%20Inquiry" target="_blank"><i
                                        class="fa fa-envelope"></i></a></li>
                        <li><a href="https://github.com/AllanWang" target="_blank"><i class="fa fa-github"></i></a></li>
                        <li><a href="https://www.paypal.me/Allanw9" target="_blank"><i class="fa fa-paypal"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <!--for alignment-->
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <p align="left">&copy; 2016 &mdash; <?php echo date("Y"); ?> Allan Wang, All rights reserved.</p>
            </div>
        </div>
    </footer>

<?php endif; ?>
<script type="text/javascript">
    const themeColor = "<?php echo $theme_color?>";
</script>
<!--  Scripts-->
<script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/bower_components/materialize/dist/js/materialize.min.js"></script>
<script type="text/javascript" src="/include/js/init.js"></script><!--do not minify-->
<script type="text/javascript" src="/bower_components/Snap.svg/dist/snap.svg-min.js"></script>
<script type="text/javascript" src="/include/js/logo.js"></script><!--do not minify-->

<script>
    //script for scroll animations
    window.onload = function () {
        <?php
        if (isset($_GET['scroll_to'])) echo "animateTo(\"{$_GET["scroll_to"]}\", 250, true);\n";
        if (isset($dynamic_notes)) echo "dynamicNotes();\n";
        ?>
    };

    //check for nav override vars
    <?php
    if (isset($navFrom)) {
        echo('navAnimOverride("' . $navFrom . '", "');
        echo((isset($navTo) ? $navTo : 'null') . "\");\n");
    }
    ?>

</script>

<?php
foreach ($jsArr as $js) {
    if (substr($js, 0, 1) == '<') echo $js;
    else js($js);
}
?>

<!--load last-->
<script type="text/javascript" src="/include/js/jade/lunr.min.js"></script>
<script type="text/javascript" src="/include/js/jade/search-data.js"></script>
<script type="text/javascript" src="/include/js/jade/search.min.js"></script>
