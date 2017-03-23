<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 15 - 20';
?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br/>
        <div class="row" id="header">
            <h3 class="header center">Comp 251</h3>
            <h6 class="center"><?php echo $subHeader ?></h6>
            <div class="divider"></div>
            <h6 class="center">
                <?php headerBullets(); ?>
            </h6>
        </div>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <?php
                lectureSection(15, '2017/03/14',
                    "Algorithm paradigms",
                    "-Greedy – decompose & reduce problem – top-down approach",
                    "-Dynamic programming – solve all possible sub-problems and use solutions to solve larger problems – bottom-up approach",
                    "Going back to the activity selection problem: given activities, find subset with greatest total activity duration, where no two activity intervals overlap",
                    "-Greedy algorithm (Lecture #) doesn’t always work, eg activities (0, 2), (1, 8), (7, 9)",
                    "--Greedy would pick (0, 2) & (7, 9) whereas the best solution is (1, 8)",
                    "-Binary choice",
                    "--Let OPT(j) denote the best solution for activities 1 to j",
                    "--Let p(j) denote the largest index i < j such that activity i is compatible with activity j",
                    "--Case 1: j is in the optimal solution",
                    "Compute weight<sub>j</sub> + OPT(p(j))",
                    "--Case 2: j is not in optimal solution",
                    "Compute OPT(j – 1)",
                    "--The maximum of the two cases denotes the optimal solution up to j",
                    "--If we draw out the recursive calls, we’ll notice that we often compute values of OPT(i), where i < j, multiple times. Instead, we can compute those values once, store them, and reuse them next time.",
                    "--Also notice that every OPT(j) depends only on OPT values at indices < j",
                    "Memoization – cache results of each subproblem; lookup as needed",
                    "Running time – O(n logn)",
                    "-Sort by finishing time O(n logn)",
                    "-Compute p(*) O(n logn)",
                    "-Compute OPT once O(1) (either return existing value or existing value and one sum)",
                    "--At most 2n recursive calls, O(n)",
                    "Note that running time is O(n) for jobs presorted by start & finishing times",
                    "Dynamic programming goal – solve sub-problems in order so that once you reach larger problems, the sub-solutions are already computed",
                    "However, after the call, the algorithm computes the optimal value, not the activity set",
                    "-We may find the solution by backtracking",
                    "-For every potential j, if weight<sub>j</sub> + OPT(p(j)) > OPT(j – 1), j is included in the set",
                    "-Keep checking previous activities to find full set",
                    "Pseudocode" . code_specific('java', 'DynamicProgramming.java'),
                    "Example" .
                    table_tags(table_contents(6, 'activity', 1, 2, 3, 4, 5,
                        'predecessor', 0, 0, 2, 2, 3,
                        'Best weight M', 2, 3, 4, 9, 9,
                        'V<sub>j</sub> + M[p(j)]', 2, 3, 4, 9, 8,
                        'M[j - 1]', 0, 2, 3, 4, 9), 'table-f-15c') .
                    '<br><br><img src="images/dynamic-activity.svg"><br><br>',
                    "-Reconstruction yields a<sub>2</sub> & a<sub>4</sub>"
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
