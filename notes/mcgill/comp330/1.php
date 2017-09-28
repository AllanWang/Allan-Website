<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 6 – 10';
?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br/>
        <div class="row" id="header">
            <h3 class="header center">Comp 330</h3>
            <h6 class="center"><?php echo $subHeader ?></h6>
            <div class="divider"></div>
            <h6 class="center">
                <?php headerBullets(); ?>
            </h6>
        </div>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <?php
                lectureSection(6, '2017/09/21',
                    "Reflexive, symmetric, transitive",
                    "S~ represents an equivalence class, where S is the set & ~ represent equal",
                    "&delta;(s, a) – state you went to after reading alphabet a at state s",
                    "&delta;*(s, w) – state you went to after reading all letters in word w, starting at state s"
                );

                lectureSection(7, '2017/09/26',
                    "Every NFA can be done with a DFA",
                    "E(R) = { q &#124; q can be reached from R by traveling along 0 or more &epsilon; arrows }",
                    "R is a regular expression if",
                    "-<i>a</i> for some <i>a</i> in alphabet &Sigma;",
                    "&epsilon;",
                    "&empty;",
                    "Union, concatenation, and star of regular expressions are regular expressions"
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
