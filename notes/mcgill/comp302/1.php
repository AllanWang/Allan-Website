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
                    "<b>Todo: data structs</b>"
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
