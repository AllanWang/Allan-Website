<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 1 – 5';
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

                lectureSection(1, '2017/09/05',
                    "A <b>language</b> <i>L</i> is any subset of <i>&Sigma;<sup>*</sup></i>, which represents all sequences of elements from a finite set <i>&Sigma;</i>",
                    "An algorithm <i>A</i> <u>decides</u> a language <i>L</i> by answering if x &isin; L",
                    "Languages that we can <u>decide</u> = languages that we can <u>describe</u> – <u>all</u> languages",
                    "-Decided languages and described languages are similar in size (#&#8469;), but both are much smaller than the total available # of languages (#&#8477;)",
                    "-Two sets have the same cardinality if there exists a one to one mapping with all elements from set A to set B without any remaining elements in either sets",
                    "<b>PCP – Post Correspondence Problem</b> – Given tiles with a top sequence and a bottom sequence, find a sequence of such tiles (using any number of any tile) where the concatenated top sequence matches the concatenated bottom sequence",
                    "-PCP cannot be decided by any algorithm in a finite amount of time when there are no valid sequences",
                    "-Proof by reduction technique – if PCP was decidable, then another undecidable problem (the halting problem) would be decidable",
                    "<b>The Halting Problem</b> – Given an algorithm and an input, will the algorithm halt on that input or will it loop forever?",
                    "-Algorithms can be fed an input matching their algorithm to return an incorrect response; no algorithm can be always correct",
                    "<b>Syracuse Conjecture</b> – For any integer n > 0, where S<sub>1</sub> = n, S<sub>i+1</sub> = if (S<sub>i</sub> % 2 == 0) S<sub>i</sub>/2 else 3S<sub>i</sub> + 1, Syracuse(n) = lease i such that S<sub>i</sub> = 0 if S<sub>k</sub> > 1 for all k in [1, i)"
                );

                lectureSection(2, '2017/09/07',
                    "Syracuse Conjecture – &forall;n[n > 0 &rArr; Syracuse(n) > 0]",
                    "Not all simple looking problems can  be easily solved; for instance: x/(y + z) + y/(x + z) + z(y + z)",
                    "<b>NP-Complete</b> Problems",
                    "-If any of them is easy, they are all easy",
                    "--In practice, some of them have special cases which may be more efficiently solved",
                    "-3-colouring of Maps; hard to solve (no known efficient algorithm), but are easy to verify",
                    "-SAT – given boolean formula, is there an assignment to make the formula evaluate to true?",
                    "-Travelling salesman – given cities & distances between them, what is the shortest route to visit each city once?",
                    "-Knapsack – given items with various weights, is there a subset with total weight K?",
                    "<b>P</b> – Tractable problems – Solvable in polynomial time",
                    "-Some problems may be efficiently solvable, but algorithm may not be provable",
                    "-2-colorability of maps",
                    "-Primality testing (probably not factoring)",
                    "-Solving N x N x N Rubik's cube",
                    "-Finding word in dictionary",
                    "-Sorting elements",
                    "<b>NP-hard</b> – broader term for NP questions that do not fall in the category of a language",
                    "<b>PSpace Completeness</b> – problems requiring reasonable (Poly) amount of space to be solved, but may use very long time",
                    "<b>Finite-State Automata</b> – simple model where there can be exactly one of a finite number of states at any given time",
                    "-Example: swinging door, elevator",
                    "<b>DFA</b> – deterministic finite automaton, 5-tuple (Q, &Sigma;, &delta;, q<sub>0</sub>, F)",
                    "-States – finite set Q (circle)",
                    "-Alphabet – finite set &Sigma;, defines a language (letters)",
                    "-Transition function – explicit representation mapping states & alphabets to states (&delta; = Q x &Sigma; &rarr; Q)",
                    "-Start state – special state representing entry point, q<sub>0</sub> &isin; Q (arrow to state)",
                    "-Accept states – decision making state, F &sube; Q (double circle)"
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
