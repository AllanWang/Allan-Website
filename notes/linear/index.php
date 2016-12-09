<!DOCTYPE html>
<html lang="en">

<?php
include("../../include/config.php");
$n_key = "Linear Algebra";
$page_title = "$n_key Notes";
$page_description = "$n_key Notes";
$navFrom = 'n_linalg';
$navTo = 'common';
$theme_color = "#F44336"; //red

phpHeader(); ?>

<body>
<?php
mathJax();
?>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
  displayAlign: "left",
  displayIndent: "2em"
});
</script>
<?php phpNav(); ?>

<main>

    <div id="index-banner" class="anti-parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br>
                <br>
                <h1 class="header center white-text text-lighten-2 pad-top-20"><?php echo $n_key ?></h1>
                <div class="row center">
                    <h5 class="header col s12 light white-text">133</h5>
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

    <?php

    function bullet()
    {
        echo '\\\\\quad\bullet\quad';
    }

    ?>

    <div class="container">
        <div class="section">
            <div class="row" id="common">
                <h5 class="header center">Common</h5>
                <p>$$
                    a \cdot b = a_1b_1 + a_2b_2 + a_3b_3 + ... + a_nb_n
                    <?php bullet() ?> a \cdot b = |a||b|cos\theta
                    $$</p>
                <p>$$
                    For\,a = \langle a_1, a_2, a_3\rangle\,and\,b = \langle b_1, b_2, b_3\rangle
                    \rightarrow a \times b = \langle a_2b_3 - a_3b_2, a_3b_1 - a_1b_3, a_1b_2, a_2b_1\rangle
                    <?php bullet() ?> \text{Only for 3D vectors}
                    $$</p>
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
