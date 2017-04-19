<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Comp 251";
$page_description = "Comp 251 Practice";
$navFrom = 'n_comp_251';
//$navTo = 'commons';
$theme_color = "#F44336"; //red
phpQA();
phpHeader(); ?>
<body>

<?php code_highlight();
phpNav(); ?>

<main>

    <div class="container">
        <div class="light row" id="commons">

            <h3 class="header center">Comp 251 Practice</h3>
            <h6 class="center">Prof. J&eacute;rome Waldisp&uuml;hl</h6>
            <div class="divider"></div>
            <h6 class="center grey-text"><?php echo instructionText() ?></h6>
        </div>
        <div id="shell">
            <div id="q-and-a">
                <div class="qa-row">
                    <div class="question">
                        Hash the following values using linear probing into a table of size 5: 3, 11, 14, 23, 8
                    </div>
                    <div class="answer">
                        <b>23, 11, 8, 3, 14</b><br>
                        In linear probing, an element is moved into the next available space if its hashed location is
                        already taken.
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Create an AVL tree by inserting the following keys in the given order: 3, 5, 7, 1, 5, 6
                    </div>
                    <div class="answer">
                        <img style="max-width: 50%" src="images/AVL.svg">
                        <p>root &larr; 3, 3.right &larr; 5, 5.right &larr; 7, 3.rotateLeft, 3.left &larr; 1, 7.left
                            &larr;
                            5, 5.right &larr; 6, 7.rotateRight</p>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">

                    </div>
                    <div class="answer">

                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">

                    </div>
                    <div class="answer">

                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">

                    </div>
                    <div class="answer">

                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">

                    </div>
                    <div class="answer">

                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">

                    </div>
                    <div class="answer">

                    </div>
                </div>
                <!--
                    <div class="qa-row">
                        <div class="question">

                        </div>
                        <div class="answer">

                        </div>
                    </div>
               -->
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
