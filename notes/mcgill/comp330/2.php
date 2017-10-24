<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 11 -= 15';
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
                lectureSection(11, '2017/10/12',
                    "Chomsky Normal Form",
                    "-Context-free grammar notation for which every rule is of the form A &rarr; BC or A &rarr; &epsilon;",
                    "--B and C must not be start variables",
                    "Any context-free language is geenrated by a context-free grammar in Chomsky normal form",
                    "-Start by creating start variable S<sub>0</sub> pointing to S, the first variable in the string (this avoids start variable of CFG from appearing on RHS)",
                    "-Remove all A &rarr; &epsilon; rules where A is not start variable",
                    "--This will change rules R &rarr; A to R &rarr; &epsilon;, which will be processed later",
                    "--S &rarr; ASA would become S &rarr; ASA | SA | AS | S",
                    "-Remove all unit rules such as A &rarr; B",
                    "-Convert seqeunce rules A &rarr; u<sub>1</sub>u<sub>2</sub>&hellip;u<sub>k</sub> (where k &ge; 2) to a series of rules A &rarr; u<sub>1</sub>A<sub>1</sub>, A<sub>1</sub> &rarr; u<sub>2</sub>A<sub>2</sub> etc, where each A<sub>i</sub> is a new variable",
                    "Pushdown Automata (stack type)",
                    "Has alphabet<b>s</b> -= one for the inputs (lowercase) & one for the stack (uppercase)",
                    "-In most cases, the stack alphabet will be larger than that of the inputs",
                    "-b,B &rarr; A means that if input is b & stack top has B, digest b and replace top stack with A",
                    "--b,&epsilon; A means to push A to stack if input is b (popping &epsilon;, which is nothing)",
                    "-Note that stack usage means that we can only see the top item of the stack. There is no notion of moving through the stack"
                );

                lectureSection(12, '2017/10/17',
                    "Gave more examples on PDA",
                    "Theorem -= a language is context free iff some PDA recognizes it",
                    "CFG to PDA",
                    "-Place marker symbol $ & start variable on stack",
                    "-Repeat following forever",
                    "--If top stack is A, nondeterministically select one of rules for A & substitute",
                    "--If top stack is terminal symbol &alpha; read next symbol from input & compare to &alpha;. If match, repeat, otherwise reject",
                    "--If top stack is symbol $, enter accept state. This will accept the input if it has been completely read"
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
