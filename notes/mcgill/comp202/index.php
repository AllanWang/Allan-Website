<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Comp 202";
$page_description = "Comp 202 Practice";
$navFrom = 'n_comp202';
//$navTo = 'commons';
$theme_color = "#F44336"; //red
global $cssArr;
array_push($cssArr, '<link href="comp202.css" type="text/css" rel="stylesheet" media="screen"/>');
phpHeader(); ?>
<body>

<?php code_highlight();
phpNav(); ?>

<main>

    <div class="container">
        <div class="light row" id="commons">
            <div class="col s12 m9 l10">

                <h3 class="header center">Comp 202 Midterm - Fall 2016</h3>
                <h6 class="center">Melanie Lyman-Abramovitch &bull; Kaleem Siddiqi &bull; Dan Pomerantz &bull;</h6>
                <h6 class="center grey-text">Use &uarr; &darr; to navigate through questions; use &larr; &rarr; to
                    show/hide answers</h6>
            </div>
        </div>

        <div id="q-and-a" style="display:none;">
            <h5>True/False Section (1 point each)</h5>
            <div class="row">
                <div class="question">
                    If you only expect numbers as command line arguments, you can change
                    <pre><code class="java">public static void main(String[] args)</code></pre>
                    to
                    <pre><code class="java">public static void main(double[] args) </code></pre>
                    and run the program.

                </div>
                <div class="answer">

                </div>
            </div>
            <div class="row">
                <div class="question">
                    The following is a valid header for a main method. (Valid &rarr; will compile and run).
                    <pre><code class="java">public static void main(String[] commandArguments)</code></pre>
                </div>
                <div class="answer">

                </div>
            </div>
            <div class="row">
                <div class="question">
                    You can put an if-block inside of another if-block.
                </div>
                <div class="answer">

                </div>
            </div>
            <div class="row">
                <div class="question">
                    A method can contain more than one return statement.
                </div>
                <div class="answer">

                </div>
            </div>
            <div class="row">
                <div class="question">
                    When iterating through the elements of array via its index, you must use a <i>for</i> loop as
                    opposed to a <i>while</i> loop.
                </div>
                <div class="answer">

                </div>
            </div>
            <div class="row">
                <div class="question">
                    When you execute a class in Java you must <i>always</i> provide command line arguments.
                </div>
                <div class="answer">

                </div>
            </div>
            <div class="row">
                <div class="question">

                </div>
                <div class="answer">

                </div>
            </div>
            <div class="row">
                <div class="question">

                </div>
                <div class="answer">

                </div>
            </div>
            <div class="row">
                <div class="question">

                </div>
                <div class="answer">

                </div>
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
<script type="text/javascript" src="comp202.js"></script>
</body>

</html>
