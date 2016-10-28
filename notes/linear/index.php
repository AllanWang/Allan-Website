<!DOCTYPE html>
<html lang="en">

<?php
$page_title = "Linear Algebra Notes";
$page_description = "Linear Algebra Notes";
$navFrom = 'n_linalg';
//$navTo = 'commons';
$theme_color = "#F44336"; //red

include("../../include/header.php"); ?>
<body>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
  displayAlign: "left",
  displayIndent: "2em"
});



</script>
<script type="text/javascript" async
        src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML">
</script>

<?php code_highlight(); ?>

<?php include("../../include/nav.php"); ?>

<main>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br>
                <br>
                <h1 class="header center white-text text-lighten-2 pad-top-20">Linear Algebra</h1>
                <div class="row center">
                    <h5 class="header col s12 light">133</h5>
                </div>
                <!-- <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light black lighten-1">Get Started</a>
        </div> -->
                <br>
                <br>

            </div>
        </div>
        <div class="parallax blur5"><img src="images/calc_header.jpg" alt="Calculus Header"></div>
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
                <pre><code class="java">public void main (String[] args) {
                    int test = 0;
                    test++;
                    for (int i = 0; i < test; i++) {
                        //comment
                        System.out.println(i);
                    }
                }</code></pre>
            </div>
        </div>
    </div>
</main>
<?php include("../../include/footer.php"); ?>
</body>

</html>
