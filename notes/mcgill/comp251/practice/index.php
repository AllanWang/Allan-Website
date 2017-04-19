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
                        Hash the following values using linear probing into a table of size 5: 3, 11, 14, 23, 8.
                    </div>
                    <div class="answer">
                        <b>23, 11, 8, 3, 14</b><br>
                        In linear probing, an element is moved into the next available space if its hashed location is
                        already taken.
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Execute MaxHeapify on the following array: [24, 21, 23, 22, 36, 29].
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
                        Create an AVL tree by inserting the following keys in the given order: 3, 5, 7, 1, 5, 6.
                    </div>
                    <div class="answer">
                        <img src="images/AVL.svg">
                        <p>root &larr; 3, 3.right &larr; 5, 5.right &larr; 7, 3.rotateLeft, 3.left &larr; 1, 7.left
                            &larr; 5, 5.right &larr; 6, 5.rotateLeft, 7.rotateRight</p>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Create a red black tree by inserting the following keys in the given order: 3, 5, 7, 1, 5, 6.
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
                        Given the graph below, find the depths of each vertex with respect to vertex s.<br>
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
                        Find the strongly connected components of the following graph:<br>
                        <img src="images/SCC.svg">
                    </div>
                    <div class="answer">
                        <b>{a, b, e}, {f, g}, {c, d}, {h}</b><br><br>
                        SCCs are found as follows: Call DFS(G) to find f[u] for all u. Call DFS(G<sup>T</sup>), but
                        start with the vertices in order of decreasing f[u] (from DFS(G)). Output the vertices in each
                        tree from DFS(G<sup>T</sup>) as a separate SCC).
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Use Kruskal's algorithm to find the MST of the following graph:<br>
                        <img src="images/Kruskal.svg">
                    </div>
                    <div class="answer">
                        Pick the lightest edge that doesn't connect two already connected nodes until all nodes are
                        connected.<br>
                        <img src="images/KruskalA.svg">
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        What is the triangle inequality?
                    </div>
                    <div class="answer">
                        For all (u, v) &isin; E, &delta;(u, v) &le; &delta;(u, x) + &delta;(x, v)<br>//TODO
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

                    </div>
                    <div class="answer">

                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">

                    </div>
                    <div class="answer">

                    </div>
                </div>
                <!--
                    <div class="qa-row">
                        <div class="question">

                        </div>
                        <div class="answer">

                        </div>
                    </div>
               -->
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
