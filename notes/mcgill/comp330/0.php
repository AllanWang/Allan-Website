<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Summary';
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
                lectureSection(0, '2017/09/05',
                "A <b>language</b> <i>L</i> is any subset of <i>&Sigma;<sup>*</sup></i>, which represents all sequences of elements from a finite set <i>&Sigma;</i>",
                "An algorithm <i>A</i> <u>decides</u> a language <i>L</i> by answering if x &isin; L",
                "Languages that we can <u>decide</u> = languages that we can <u>describe</u> – <u>all</u> languages",
                "-Decided languages and described languages are similar in size (#&#8469;), but both are much smaller than the total available # of languages (#&#8477;)",
                "-Two sets have the same cardinality if there exists a one to one mapping with all elements from set A to set B without any remaining elements in either sets",
                "<b>PCP – Post Correspondence Problem</b> – Given tiles with a top sequence and a bottom sequence, find a sequence of such tiles (using any number of any tile) where the concatenated top sequence matches the concatenated bottom sequence",
                "-PCP cannot be decided by any algorithm in a finite amount of time when there are no valid sequences",
                "-Proof by reduction technique – if PCP was decidable, then another undecidable problem (the halting problem) would be decidable",
                "<b>The Halting Problem</b> – Given an algorithm and an input, will the algorithm halt on that input or will it loop forever?",
                "-Algorithms can be fed an input matching their algorithm to return an incorrect response; no algorithm can be always correct"
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
