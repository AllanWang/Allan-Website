<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$n_key = "Computer Science";
$page_title = "$n_key Notes";
$page_description = "$n_key Notes and Code Snippets";
$navFrom = 'n_comp';
//$navTo = 'commons';
$theme_color = "#F44336"; //red
$hamburger_menu_color = "#ffffff";

phpHeader(); ?>

<body>

<?php mathJax();
code_highlight();
phpNav(); ?>

<main>

    <?php
    banner('computer-chip.jpg', 202, 206, 250);
    ?>

    <div class="container">
        <h5 class="header center" id="pseudocode">Pseudocode</h5>
        <?php
        code_collapsible('Binary Search|binary.java',
            'Binary Search Tree|bst.java',
            'Tree Traversal|tree_order.java',
            'Heaps|heap.java',
            'Graphs|graph.java');
        ?>
        <br/>
        <br/>
        <div class="section">
            <div class="row" id="summations">
                <h5 class="header center">Summations</h5>
                <table class="light h5 highlight">
                    <?php
                    math_table('\sum_{i=1}^{n} i', '\frac{n(n+1)}{2}');
                    math_table('\sum_{i=1}^{n} i^2', '\frac{n(n+1)(2n+1)}{6}');
                    math_table('\sum_{i=1}^{n} i^3', '\frac{n^2(n+1)^2}{4}');
                    math_table('\sum_{i=0}^{n-1} c^i', '\frac{c^n - 1}{c-1}');
                    math_table('\sum_{i=0}^n 2^i', '2^{n+1} - 1');
                    math_table('\sum_{i=0}^{n-1} i * 2^i', '2 + (n - 2)2^n');
                    ?>
                </table>
                <br/>
                <div class="center">
                    <a href="https://allanwang.ca/notes/calc/?scroll_to=series" target="_blank">More series here</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
phpFooter();
//json2html();
?>
</body>
<!--<script src="code/bigO.js"></script>-->

</html>
