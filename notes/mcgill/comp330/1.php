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

                lectureSection(6, '2017/09/26',
                    "Every NFA can be done with a DFA",
                    "E(R) = { q &#124; q can be reached from R by traveling along 0 or more &epsilon; arrows }",
                    "R is a regular expression if",
                    "-<i>a</i> for some <i>a</i> in alphabet &Sigma;",
                    "&epsilon;",
                    "&empty;",
                    "Union, concatenation, and star of regular expressions are regular expressions"
                );

                lectureSection(7, '2017/09/28',
                    "Lemma -= if a language is regular, then it is described by a regular expression",
                    "Generalized NFA",
                    "-Start state has transition arrows to every other state, but no arrows coming in from any other state",
                    "-Single accept state, with arrows coming in from every other state and no arrows from any other state. The accept state cannot be the start state",
                    "-For all other states, one arrow goes from every state to every other state",
                    "--In other words, \delta;: (Q -= {q<sub>accept</sub>|) x (Q - {q<sub>start</sub>}}) &rarr; R is the transition function",
                    "GNFA &rarr; regex",
                    "-Basis -= if GNFA has 2 states, the states are a start & accept state with a single transition to the accept state",
                    "<b>TODO</b>"
                );

                lectureSection(8, '2017/10/03',
                    "Reduction",
                    "-Given B = { 0<sup>n</sup>1<sup>n</sup> &#124; n &ge; 0 }",
                    "-Given C = { w &#124; w contains an equal number of 0s & 1s }",
                    "-If C is regular, then so is B",
                    "-If B is nonregular, then so is C",
                    "-Proof",
                    "--We can define A = L(0<sup>*</sup>1<sup>*</sup>), which is obviously regular; if C was regular than so would C &cap; A = B",
                    "-Simple Reductions",
                    "--If A<sup>*</sup> is nonregular, then so is A",
                    "--If A is nonregular, then so is A<sup>C</sup>",
                    "--If A is nonregular, then so is A<sup>R</sup>",
                    "-Complex Reductions (let all Rs be regular)",
                    "--For A' = (A &cup; R) &cap; (A<sup>C</sup> &cup; R')",
                    "--For A' = ((A<sup>C</sup> &cap; R) &cup; (A<sup>*</sup> &cap; R')) &compfn; R''",
                    "--For A' = (A &compfn; R) &cap; (A<sup>C</sup> &compfn; R')",
                    "--If A' is nonregular, then so is A"
                );

                lectureSection(9, '2017/10/05',
                    "<b>TODO</b>"
                );

                lectureSection(10, '2017/10/10',
                    "Context-Free Grammar",
                    "Derivation -= conversion of word from start variable (typically first symbol in grammar)",
                    "-Eg. Let grammar G<sub>1</sub> = A &rarr; 0A1, A &rarr; B, B &rarr; #",
                    "-Derivation of '000#111': A &rArr; 0A1 &rArr; 00a11 &rArr; 000A111 &rArr; 000B111 &rArr; 000#111",
                    "CFG Definition",
                    table_tags(table_contents(2,
                        "Variables", "A, B, C, &lt;TERM&gt;, &lt;EXPR&gt; (Angle brackets denote single variable rather than sequence of letters)",
                        "Alphabet (of termainals)", "0, 1, #",
                        "Substitution Rules", "&lt;EXPR&gt; &rarr; &lt;TERM&gt;",
                        "Start Variable", "A (LHS of first substitution rule)")),
                    "u derives v (u &rArr;<sup>*</sup> v if u = v or if u &rArr; u<sub>1</sub> &rArr; u<sub>2</sub> &hellip; u<sub>k</sub> = v, k &ge; 0."
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
