<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 16 -= 20';
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

                lectureSection(16, '2017/10/19',
                    "Object & closures" . code_specific('ocaml', 'lec16.ml')
                );

                lectureSection(17, '2017/10/20',
                    "Exceptions...",
                    "-Force you to consider exceptional cases",
                    "-Allows you to segregate special cases from other cases (avoids clutter)",
                    "-Diverts control flow",
                    "-Eg 3/0 raises an exception Division_by_zero"
                );

                lectureSection(18, '2017/10/24',
                    "Backtracking",
                    "-Algorithm that finds solutions incrementing, abandoning partial candidates as soon as it deems it cannot lead to a successful solution",
                    "-Important tool to solve constraint satisfaction problems such as cross-words, puzzles, Sudoku, etc",
                    "Code" . code_specific('ocaml', 'lec18.ml')
                );

                lectureSection(19, '2017/10/26',
                    "Modules",
                    "-Control complexity of developing & maintaining software",
                    "-Split large programs into separate piece",
                    "-Name space separation",
                    "-Allows for separate compilation",
                    "-Incremental development",
                    "-Clear specifications at module boundaries",
                    "-Programs are easier to maintain & reuse",
                    "-Enforces abstractions",
                    "-Isolates bugs",
                    "Module Types",
                    "-Allows you to hide information",
                    "-Implementations can be more specific than the actual module type",
                    "May use the open keyword to use module methods without specifying module name",
                    "Code" . code_specific('ocaml', 'lec19.ml')
                );

                lectureSection(20, '2017/10/27',
                    "More on modules"
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
