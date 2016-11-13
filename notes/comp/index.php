<!DOCTYPE html>
<html lang="en">

<?php
include("../../include/config.php");
$n_key = "Computer Science";
$page_title = "$n_key Notes";
$page_description = "$n_key Notes and Code Snippets";
$navFrom = 'n_comp';
//$navTo = 'commons';
$theme_color = "#F44336"; //red

phpHeader(); ?>

<body>

<?php code_highlight();
phpNav(); ?>

<main>

    <div id="index-banner" class="anti-parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br>
                <br>
                <h1 class="header center white-text text-lighten-2 pad-top-20"><?php echo $n_key ?></h1>
                <div class="row center">
                    <h5 class="header col s12 light white-text">202 &bull; 206 &bull; 250</h5>
                </div>
                <!-- <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light black lighten-1">Get Started</a>
        </div> -->
                <br>
                <br>

            </div>
        </div>
        <div class="anti-parallax blur5"><img src="images/calc_header.jpg" alt="<?php echo $n_key ?> Header"></div>
    </div>

    <div class="container">
        <?php code('test.java'); ?>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
