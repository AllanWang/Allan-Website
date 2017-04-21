<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 15 – 19';
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
                    "-Greedy algorithm (" . linkNewTab('Lecture 7', 'https://www.allanwang.ca/notes/mcgill/comp251/2.php?scroll_to=lecture-7h') . ") doesn’t always work, eg activities (0, 2), (1, 8), (7, 9)",
                    "--Greedy would pick (0, 2) & (7, 9) whereas the best solution is (1, 8)",
                    "-Binary choice",
                    "--Let OPT(j) denote the best solution for activities 1 to j",
                    "--Let p(j) denote the largest index i < j such that activity i is compatible with activity j",
                    "--Case 1: j is in the optimal solution",
                    "---Compute weight<sub>j</sub> + OPT(p(j))",
                    "--Case 2: j is not in optimal solution",
                    "---Compute OPT(j – 1)",
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

                lectureSection(16, '2017/03/16',
                    "Pairwise Sequence Alignment",
                    "-Goal: Map letters between two strings (a & b) such that the “distance” (see below) between the strings are minimized",
                    "-Letters must remain in order, but spaces can be added between them",
                    "Definitions",
                    "-Match – letters are identical",
                    "-Substitution – letters are different",
                    "-Insertion – letter of b is mapped to empty character",
                    "-Deletion – letter of a is mapped to empty character",
                    "-Indels – group covering insertions & deletions",
                    "Can be used to find similarities in amino acid sequences",
                    "Counting alignments",
                    "-We may observe that the alignments of a and b must end by (a, -), (a, b), or (-, b) (deletion, match/substitution, insertion)",
                    "-If we define c(m, n) as the # of alignments formed between them, we see that c(m, n) = min(c(m – 1, n), c(m – 1, n – 1), c(m, n – 1))",
                    "-Base case – f(0, n) = f(m, 0) = f(0, 0) = 1",
                    "Levenshtein Distance",
                    "-Minimal # of substitutions, insertions & deletions to transform one into the other",
                    "-Each of those actions adds one to the total distance",
                    "Edit distance",
                    "-If every edit operation has a positive cost & an inverse operation with equal cost, the edit distance is metric",
                    "-d(x, y) &ge; 0 (separate axiom)",
                    "-d(x, y) = 0 iff x = y (coincidence axiom)",
                    "-d(x, y) = d(y, x) (symmetry)",
                    "-d(x, y) &le; d(x, z) + d(z, y) (triangle inequality)",
                    "Optimal sub-structure – sub-alignment of optimal alignments are also optimal",
                    "-Cut-and-paste proof",
                    "Backtracking ",
                    "-Each move associated with one edit operation",
                    "--Vertical – insertion ",
                    "--Diagonal – match/substitution",
                    "--Horizontal –deletion",
                    "-Find move that was used to find the value of the cell",
                    "-Apply recursively",
                    "Analysis",
                    "-Comparing two strings of length m & n is &Omega;(mn) time and &Omega;(mn) space",
                    "-It’s easy to save space and compute values in &Omega;(m + n) space by computing OPT(i, *) from OPT(i – 1, *); however, recovering alignment is harder",
                    "Example" .
                    table_tags(table_contents(6, '*', '-', 'A', 'T', 'T', 'G',
                        '-', 0, 1, 2, 3, 4,
                        'C', 1, 1, 2, 3, 4,
                        'T', 2, 2, 1, 2, '<b>3</b>')),
                    "Pseudocode" . code_specific('java', 'NeedlemanWunsch.java')
                );

                lectureSection(17, '2017/03/21',
                    "To add onto the pairwise sequencing from last lectures, the approach may be modified with different weightings to provide different results, eg 1 and -1 for delta in bioinformatics",
                    "Dijkstra’s algorithm & negative weights",
                    "-Weighted version of BFS – priority queue rather than FIFO queue",
                    "-Greedy choice – picks lightest edge at each step",
                    "-How do we deal with negative weight edges?",
                    "--Re-insertion in queue leads to exponential running time",
                    "--Adding constants to each edge to make them positive changes the question, because paths with different numbers of edges are incremented with different values",
                    "Bellman-Ford algorithm",
                    "-Allows negative-weights",
                    "-Computer d[v] (shortest-path weights) and &pi;[v] (predecessors) for all v &isin; V",
                    "-Return true if no negative-weight cycles are reachable form source, false otherwise",
                    "-If Bellman-Ford has not converged after V(G) – 1 iterations, there cannot be a shortest path tree, so there must be a negative weight cycle (longest path w/o cycles is V(G) – 1 in length)",
                    "Pseudocode" . code_specific('java', 'BellmanFord.java'),
                    "Dynamic Programming in Bellman-Ford",
                    "-Let d(i, j) = cost of shortest path from s to i with at most j hops",
                    "-Cases",
                    "--" . bulletTablePair("i = s & j = 0", "0", 20),
                    "--" . bulletTablePair("i &ne; s & j = 0", "&infin;", 20),
                    "--" . bulletTablePair("j > 0", "min(d(k, j – 1) + w(k, i): i &isin; Adj(k), d(i, j – 1))<br>Either a valid predecessor's weight + current weight, or no change (achieved with fewer hops)", 20)
                );

                lectureSection(18, '2017/03/23',
                    "Divide & Conquer",
                    "-Divide – split problems into smaller sub-problems",
                    "-Conquer – solve sub-problems recursively, or use base cases",
                    "-Combine – merge two sub-problems and eventually reach the original problem again",
                    "Example – Merge Sort",
                    "-Divide – split n-elements to subsequences of n/2 elements",
                    "-Conquer – sort recursively using merge sort; once array has size 1, simply return that array",
                    "-Combine – merge two sorted subsequences to produce sorted answer",
                    "Multiplication – Divide & Conquer",
                    "-For value x with n digits, let x<sub>L</sub> = x / 2<sup>n/2</sup>, and let x<sub>R</sub> = x % 2<sup>n/2</sup>",
                    "-Instead of using grade school multiplication (O(n<sup>2</sup>)), we may compute x * y through their components<br>x * y = 2<sup>n</sup>x<sub>L</sub>y<sub>L</sub> + 2<sup>n/2</sup>(x<sub>L</sub>y<sub>R</sub> + x<sub>R</sub>y<sub>L</sub>) + x<sub>R</sub>y<sub>R</sub>"
                );

                lectureSection(19, '2017/03/28',
                    "Merge sort running time",
                    "-T(n) = execution time for size n = 2 * T(n/2) + n (2 sub calls + merge time)",
                    "-Binary Search T(n) = T(n/2) + 1",
                    "-Karatsuba T(n) = 3 * T(n/2) + n",
                    "Master Theorem – solves commond divide and conquer runtimes",
                    "-General: T(n) = a(Tn/b) + f(n)",
                    "-a &ge; 1: # of subproblems",
                    "-b > 0: factor by which the subproblem size decreases",
                    "-f(n): work to divide/merge subproblems",
                    "Recursion tree",
                    "-k: log<sub>b</sub>a",
                    "-log<sub>b</sub>n: # of levels",
                    "-a<sup>i</sup>: # of subproblems at level i",
                    "-n/b<sup>i</sup>: size of subproblem at  level i",
                    "Case 1 – cost dominated by cost of leaves",
                    "-If f(n) = O(n<sup>k – &epsilon;</sup>) for some &epsilon; > 0",
                    "-T(n) = &Theta;(n<sup>k</sup>)",
                    "-Eg T(n) = 3T(n/2) + n &rarr; T(n) = &Theta;(n<sup>log<sub>2</sub>3</sup>)",
                    "Case 2 – cost evenly distributed among levels",
                    "-If f(n) = &Theta;(n<sup>k</sup>log<sup>p</sup>n)",
                    "-T(n) = &Theta;(n<sup>k</sup>log<sup>p + 1</sup>n)",
                    "-Eg T(n) = 2T(n/2) + &Theta;(n logn) &rarr; T(n) = &Theta;(n log<sup>2</sup>n)",
                    "Case 3 – cost dominated by cost of root",
                    "-If f(n) = &Omega;(n<sup>k + &epsilon;</sup>) for some &epsilon; > 0) and if a * f(n/b) &le; c * f(n) for some c < 1 & all sufficiently large n (holds if f(n) = &Theta; (n<sup>k + &epsilon;</sup>))",
                    "-T(n) = &Theta;(f(n))",
                    "-Eg T(n) = 3T(n/4) + n<sup>5</sup> &rarr; T(n) = &Theta;(n<sup>5</sup>)"
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
