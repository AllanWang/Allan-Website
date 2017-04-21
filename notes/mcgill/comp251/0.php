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
            <h3 class="header center">Comp 251</h3>
            <h6 class="center"><?php echo $subHeader ?></h6>
            <div class="divider"></div>
            <h6 class="center">
                <?php headerBullets(); ?>
            </h6>
        </div>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <?php echo linkNewTab('Algorithm Questions Here', 'https://www.allanwang.ca/notes/mcgill/comp251/practice/') ?>
                <div id="big-o" class="section scrollspy">
                    <h5 id="big-oh">Big O</h5>
                    <table class="h5 highlight">
                        <?php
                        table('Sorting', 'Typical', '&Theta;(log n)', 'Heap sort, Merge sort, Bubble sort, etc');
                        table('Hashing', 'Insertion', 'O(1)', 'Add to beginning');
                        table('', 'Deletion', 'Search time + O(1)', 'Using doubly linked list');
                        table('', 'Search', 'Worst: O(n)<br>Expected: &Theta;(1 + &alpha;)', 'worst if all keys are in one slot<br>&alpha; = n/m = #keys/#slots');
                        table('Heaps', 'Typical', 'O(log n)', '');
                        table('', 'buildMaxHeap', 'O(n)', '');
                        table('Red Black Trees', 'Typical', 'O(log n)', 'Balanced height is at most log n');
                        table('Find/Union', 'Quick Find', 'O(1)', '');
                        table('', 'Union', 'O(log n)', '');
                        table_body_full('Adjacency Representation', 4);
                        table('&emsp;List', 'Search', 'Worst: &Theta;(V)', '');
                        table('', 'Storage', '&Theta;(V + E)', '');
                        table('&emsp;Matrix', 'Storage Space', '&Theta;(V<sup>2</sup>)', '');
                        table('BFS, DFS, SCC', 'Total Runtime', '&Theta;(V + E)', 'V = vertex set, E = edge set');
                        table('Kruskal\'s Algorithm', 'Total', 'O(E logV) &rarr; O(logV)', 'Notice |E| &le; |V|<sup>2</sup>sup>');
                        table('Prim\'s Algorithm', 'Total', 'O(E logV)', 'with binary heaps<br>O(E + V logV) with Fibonacci heaps');
                        table('Dijkstra\'s Algorithm', 'Total', 'O(E logV)', 'with binary heaps<br>O(E + V logV) with Fibonacci heaps');
                        table('Gale Shapley', 'Total', 'O(n<sup>2</sup>)', 'Best case &Omega;(n)');
                        table('Bipartite Matching', 'Runtime', 'O(nm)', '');
                        table('Weighted Interval Scheduling', 'Memoization', 'O(n logn)', 'O(n) if presorted');
                        table('Dynamic Programming', 'Backtracking', 'O(n)', 'Usually, given each backtrack has constant time.');
                        table('Needleman-Wunsch', 'Total', '&Theta;(mn)', 'm, n are sequence lengths');
                        table('', 'Space', '&Theta;(mn)', '');
                        table('', 'Optimal Value Space', '&Theta;(m + n)', 'Still with &Theta;(mn) runtime, but we cannot recover optimal alignment');
                        table('Bellman-Ford', 'Total', 'O(VE)', '');
                        table('Knapsack Problem', 'Possible', '&Theta;(nW)', 'W is integer weight');
                        table('', 'Space', '&Theta;(nW)', '');
                        ?>
                    </table>
                </div>

                <?php
                global $tocData;
                $tocData['big-o'] = 'Big O';

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
