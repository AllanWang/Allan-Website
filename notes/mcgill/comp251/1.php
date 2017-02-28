<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 6 - 10';
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
                <?php
                inlineBullets(array("Prof's Email" => "mailto:jeromew@cs.mcgill.ca?Subject=Comp%20251",
                    "Course Online" => "http://www.cs.mcgill.ca/~jeromew/comp251.html#schedule",
                    "Online Forum" => "https://cs251qanda.cs.mcgill.ca"
                ));
                ?>
            </h6>
        </div>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <?php
                lectureSection(6, '2017/01/26',
                    "Disjoint Sets",
                    "Connected components – set of nodes connected by a path",
                    "-Every node in the set can be reached by every other node (path itself is irrelevant)",
                    "Partition – set of objects split into disjoint subsets",
                    "-The union of all sets will produce the original set",
                    "-No two sets share a common node unless those sets are the same set; every set is <i>disjoint</i> from all the other sets",
                    "Map vs Relation",
                    "-Maps lay out a unidirectional property from elements in one set to the other",
                    "-Relation defines a bidirectional connection (ie boolean matrix)",
                    "Equivalence – i is equivalent to j if they belong to the same set (are connected)",
                    "-" . bulletTablePair("Reflexivity", "&forall; a &isin; S, (a, a) &isin; R", 30),
                    "--For all u &isin; V, there is a path of length 0 from u to u",
                    "-" . bulletTablePair("Symmetry", "&forall; a, b &isin; S, (a, b) &isin; R &rArr; (b, a) &isin; R", 30),
                    "--For al u, v &isin; V, there is a path from u to v iff there is a path from v to u",
                    "-" . bulletTablePair("Transitivity", "&forall; a, b, c &isin; S, (a, b) &isin; R &cap; (b, c) &isin; R &rArr; (a, c) &isin; R", 30),
                    "--For all u, v, w &isin; V, if there is a path from u to v and a path from v to w, there is a path from u to w",
                    "ADT (abstract data type)",
                    "-" . bulletTablePair("find(i)", "returns representative of set that contains i", 30),
                    "-" . bulletTablePair("sameset(i, j)", "returns find(i) == find(j)", 30),
                    "-" . bulletTablePair("union (i, j)", "merges sets containing I and j", 30),
                    "--Does nothing if they are already in the same set",
                    "When merging trees, smaller tree should be merged below root of larger tree to minimize height; height will therefore only increase when the trees initially have the same height",
                    "-Rank – upper bound on height of nodes",
                    "Path Compression – make all nodes in find path direct children of root" . code_specific('java', 'Disjoint.java')
                );

                lectureSection(7, '2017/01/31',
                    "Greedy Strategy – when offered a choice, pick the one that seems best at the moment in hopes of optimizing the overall solution",
                    "-Prove that when given a choice, one of the optimal choices is the greedy choice; it is therefore always safe to make the greedy choice",
                    "-Show all but one of the sub-problems resulting from the greedy choice are empty",
                    "Activity Selection Problem",
                    "-Given a set S of n activities, a<sub>1</sub>, a<sub>2</sub>, …, a<sub>n</sub>",
                    "--With s<sub>i</sub> = start time of activity i",
                    "--And f<sub>i</sub> = finish time of activity i",
                    "--What is the maximum number of “compatible activities”?",
                    "---2 activities are compatible if their intervals do not overlap",
                    "---We wish to return the biggest valid subset (there may be multiple solutions, but we’ll find one of them)",
                    "-Optimal Substructure",
                    "--Let S<sub>ij</sub> = subset of activities in S that start after a<sub>i</sub> finished and finish before a<sub>j</sub> starts",
                    "---S<sub>ij</sub> = { a<sub>k</sub> &isin; S: &forall; i, j &ensp;&ensp; f<sub>i</sub> &le; s<sub>k</sub> < f<sub>k</sub>, &le; s<sub>j</sub> }",
                    "--A<sub>ij</sub> = optimal solution = A<sub>ik</sub> &cup; {a<sub>k</sub>} &cup; A<sub>kj</sub>",
                    "-Greedy Choice",
                    "--Let S<sub>ij</sub> &ne; &empty;",
                    "--Let a<sub>m</sub> be an activity in S<sub>ij</sub> where f<sub>m</sub> = min{ f<sub>k</sub>: a<sub>k</sub> &isin; S<sub>ij</sub> } ",
                    "--We know that a<sub>m</sub> is used in one of the optimal solutions",
                    "---Take any optimal solution without a<sub>m</sub> and replace the first activity with it; it is still a valid solution since f<sub>m</sub> &le; all other finish times",
                    "--S<sub>im</sub> = &empty;, so choosing a<sub>m</sub> leaves S<sub>mj</sub> as the only nonempty subproblem",
                    "-Greedy Solution",
                    "--Take the activity with the earliest finishing time and add it to the set. Continue with the remaining time frame (after the current finishing time) and repeat until there are no other valid activities.",
                    "Pseudocode" . code_specific('java', 'MaxCountActivitySelector.java'),
                    "Typical Steps",
                    "-Cast optimization problem as one in which we make a choice resulting in a subproblem",
                    "-Prove that there is always an optimal solution that makes the greedy choice",
                    "-Show that greedy choice & optimal solution to subproblem &rArr; optimal solution",
                    "-Make greedy choice & solve top-down",
                    "-May preprocess input (eg sorting activities by finish time)",
                    "Text Compression",
                    "-Given a string X, efficiently encode X into a smaller string Y",
                    "--Saves memory and/or bandwidth",
                    "-Huffman encoding",
                    "--Computer frequency f(c) for each character c",
                    "--Encode high-frequency chars with short code words",
                    "--No code word is a prefix for another code",
                    "--Use optimal encoding tree to determine code words",
                    "-Terms",
                    "--Code – mapping of char to binary",
                    "--Prefix code – binary code such that no code-word is prefix of another code-word",
                    "--Encoding tree – tree representing prefix code",
                    "---Each leaf stores a character (other nodes do not have chars)",
                    "---Code word given by path from root to external node",
                    "----Left child = 0, right child = 1",
                    "Pseudocode" . code_specific('java', 'Huffman.java')
                );

                lectureSection(8, '2017/02/02',
                    "Graph G = (V, E)",
                    "-V – set of vertices",
                    "-E – set of edges &sube; (V x V)",
                    "Types",
                    "-Undirected – edge (u, v) = (v, u) & there are no self loops",
                    "-Directed – (u, v) is edge from u to v, or u &rarr; v; self loops allowed",
                    "-Weighted – each edge has associated weight, given as a function w: E &rarr; R",
                    "-Dense – |E| &asymp; |V|<sup>2</sup>",
                    "-Sparse – |E| << |V|<sup>2</sup>",
                    "|E| = O(|V|<sup>2</sup>|)",
                    "Properties",
                    "-If (u, v) &isin; E, then vertex v is adjacent to vertex u",
                    "--Symmetric (reverse applies) if G is undirected",
                    "--Not necessarily true if G is directed",
                    "-If G is connected",
                    "--There is a path between every pair of vertices",
                    "--|E| &ge; |V| – 1",
                    "--If |E| = |V| – 1, G is a tree",
                    "Vocabulary",
                    "-Ingoing edges of u: { (v, u) &isin; E }	edges pointing directly to u",
                    "-Outgoing edges of u: { (u, v) &isin; E }	edges pointing directly out from u",
                    "-In-degree(u): |in(u)|",
                    "-Out-degree(u): |out(u)|",
                    "Representations",
                    "-Adjacency Lists",
                    "--Array Adj of |V| lists",
                    "--Every vertex has a list of adjacent vertices",
                    "--If weighted, store weights within the adjacency lists",
                    "--Space efficient when graph is sparse",
                    "--Determine if edge (u, v) &isin; E is not efficient",
                    "Needs to search in u’s adjacency list. &Theta;(degree(u)) time",
                    "&Theta;(V) in worst case",
                    "-Adjacency Matrix",
                    "--|V| x |V| matrix A",
                    "--A[i, j] = a<sub>ij</sub> = (i, j) &isin; E ? 1 : 0",
                    "Can store weights instead of bits for weighted graphs",
                    "--A = A<sup>T</sup> for undirected graphs",
                    "--Space is &Theta;(V<sup>2</sup>) – not efficient for sparse graphs",
                    "--Time to list all vertices adjacent to u: &Theta;(V)",
                    "--//bigo",
                    "BFS – breadth-first search",
                    "-Find all vertices on level n before proceeding to n + 1",
                    "-Vertex is <i>discovered</i> the first time it is encountered during search",
                    "-Vertex is <i>finished</i> if all vertices adjacent to it have been discovered",
                    "-Colours",
                    "--White – undiscovered	Gray – discovered & not finished	Black – finished",
                    "-Result (given the graph G = (V, E) and source vertex s &isin; V)",
                    "--d[v] = smallest # of edges from s to v for all v &isin; V",
                    "= &infty; if v is not reachable from S",
                    "--&pi;[v]  = u such that (u, v) is last edge on shortest path s to v",
                    "u is v’s predecessor",
                    "--breadth first tree with root s containing all reachable vertices",
                    "-<table>" . table_contents(2, 'Time Complexity', '', 'Initialization', '&Theta;(V)', 'Enqueue/Dequeue', 'O(1)', 'Total Runtime', 'O(V + E)') . "</table>",
                    "DFS – depth-first search",
                    "-Explore all edges out of most recent vertex v before backtracking and exploring other vertices",
                    "-Continue until all reachable vertices from original source are discovered",
                    "--If any undiscovered vertices remain, pick one as a new source and repeat DFS",
                    "-Result (given the graph G = (V, E) and source vertex s &isin; V)",
                    "--2 timestamps on each vertex, with integer values b/t 1 & 2|V|",
                    "--d[v] = discovery tie (v turns from white to gray)",
                    "--f[v] = finishing time (v turns from gray to black)",
                    "--&pi;[v] = predecessor of v = u, such that v was discovered during scan of u’s adjacency list ",
                    "-<table>" . table_contents(2, 'Time Complexity', '', 'Loops', '&Theta;(V)', 'Total Runtime', '&Theta;(V + E)') . "</table>",
                    "Parenthesis Theorem",
                    "-Theorem 1 – for all u, v, exactly one of the following holds",
                    "--d[u] < f[u] < d[v] < f[v] or d[v] < f[v] < d[u] < f[u]",
                    "And neither u nor v is a descendant of the other",
                    "--d[u] < d[v] < f[v] < f[u]",
                    "And v is a descendant of u",
                    "--d[v] < d[u] < f[u] < f[v]",
                    "And u is a descendant of v",
                    "-d[u] < d[v] < f[u] < f[v] cannot happen"
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
