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
                        Execute MaxHeapify on the following array: [24, 21, 23, 22, 36, 29]
                    </div>
                    <div class="answer">
                        At each stage, the value in bold at index i is being compared to the values at index 2i and 2i +
                        1 (underlined). If either of those are bigger, it will swap with the biggest one and check that
                        value.<br>
                        [24, 21, <b>23</b>, 22, 36, <u>29</u>]<br>
                        [24, <b>21</b>, 29, <u>22</u>, <u>36</u>, 23]<br>
                        [<b>24</b>, <u>36</u>, <u>29</u>, 22, 21, 23]<br>
                        [36, <b>24</b>, 29, <u>22</u>, <u>21</u>, 23]<br>
                        [36, 24, 29, 22, 21, 23]
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Create an AVL tree by inserting the following keys in the given order: 3, 5, 7, 1, 5, 6
                    </div>
                    <div class="answer">
                        <img style="max-width: 50%" src="images/AVL.svg">
                        <p>root &larr; 3, 3.right &larr; 5, 5.right &larr; 7, 3.rotateLeft, 3.left &larr; 1, 7.left
                            &larr; 5, 5.right &larr; 6, 5.rotateLeft, 7.rotateRight</p>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Create a red black tree by inserting the following keys in the given order: 3, 5, 7, 1, 5, 6
                    </div>
                    <div class="answer">
                        <img style="max-width: 50%" src="images/RedBlack.svg">
                        <p>root &larr; 3.black(), 3.right &larr; 5.red(), 5.right &larr; 7.red(), 3.rotateLeft (3.red(),
                            5.black()), 3.left &larr; 1.red(), 3.black(), 7.left &larr; 5.red(), 5.right &larr; 6.red(),
                            5.rotateLeft, 7.rotateRight (6.black())</p>
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
