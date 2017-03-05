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
                <?php headerBullets(); ?>
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
                    "--Let a<sub>m</sub> be an activity in S<sub>ij</sub> where f<sub>m</sub> = min{ f<sub>k</sub>: a<sub>k</sub> &isin; S<sub>ij</sub> }",
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
                    "---Needs to search in u’s adjacency list. &Theta;(degree(u)) time",
                    "---&Theta;(V) in worst case",
                    "-Adjacency Matrix",
                    "--|V| x |V| matrix A",
                    "--A[i, j] = a<sub>ij</sub> = (i, j) &isin; E ? 1 : 0",
                    "Can store weights instead of bits for weighted graphs",
                    "--A = A<sup>T</sup> for undirected graphs",
                    "--Space is &Theta;(V<sup>2</sup>) – not efficient for sparse graphs",
                    "--Time to list all vertices adjacent to u: &Theta;(V)",
                    "--//bigo",
                    '<a href="https://www.allanwang.ca/notes/comp/?scroll_to=tree-traversal">BFS DFS Pseudocode (Comp 250)</a>',
                    "BFS – breadth-first search",
                    "-Find all vertices on level n before proceeding to n + 1",
                    "-Vertex is <i>discovered</i> the first time it is encountered during search",
                    "-Vertex is <i>finished</i> if all vertices adjacent to it have been discovered",
                    "-Colours",
                    "--White – undiscovered	Gray – discovered & not finished	Black – finished",
                    "-Result (given the graph G = (V, E) and source vertex s &isin; V)",
                    "--d[v] = smallest # of edges from s to v for all v &isin; V",
                    "--&infin; if v is not reachable from S",
                    "--&pi;[v]  = u such that (u, v) is last edge on shortest path s to v",
                    "u is v’s predecessor",
                    "--breadth first tree with root s containing all reachable vertices",
                    "-" . table_tags(table_contents(-2, 'Time Complexity', 'Initialization', '&Theta;(V)', 'Enqueue/Dequeue', 'O(1)', 'Total Runtime', 'O(V + E)'), 'table-f-20c'),
                    "DFS – depth-first search",
                    "-Explore all edges out of most recent vertex v before backtracking and exploring other vertices",
                    "-Continue until all reachable vertices from original source are discovered",
                    "--If any undiscovered vertices remain, pick one as a new source and repeat DFS",
                    "-Result (given the graph G = (V, E) and source vertex s &isin; V)",
                    "--2 timestamps on each vertex, with integer values b/t 1 & 2|V|",
                    "--d[v] = discovery tie (v turns from white to gray)",
                    "--f[v] = finishing time (v turns from gray to black)",
                    "--&pi;[v] = predecessor of v = u, such that v was discovered during scan of u’s adjacency list",
                    "-" . table_tags(table_contents(-2, 'Time Complexity', 'Loops', '&Theta;(V)', 'Total Runtime', '&Theta;(V + E)'), 'table-f-20c'),
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

                lectureSection(9, '2017/02/07',
                    "White-path Theorem",
                    "-Theorem 2 – v is a descendant of u iff at time d[u], there is a path u &rarr; v consisting of only white vertices (except for u, which was just colored gray)",
                    "-" . table_tags(table_contents(-2, 'Classification of Edges',
                        'Tree Edge', 'In depth-first forest (paths taken in DFS); found by exploring (u, v)<br>&ensp;white',
                        'Back Edge', '(u, v), where u is descendant of v (in depth-first tree); forms cycles w/ tree edges; self loops are back edges<br>&ensp;grey',
                        'Forward Edge', '(u, v), where v is descendant of u, but not tree edge<br>&ensp;black',
                        'Cross Edge', 'Any other edge; can go between vertices in same or different depth-first tree(s)<br>&ensp;black'), 'table-f-15c'),
                    "-Theorem 3 – in DFS of undirected graph, we get only tree & back edges; no forward or cross edges",
                    "DAG – Directed Acyclic Graph",
                    "-Graph without cycles",
                    "-Good for modeling processes & structures with partial order",
                    "--a > b & b > c &rArr; a > c",
                    "--Not all orders are in graph",
                    "-Can always make total order (valid comparison for all unique item pairs) from partial order (may not be unique; but is existing)",
                    "-Lemma 1 – directed graph G is acyclic iff a DFS of G yields no back edges",
                    "DAG to list – finding valid total order",
                    "-Use DFS with timestamps (starting from any node)",
                    "-Add item to the front of the list when it is finished",
                    "-You will notice that the finishing time is strictly decreasing",
                    "-Correctness proof – if (u, v) &isin; E, then f[v] < f[u]",
                    "SCC – Strongly Connected Components",
                    "-G is strongly connected if every pair (u, v) &isin; G is reachable from one another",
                    "-Is a maximal set of vertices C &sube; V such that &forall; u, v &isin; C, u &rarrw; v & v &rarrw; u exist",
                    "Component Graph",
                    "-G<sup>SCC</sup> = (V<sup>SCC</sup>, E<sup>SCC</sup>)",
                    "-V<sup>SCC</sup> has one vertex for each SCC in G",
                    "-E<sup>SCC</sup> has an edge if there is an edge between the corresponding SCC’s in G",
                    "G<sup>SCC</sup> is a DAG",
                    "Lemma 2 – for two distinct SCC’s in G, if there is a path connecting SCC<sub>1</sub> to SCC<sub>2</sub>, there cannot be a path connecting SCC<sub>2</sub> to SCC<sub>1</sub><br>Otherwise, they will not be separate SCC’s",
                    "Transpose of Directed Graph",
                    "-G<sup>T</sup> = transpose of directed G",
                    "--G<sup>T</sup> = (V, E<sup>T</sup>), E<sup>T</sup> = {(u, v): (v, u) &isin; E}",
                    "--G<sup>T</sup> is G with all edges reversed",
                    "-Creation time of &Theta;(V + E) using adjacency lists",
                    "-G & G<sup>T</sup> have same SCC’s",
                    "SCC Algorithm",
                    "-SCC(G) – &Theta;(V + E)",
                    "-Call DFS(G) to find f[u] for all u",
                    "-Compute G<sup>T</sup>",
                    "-Call DFS(G<sup>T</sup>) using decreasing f[u] order (found in first DFS)",
                    "--Start with some x &isin; C such that f(C) is maximum",
                    "-Output vertices in each tree of the depth-first forest formed in second DFS as separate SCC",
                    "-Works because we are visiting vertices of component graph in topologically sorted order",
                    "--Running DFS on G<sup>T</sup> means we will not visit any v from u where v & u are in different components",
                    "--Can only reach vertices in its SCC and vertices in SCC's already visited in second DFS",
                    "-Lemma 3 – let C & C’ be distinct SCC’s in G = (V, E); if (u, v) &isn; E &cap; u &isin; C &cap; v &isin; C’, then f(C) > f(C’)",
                    "--Corollary – if (u, v) &isin; E<sup>T</sup>, f(C) < f(C’)"
                );

                lectureSection(10, '2017/02/09',
                    "MST – Minimum Spanning Tree",
                    "-Has |V| –  edges",
                    "-Has no cycles",
                    "-Might not be unique",
                    "Generic algorithm",
                    "-Start with empty set",
                    "-While A is not a spanning tree, find a safe edge (u, v) and add it to A",
                    "-Results in A, which is a subset of some MST",
                    "Definitions",
                    "-A <i>cut</i> partitions vertices into disjoint sets, S & V – S",
                    "-An edge <i>crosses</i> a cut if one endpoint is in S & the other is in V – S",
                    "-A <i>light</i> edge is the cross edge with minimal weight (may not be unique)",
                    "-A cut <i>respects</i> A iff no edge in A crosses cut",
                    "Theorem 1 – safe edge – let (S, V – S) be any cut that respects A; the light edge (u, v) crossing the cut is safe for A",
                    "Kruskal’s Algorithm",
                    "-Starts with each vertex in its own component",
                    "-Repeatedly merge two components into one by connecting them through a light edge",
                    "-Scans set of edges in monotonically increasing order by weight",
                    "-Uses disjoint-set data structure to determine whether an edge connects vertices in different components",
                    "-" . table_tags(table_contents(-2, 'Time Complexity',
                        'Initialize A', 'O(1)',
                        'First for loop', '|V| MAKE-SETs',
                        'Sort E', 'O(E logE)',
                        'Second for loop', 'O(E) FIND-SETs and UNIONs',
                        'Total', 'O(E logV)'
                    ), 'table-f-20c'),
                    "--* Notice that |E| &le; |V|<sup>2</sup> &rArr; O(logE) = O(2logV) = O(logV)",
                    "Prim’s Algorithm",
                    "-Builds one tree, so A is always a tree",
                    "-Start from arbitrary “root” r",
                    "-For each step, add light edge crossing cut (V<sub>A</sub>, V – V<sub>A</sub> to A",
                    "--V<sub>A</sub> = vertices A is incident on",
                    "Finding light edge",
                    "-Use priority queue Q (which supports the following in O(log n)",
                    "--Insert(Q, u, key) – insert u with key value <i>key</i> in Q",
                    "--u = extractMin(Q) – extract item with minimum key value in Q",
                    "--decreaseKey(Q, u, newKey) – decrease u’s key value to newKey",
                    "-Each object in Q is vertex in V – V<sub>A</sub>",
                    "-Key of v has minimum weight of any edge (u, v) where u &isin; V<sub>A</sub>",
                    "-Vertex returned is v where (u, v) is light edge crossing (V<sub>A</sub>, V – V<sub>A</sub>) where u &isin; V",
                    "-If such a v does not exist, the weight is infinity",
                    "-Pseudocode" . code_specific('java', 'Prim.java')
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
