<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 11 - 15';
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
                lectureSection(11, '2017/02/14',
                    "Shortest path u to v contains the smallest weight sum of all the edges in that path (compared to any other valid path from u to v)",
                    "Variants",
                    "-Single-source – shortest path from given source vertex to every other vertex &isin; V",
                    "-Single-destination – shortest paths to given destination vertex",
                    "-Single-pair – shortest path from u to v",
                    "-All-pairs – find shortest path from u to v for all u, v &isin; V",
                    "Negative weight edges",
                    "-Can be problematic",
                    "-If there is a negative-weight cycle, we can keep going around it, resulting in w(s, v) = -&infin;",
                    "-Only problematic if reachable from source",
                    "-Some algorithms work only if there are no negative-weight edges; must specify",
                    "Cycles",
                    "-Shortest paths cannot contain cycles",
                    "-Cycles cannot have negative-weight",
                    "-Assume cycles do not have zero-weight",
                    "-Cycles with positive weights will add to the path length, so we can shorten it by omitting the cycle",
                    "Lemma – any subpath of a shortest path is a shortest path",
                    "Algorithm output (for each vertex v &isin; V)",
                    "-d[v] = &delta(s, v)",
                    "--initially &infin;",
                    "--reduces as algorithm progresses, but is always &ge; &delta;(s, v)",
                    "--known as a shortest-path estimate",
                    "-&pi;[v] = predecessor of v on shortest path from s",
                    "--Nil if no predecessor",
                    "--Induces a tree &rarr; shortest-path tree",
                    "Triangle inequality",
                    "-For all (u, v) &isin; E, &delta;(u, v) &le; &delta;(u, x) + &delta;(x, v) ",
                    "-Shortest path u &rarrw; v &le; weight of any other path u &rarrw; v",
                    "Upper bound property",
                    "-d[v] always &ge; &delta;(s, v) for all v",
                    "-if d[v] = &delta;(s, v), it will never change",
                    "No-path property",
                    "-If &delta;(s, v) = &infin;, d[v] is always &infin;",
                    "Convergence property",
                    "-If s &rarrw; u &rarr; v is shortest path, d[u] = &delta;(s, u)",
                    "-After relax(u, v, w), d[v] = &delta;(s, v)",
                    "Path-relaxation property",
                    "-If relax all edges in a path from s to v in order, d[v] = &delta;(s, v)",
                    "Dijkstra’s algorithm",
                    "-No negative-weight edges",
                    "-Weighted version of BFS",
                    "--Priority queue instead of FIFO (first in, first out) queue",
                    "--Keys are shortest-path weights (d[v])",
                    "-Two sets of vertices",
                    "--S – vertices whose final shortest-path weights are determined",
                    "--Q – priority queue – (V – S)",
                    "-Greedy – choose light edge at each step",
                    "-Pseudocode" . code_specific('java', 'ShortestPath.java')
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
