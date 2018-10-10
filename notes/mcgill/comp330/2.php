<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 11 – 15';
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
                    "Any context-free language is generated by a context-free grammar in Chomsky normal form",
                    "-Start by creating start variable S<sub>0</sub> pointing to S, the first variable in the string (this avoids start variable of CFG from appearing on RHS)",
                    "-Remove all A &rarr; &epsilon; rules where A is not start variable",
                    "--This will change rules R &rarr; A to R &rarr; &epsilon;, which will be processed later",
                    "--S &rarr; ASA would become S &rarr; ASA | SA | AS | S",
                    "-Remove all unit rules such as A &rarr; B",
                    "-Convert seqeunce rules A &rarr; u<sub>1</sub>u<sub>2</sub>&hellip;u<sub>k</sub> (where k &ge; 2) to a series of rules A &rarr; u<sub>1</sub>A<sub>1</sub>, A<sub>1</sub> &rarr; u<sub>2</sub>A<sub>2</sub> etc, where each A<sub>i</sub> is a new variable",
                    "Pushdown Automata (stack type)",
                    "Has alphabet<b>s</b> – one for the inputs (lowercase) & one for the stack (uppercase)",
                    "-In most cases, the stack alphabet will be larger than that of the inputs",
                    "-b,B &rarr; A means that if input is b & stack top has B, digest b and replace top stack with A",
                    "--b,&epsilon; A means to push A to stack if input is b (popping &epsilon;, which is nothing)",
                    "-Note that stack usage means that we can only see the top item of the stack. There is no notion of moving through the stack"
                );

                lectureSection(12, '2017/10/17',
                    "Gave more examples on PDA",
                    "Theorem – a language is context free iff some PDA recognizes it",
                    "CFG to PDA",
                    "-Place marker symbol $ & start variable on stack",
                    "-Repeat following forever",
                    "--If top stack is A, nondeterministically select one of rules for A & substitute",
                    "--If top stack is terminal symbol &alpha; read next symbol from input & compare to &alpha;. If match, repeat, otherwise reject",
                    "--If top stack is symbol $, enter accept state. This will accept the input if it has been completely read"
                );

                lectureSection(13, '2017/10/19',
                    "If x can bring P from <i>p</i> with empty stack to <i>q</i> with empty stack, A<sub>pq</sub> generates x",
                    "-If computation has 0 steps, x is already the empty string",
                    "-Induction - assume true for length k, prove for k + 1",
                    "--Once that stack is non empty, it will become empty either at the very last step of at some intermediate point",
                    "---If never happened in between, symbol p i pushed at the first move and popped at the last step",
                    "----For any portion y = azb, with y transitioning from empty state to empty state, we may do the same for z without the need of passing through transitions a and b (given that there does not exist an empty state in between)",
                    "---If empty state exists in between, transitions can be split by the empty states. Note that the sum of those transitions must be less than the total number of steps, as it requires at least two steps to pop into an empty state and push back into a nonempty state",
                    "-Pumping Lemma for CFLs",
                    "--One way only; not iff",
                    "--A context-free language L must have a number p where, if s is any string in L of length &ge; p, s may be divided into uvxyz such that:",
                    "---for each i &ge; 0, uv<sup>i</sup>xy<sup>i</sup>z &isin; A",
                    "---|vy| > 0",
                    "---|vxy| &le; p"
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