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

<?php mathJax();
code_highlight();
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
        <h5 class="header center">Pseudocode</h5>
        <?php
        code_collapsible(array(
            'Binary Search|binary.java',
            'Tree Traversal|tree_order.java'));
        ?>
    </div>

    <div class="container">
        <div class="section">
            <div class="row" id="summations">
                <h5 class="header center">Summations</h5>
                <table class="light h5 highlight">
                    <tr>
                        <th>$$ \sum_{i=1}^{n} i $$</th>
                        <th>$$ \frac{n(n+1)}{2} $$</th>
                    </tr>
                    <tr>
                        <th>$$ \sum_{i=1}^{n} i^2 $$</th>
                        <th>$$ \frac{n(n+1)(2n+1)}{6} $$</th>
                    </tr>
                    <tr>
                        <th>$$ \sum_{i=1}^{n} i^3 $$</th>
                        <th>$$ \frac{n^2(n+1)^2}{4} $$</th>
                    </tr>
                    <tr>
                        <th>$$ \sum_{i=0}^{n-1} c^i $$</th>
                        <th>$$ \frac{c^n - 1}{c-1} $$</th>
                    </tr>
                    <tr>
                        <th>$$ \sum_{i=0}^n 2^i $$</th>
                        <th>$$ 2^{n+1} - 1 $$</th>
                    </tr>
                    <tr>
                        <th>$$ \sum_{i=0}^{n-1} i * 2^i $$</th>
                        <th>$$ 2 + (n - 2)2^n $$</th>
                    </tr>
                </table>
                <div class="center">
                    <a href="http://allanwang.ca/notes/calc/?scroll_to=series" target="_blank">More series here</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
