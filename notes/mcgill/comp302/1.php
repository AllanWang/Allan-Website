<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 6 – 10';
?>

<body>

<?php code_highlight('ocaml');
phpNav(); ?>

<main>
    <div class="container"><br/>
        <div class="row" id="header">
            <h3 class="header center">Comp 302</h3>
            <h6 class="center"><?php echo $subHeader ?></h6>
            <div class="divider"></div>
            <h6 class="center">
                <?php headerBullets(); ?>
            </h6>
        </div>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <?php
                lectureSection(6, '2017/09/22',
                    "Worked on list recursion; see" . linkNewTab("notes", "/coding/ocaml/"),
                    "Induction",
                    "-Proof by structural induction on the list 'l'"
                );

                lectureSection(7, '2017/09/26',
                    "Recursion examples; see next class"
                );

                lectureSection(8, '2017/09/28',
                    "Binary Tree",
                    "-type 'a tree = Empty | Node of 'a * 'a tree * 'a tree",
                    "-Exercise – implement a function to verify that a tree is a binary search tree",
                    "In class code" . code_specific('ocaml', 'lec8.ml'),
                    "Theorem: For all trees t, keys x, and data dx, lookup x (insert (x, dx) t) &rArr;* Some dx",
                    "-Proof by structural induction",
                    "--Case t = Empty",
                    "---lookup x (insert (x, dx) Empty) &rArr; lookup x (Node ((x, dx), Empty, Empty) &rArr; Some dx",
                    "--Case t = Node ((y, dy), l, r)",
                    "---Induction Hypothesis 1 – For all x, dx, lookup x (insert (x, dx) l) &rArr;* Some dx",
                    "---Induction Hypothesis 2 – For all x, dx, lookup x (insert (x, dx) r) &rArr;* Some dx",
                    "---Show that insertion and lookup lead to the IH in all cases"
                );

                lectureSection(9, '2017/09/29',
                    "Higher order functions",
                    "-Programs can be short & compact",
                    "-Programs are reusable",
                    "Functions are first class – can be passed as parameters and returned as a result",
                    "In class code" . code_specific('ocaml', 'lec9.ml'),
                    "We can define functions on the fly without naming them by using anonymous functions"
                );

                lectureSection(10, '2017/10/03',
                    "Currying",
                    "Methods in languages like JavaScript are uncurried. (such as test(a, b, c)). All values need to be passed in at once, or the function cannot be called. The process of currying involves separating such inputs so that any number of them can be called to return a function needing only the remaining inputs ('a -> 'b -> 'c)"
                );

                pagination();
                ?>
            </div>
            <?php
            tableOfContents();
            ?>
        </div>
    </div>

</main>
<script>

</script>

<?php phpFooter(); ?>
</body>

</html>
