<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 11 – Midterm Review';
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

                lectureSection(12, '2017/02/16',
                    "Bipartite graph – graph where vertices can be partitioned into 2 sets (A & B), where all edges cross the sets (no edges are from one set to the same set)",
                    "-If made into a DFS tree, can be coloured in 2 colours where every edge spans from one colour to the other colour",
                    "-Is bipartite iff it does not contain an odd cycle",
                    "-" . linkNewTab('From Math 240', 'https://www.allanwang.ca/pdf/MATH%20240.pdf#page=36'),
                    "Matching – subset of edges such that no two edges share a vertex",
                    "Perfect matching – every vertex in subset A has a matching in subset B and vice versa",
                    "Complete bipartite graph – every vertex in A is connected to every vertex in B and vice versa",
                    "Stable marriage problem",
                    "-Goal is to find perfect matching",
                    "-Pair is unstable if for an unmatched pair &alpha;-&beta;, &alpha; prefers &beta; to current match, and &beta; prefers &alpha; to current match",
                    "-Matchings are stable if there are no unstable pairs",
                    "-Pseudocode" . code_specific('java', 'GaleShapley.java')
                );

                lectureSection(13, '2017/02/21',
                    "Flow Network",
                    "G = (V, E) directed",
                    "Each edge (u, v) has capacity c(u, v) &ge; 0",
                    "Edges are also known as arcs",
                    "If (u, v) &notin; E, c(u, v) = 0",
                    "Source vertex s, sink vertex t, s &rarrw; v &rarrw; t for all v &isin; V",
                    "Positive flow p(u, v)",
                    "-When annotated, an edge is given the values p(u, v) / c(u, v) (eg 1/2)",
                    "Capacity constraint – 0 &ge; p(u, v) &ge; c(u, v)",
                    "Skew symmetry – c(u, v) = -c(u, v)",
                    "Flow conservation – positive flow into vertex = positive flow out of vertex",
                    "Cancellation with positive flows",
                    "-Without loss of generality, we can say positive flow goes either from u to v or from v to u, but not both",
                    "-Eg if p(u, v) = 5 & p(v, u) = 3, it is equivalent to a flow of 2 from u to v",
                    "-We denote this as f(u, v) = p(u, v) – p(v, u) &ensp;&ensp;p(u, v) &ge; 0",
                    "Total flow of graph (|f|) is sum of all flows from source or all flows to sink",
                    "-All vertices in between satisfy flow conservation",
                    "Naïve algorithm for maximal flow",
                    "-Find a path and add the maximum flow for that path",
                    "-Repeat until no path can have additional flow",
                    "-Not good because our result depends on which path we fill first; not always correct",
                    "Residual graphs – used to find maximal flow",
                    "-Given G = (V, E) with edge capacities c & flow f, we define residual graph G<sub>f</sub> as",
                    "--Having the same vertices as G",
                    "--Having edges E<sub>f</sub> with residual capacities c<sub>f</sub> where we can add or subtract flow from edges e &isin; E",
                    "-For each edge e = (u, v) &isin; E",
                    "--If f(e) < c(e), add forward edge (u, v) in E<sub>f</sub> with residual capacity c<sub>f</sub>(e) = c(e) – f(e)",
                    "--If f(e) > 0, add backward edge (v, u) in E<sub>f</sub> with residual capacity c<sub>f</sub>(e) = f(e)",
                    "--Example (note that sometimes one edge can result in both a forward and a backward edge)"
                    . table_tags(table_contents(4, 'f(e)', 'c(e)', 'forward', 'backward',
                        0, 1, 1, 0,
                        1, 1, 0, 1,
                        2, 3, 1, 2)),
                    "Augmenting path – path from source s to sink t in residual graph G<sub>f</sub> that allows us to increase flow",
                    "To use residual graphs to find maximal flow",
                    "-Compute residual graph G<sub>f</sub>",
                    "-Find a path P",
                    "-Augment flow f along path P",
                    "-Let &beta; be bottleneck; add to f(e) on edge of P",
                    "--Add if forward edge, subtract if backward edge",
                    "Ford-Fulkerson algorithm",
                    "-While there is still a s-t path in G<sub>f</sub>, augment f to P (see above)",
                    "-Update G<sub>f</sub> and continue",
                    "-Algorithm terminates because bottleneck &beta; is strictly positive and flow is bounded (flow will not surpass bound)",
                    "-Time Complexity",
                    "--Let C = &Sigma;c(e) &emsp;&emsp;&emsp;&emsp;e &isin; E outgoing from s",
                    "--Finding s-t path takes O(|E|) (eg BFS or DFS)",
                    "--Flow increases by at least 1 at each iteration",
                    "--Algorithm runs in O(C * |E|)"
                );

                lectureSection(14, '2017/02/23',
                    "s-t cut of flow network is cut(A, B) such that s &isin; A and t &isin; B",
                    "-capacity is the &Sigma;c(e) for all edges e the cut crosses",
                    "-flow is |f| = f<sup>out</sup>(A) – f<sup>in</sup>(A)",
                    "--|f| is bounded by &Sigma;c(e) for all e &isin; cut(A, B)",
                    "Observations",
                    "-Every flow must be &le; capacity of every s-t cut",
                    "-Value of maximum flow is less than capacity of minimum cut",
                    "Flow in Ford-Fulkerson",
                    "-Terminates when no augmenting path in residual graph G<sub>f</sub>",
                    "-|f| = &Sigma;c(e)",
                    "--In particular, f<sup>out</sup>(A) = &Sigma;c(e) and f<sup>in</sup>(A) = 0",
                    "--Since v cannot be reacahable from s in G<sub>f</sub>, there cannot be any resulting forward or backward edges",
                    "-For any e = (u, v) &isin; cut(A, B), f(e) = c(e)",
                    "Computing min cut",
                    "-Find G<sub>f</sub> with Ford-Fulkerson",
                    "-Run BFS or DFS of s",
                    "-Reachable vertices define set A for the cut",
                    "-Recall that min cut is minimum number of cuts needed to stop all flow from s to t",
                    "Bipartite matching with network flows",
                    "-With bipartite with sets A and B",
                    "-Connect s to every vertex in A",
                    "-Keep directed edges from A to B",
                    "-Connect every vertex in B to t",
                    "-Get max flow with Ford-Fulkerson &rArr; max matching",
                    "Running time",
                    "-General complexity if O(C * |E|)	C = &Sigma;c(s, u)",
                    "-If |A| = |B| = n, C = |A| = n, |E’| = |E| + 2n = m + 2n",
                    "-Given m > n, O(n * (m + 2n)) = O(nm)"
                );

                scrollSpySection('midterm-review', 'Midterm Review', 'Midterm Review &bull; 2017/03/07',
                    "Focus on direct application of concepts",
                    "1 proof in the midterm",
                    "Nothing on probability",
                    "Be comfortable with running time",
                    "Proofs",
                    "-Contradiction – assume opposite and prove that it is false",
                    "-Cut & paste – used with graphs & greedy algorithms",
                    "--Assume sub-problem is not optimal, and replace with optimal solution to show contradiction",
                    "-Loop invariants – prove that loop structure is doing what it is intended to do",
                    "--Must specify loop invariant property, initialization, maintenance (conserving property), termination (loop stops)",
                    "Hashing",
                    "-Different types",
                    "-Conflict resolution",
                    "-Open addressing",
                    "-Linear & quadratic probing",
                    "BST",
                    "-Rotation",
                    "-Self-balanced trees (AVL, RBT)",
                    "--How to do operations (insertion)",
                    "Greedy algorithms",
                    "-Activity-selection problem",
                    "Graph algorithms",
                    "-Topological sort – get total order from partial order",
                    "--Can be found from DAG",
                    "-BFS, DFS",
                    "-<b>MST, Kruskal, Ford-Fulkerson, Dijkstra</b>",
                    "-Cut (respect, light, cross)",
                    "-Safe edge",
                    "Bipartite graphs",
                    "-Stable pairs",
                    "Network flow",
                    "-Positive flow, capacity constraint, flow conservation"
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
