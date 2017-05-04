<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Comp 251";
$page_description = "Comp 251 Practice";
$navFrom = 'n_comp_251';
//$navTo = 'commons';
$theme_color = "#F44336"; //red
phpQA();
phpHeader(); ?>
<body>

<?php code_highlight();
phpNav(); ?>

<main>

    <div class="container">
        <div class="light row" id="commons">

            <h3 class="header center">Comp 251 Practice</h3>
            <h6 class="center">Prof. J&eacute;rome Waldisp&uuml;hl</h6>
            <div class="divider"></div>
            <h6 class="center grey-text"><?php echo instructionText() ?></h6>
        </div>
        <div id="shell">
            <div id="q-and-a">
                <div class="qa-row">
                    <div class="question">
                        Hash the following values using linear probing into a table of size 5:<br>3, 11, 14, 23, 8
                    </div>
                    <div class="answer">
                        <b>23, 11, 8, 3, 14</b><br>
                        In linear probing, an element is moved into the next available space if its hashed location is
                        already taken.
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Execute MaxHeapify on the following array:<br>[24, 21, 23, 22, 36, 29]
                    </div>
                    <div class="answer">
                        At each stage, the value in bold at index i is being compared to the values at index 2i and 2i +
                        1 (underlined). If either of those are bigger, it will swap with the biggest one and check that
                        value.<br>
                        [24, 21, <b>23</b>, 22, 36, <u>29</u>]<br>
                        [24, <b>21</b>, 29, <u>22</u>, <u>36</u>, 23]<br>
                        [<b>24</b>, <u>36</u>, <u>29</u>, 22, 21, 23]<br>
                        [36, <b>24</b>, 29, <u>22</u>, <u>21</u>, 23]<br>
                        [36, 24, 29, 22, 21, 23]
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Create an AVL tree by inserting the following keys in the given order:<br>3, 5, 7, 1, 5, 6
                    </div>
                    <div class="answer">
                        <img src="images/AVL.svg">
                        <p>root &larr; 3, 3.right &larr; 5, 5.right &larr; 7, 3.rotateLeft, 3.left &larr; 1, 7.left
                            &larr; 5, 5.right &larr; 6, 5.rotateLeft, 7.rotateRight</p>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Create a red black tree by inserting the following keys in the given order:<br>3, 5, 7, 1, 5, 6
                    </div>
                    <div class="answer">
                        <img src="images/RedBlack.svg">
                        <p>root &larr; 3.black(), 3.right &larr; 5.red(), 5.right &larr; 7.red(), 3.rotateLeft (3.red(),
                            5.black()), 3.left &larr; 1.red(), 3.black(), 7.left &larr; 5.red(), 5.right &larr; 6.red(),
                            5.rotateLeft, 7.rotateRight (6.black())</p>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Using the greedy algorithm in class, find the biggest set of non overlapping activities from the
                        graph below.<br><br>
                        <img src="images/GreedyActivity.svg">
                    </div>
                    <div class="answer">
                        a<sub>1</sub>, a<sub>4</sub>, a<sub>7</sub>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Find the Huffman encoding for "abracadabra".
                    </div>
                    <div class="answer">
                        <?php
                        echo table_tags(table_contents(-5, 'Frequencies', 'a', 'b', 'c', 'd', 'r', 5, 2, 1, 1, 2));
                        echo table_tags(table_contents(-5, 'Encodings', 'a', 'b', 'c', 'd', 'r', '0', '110', '100', '101', '111'));
                        ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Given the graph below, find the depths of each vertex with respect to vertex s.<br><br>
                        <img src="images/BFS.svg">
                    </div>
                    <div class="answer">
                        <br><br><img src="images/BFSA.svg">
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        With the same graph, compute the DFS start/finish times; assume each edge is bidirectional.
                    </div>
                    <div class="answer">
                        There is more than one possible answer, depending on which child you choose when you start
                        off.<br><br>
                        <img src="images/DFSA.svg">
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        How is topological sort performed?
                    </div>
                    <div class="answer">
                        Start with an empty list that will represent the order. Pick any starting point in the graph and
                        compute DFS at that point. Once a node is finished, insert it in the front of the list. Once the
                        DFS cannot reach any more nodes, pick any of the remaining nodes as a starting point and repeat.
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Find the strongly connected components of the following graph:<br><br>
                        <img src="images/SCC.svg">
                    </div>
                    <div class="answer">
                        <b>{a, b, e}, {f, g}, {c, d}, {h}</b><br>
                        SCCs are found as follows: Call DFS(G) to find f[u] for all u. Call DFS(G<sup>T</sup>), but
                        start with the vertices in order of decreasing f[u] (from DFS(G)). Output the vertices in each
                        tree from DFS(G<sup>T</sup>) as a separate SCC).
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Use Kruskal's algorithm to find the MST of the following graph:<br><br>
                        <img src="images/Kruskal.svg">
                    </div>
                    <div class="answer">
                        Pick the lightest edge that doesn't connect two already connected nodes until all nodes are
                        connected.<br><br>
                        <img src="images/KruskalA.svg">
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        What is the triangle inequality?
                    </div>
                    <div class="answer">
                        For all (u, v) &isin; E, <b>&delta;(u, v) &le; &delta;(u, x) + &delta;(x, v)</b><br>
                        There exists a shortest path from u &#8605; v. If u &rarr; v is the shortest path, our
                        inequality holds true. We are assuming that all deltas are positive, so if u &rarr; x &rarr; v
                        is the "shortest path", we can further shorten it removing deltas to x, resulting in &delta;(u,
                        v).
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        What are some similarities and differences in Prim's algorithm & Dijkstra's algorithm?
                    </div>
                    <div class="answer">
                        Both algorithms involve adding an edge with the smallest weight to a vertex V, and start off
                        with a source vertex S of weight 0 and all other vertices with weight &infin;. At each stage of
                        Prim, we choose the lightest adjacent edge joining a vertex that isn't
                        already connected to our tree. The end result is a MST. <br> At each stage of Dijkstra, we
                        update weights for vertices adjacent to the one we're working with by summing the weight of the
                        current vertex with the weight of the edge connecting a given adjacent vertex. If the existing
                        weight for that vertex is already smaller, we keep the original weighting; otherwise we save our
                        new summed weighting. After all new weightings are calculated, we connect the vertex with the
                        smallest weight to our
                        graph. The end result is a shortest-path tree, meaning that the path from source vertex S to any
                        vertex in our graph is the shortest path connecting those two vertices.
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Use Gale-Shapley to match the following two groups. The first column of the two tables denote
                        the members in their respective groups, and the following three letters denote their preferences
                        in that order.
                        <div class="row">
                            <div class="col s5">
                                <?php
                                echo table_tags(table_contents(4,
                                    'K', 'B', 'C', 'A',
                                    'L', 'A', 'C', 'B',
                                    'M', 'A', 'B', 'C'
                                ));
                                ?>
                            </div>
                            <div class="col s2"></div>
                            <div class="col s5">
                                <?php
                                echo table_tags(table_contents(4,
                                    'A', 'K', 'L', 'M',
                                    'B', 'L', 'M', 'K',
                                    'C', 'M', 'L', 'K'
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="answer">
                        <b>KC, LA, MB</b><br>
                        For each &alpha;, get preferences. For each of those preferences, if one prefers &alpha; to
                        current pairing or has no pairing, link; otherwise, continue down prefs.<br>
                        Step 1: KB, LA, MA; result: KB, LA, M?<br>
                        Step 2: MB; result: K?, LA, MB<br>
                        Step 3: KC; result: KC, LA, MB; done
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Find the max flow of the graph below using Ford-Fulkerson.<br><br>
                        <img src="images/FF.svg">
                    </div>
                    <div class="answer">
                        <b>19</b><br>
                        Find a path, computer bottleneck capacity, augment path, repeat until no more paths
                        Examples of a series of augmented paths:<br>SADT (8), SCDT (2), SCDABT (4), SADBT (2), SCDBT
                        (3), done (19)<br>
                        SCDT (9), SABT (4), SADBT (6), done (19)
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Use Needleman-Wunsch to compute the pairing and minimum distance between the following two
                        sequences:<br><br>
                        ACTATA&emsp;&emsp;CAAAT<br><br>
                        It is given that delta is 0 if there is a match and 1 otherwise.
                    </div>
                    <div class="answer">
                        <b>ACTATA–&ensp; Distance = 4<br>–C–AAAT</b><br>
                        Dynamic programming; compute min delta for every valid pairing; note that two chars are only
                        compared if coming from diagonal; otherwise
                        it is insertion or deletion.<br>
                        <?php
                        echo table_tags(table_contents(8,
                            '', '-', 'A', 'C', 'T', 'A', 'T', 'A',
                            '-', '<b>0</b>', '<b>1</b>', 2, 3, 4, 5, 6,
                            'C', 1, 1, '<b>1</b>', '<b>2</b>', 3, 4, 5,
                            'A', 2, 1, 2, 2, '<b>2</b>', 3, 4,
                            'A', 3, 2, 2, 3, 3, '<b>3</b>', 3,
                            'A', 4, 3, 3, 3, 3, 4, '<b>3</b>',
                            'T', 5, 4, 4, 3, 4, 3, '<b>4</b>'));
                        ?><br>
                        Backtrack by starting at the bottom right and finding the smallest value on the left, top, or
                        diagonal.<br>Left = deletion, diagonal = match/substitution, up = insertion.
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        How is the Bellman-Ford algorithm done and how does it differ from Dijkstra?
                    </div>
                    <div class="answer">
                        The two differ in that Bellman-Ford allows for negative-weight edges, as it will catch a
                        negative cycle if it is part of the shortest path.
                        The two both operate by relaxing the graph using an augmented path, but if Bellman-Ford doesn't
                        converge after V(G) – 1 iterations, there is a negative weight cycle and no shortest path tree.
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        How is Karatsuba multiplication done compared to the na&iuml;ve multiplication?
                    </div>
                    <div class="answer">
                        For x * y, both with size n, we may split them into two numbers each with half the size:<br>
                        m = &lceil;n/2&rceil;<br>
                        a = &lfloor;x/2<sup>m</sup>&rfloor;&emsp;&emsp;b = x mod 2<sup>m</sup><br>
                        c = &lfloor;y/2<sup>m</sup>&rfloor;&emsp;&emsp;d = y mod 2<sup>m</sup><br>
                        The resulting product would be (2<sup>m</sup>a + b)(2<sup>m</sup>c + d)<br>
                        = 2<sup>2<sup>m</sup></sup>ac + 2<sup>m</sup>(bc + ad) + bd<br>
                        The na&iuml;ve algorithm calculates the formulat above, with four recursions and three additions
                        to combine them.<br><br>
                        Karatsuba's trick further converts the formula to<br>2<sup>2<sup>m</sup></sup>ac + 2<sup>m</sup>(ac
                        + bd – (a – b)(c – d)) + bd<br>
                        which results in only three distinct recursions (ac, bc, (a – b)(c – d)), but six
                        operations.<br>
                        As a result, it is faster than the grade-school algorithm for about 320-640 bits.
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Use the Master Theorem to solve the following recurrences if possible:
                        <ol>
                            <li>T(n) = 3T(n/2) + n<sup>2</sup></li>
                            <li>T(n) = 2<sup>n</sup>T(n/2) + n<sup>n</sup></li>
                            <li>T(n) = 2T(n/2) + nlogn</li>
                            <li>T(n) = 4T(n/2) + cn</li>
                        </ol>
                        <?php echo linkNewTab('Master Theorem Cases', 'https://www.allanwang.ca/notes/mcgill/comp251/4.php?scroll_to=lecture-19'); ?>
                    </div>
                    <div class="answer">
                        <ol class="bold">
                            <li>&Theta;(n<sup>2</sup>) (Case 3)</li>
                            <li>N/A (k + &epsilon; < n)</li>
                            <li>&Theta;(nlog<sup>2</sup>n) (Case 2)</li>
                            <li>&Theta;(n<sup>2</sup>)</li>
                        </ol>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        What is the aggregate method and the accounting method?
                    </div>
                    <div class="answer">
                        Aggregate analysis involves computing the total running time on a case by case basis and
                        splitting it evenly among the operations, whereas the accounting method involves imposing extra
                        charges on inexpensive operations to pay for expensive operations later on.
                    </div>
                </div>
                <!--
                    <div class="qa-row" >
                        <div class="question" >

                        </div >
                        <div class="answer" >

                        </div >
                    </div >
                        -->
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
