<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 0 - 5';
?>

<body>

<?php
mathJax();
phpNav(); ?>

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
                lectureSection(0, '2017/01/05',
                    'Office Hours Tues/Thu 1-2pm',
                    '40% for 5 assignments, 15% for midterm, 45% for final exam',
                    'Midterm March 9 (one crib sheet permitted), during class time',
                    'End of class April 11',
                    'Final exam TBD'
                );

                lectureSection(1, '2017/01/10',
                    ' *** A significant portion of the lecture overlaps with comp 250, so I did not add much about it here ***',
                    'f(n) is O(g(n)) iff there exists a point n<sub>0</sub> beyond which f(n) is less than some fixed constant times g(n) &rarr; for all n ≥ n0, f(n) ≤ c * g(n) (for some c > 0)',
                    'Let T1(n) = O(f(n)) & T2(n) = O(f(n))',
                    '-T1(n) + T2(n) = O(f(n))',
                    '-T1(n) / T2(n) is not necessarily O(1); big O is not necessarily the tightest upper bound.<br/>T1(n) = 3<sup>n</sup> & T2(n) = 2<sup>n</sup> is an example.',
                    'Heap – binary tree such that',
                    '-For any node n other than the root, key(n) ≥ key(parent(n))',
                    '-Let h be the height of the heap',
                    '--	First h – 1 levels are full',
                    '--	At depth h, leaves are packed on the left side of the tree'
                );

                lectureSection(2, '2017/01/12',
                    "Table S with n records of x",
                    "-X is key, key[x] &rarr; satellite data",
                    "-Insert(S, x): S &larr; S ∪ {x}",
                    "-Delete(S, x): S &larr; S \\ {x}",
                    "-Search (S, k)",
                    "-Direct Address Table – each slot/position corresponds to key in U",
                    "--If x has key k, T[k] points to x",
                    "--If T[k] is empty, represented by NIL",
                    "--All operations O(1), but if #keys < #slots, lots of wasted space",
                    "-Hash Table – reduce storage, resolve conflicts by chaining, ave O(1) search time, not worse case",
                    "-Hashing with Chaining",
                    "--Insertion – O(1) – insert at beginning",
                    "--Deletion – search time + O(1) if we use doubly linked list",
                    "--Search",
                    "Worst case – O(n)",
                    "-Time to computer has function + time to search the list",
                    "-Assuming time to compute is O(1)",
                    "-When all keys go on same slot",
                    "Average – depends how keys are distributed",
                    "--Load factor α = n/m	n = #keys, m = #slots",
                    "--Theorem – expected time of search is Θ(1 + α)",
                    "O(1) if α < 1, O(n) if α is O(n)",
                    "Proof – unsuccessful vs successful",
                    "Successful search",
                    "-1/m probability of collision – after finding x have been inserted in hash table before x (ie we insert at head)",
                    "-1 + α/2 + α/(2n)",
                    "Hash functions",
                    "-A good hash function should uniformly distribute the keys into slots, and should not be affected by patterns in keys",
                    "-Division method – h(k) = kmod d",
                    "--D must be d chosen carefully, usually 2<sup>r</sup> where r is a prime not too close to a power of 2 or 10",
                    "--Easy to implement, but division is slow",
                    "-Multiplication method – h(k) = (A kmod2<sup>w</sup>) >> (w – r)",
                    "--Extracted bits are in the middle of the binary key",
                    "Open addressing",
                    "-No chaining; if slot is not empty, try another has function",
                    "-Collisions exist; resolved by adding another slot",
                    "-We can delete elements in open address tables",
                    "-Cannot store more records than total number of slots in table",
                    "-Deletion is difficult",
                    "Goal is uniform hashing – each key is equally likely to have any permutation as its probe sequence",
                    "Theorems",
                    "-Expected # of probes in unsuccessful search is at most 1/(1 - &alpha;)",
                    "-Expected # of probes in successful search is at most 1/&alpha; * log(1/(1 - &alpha;))",
                    "Probing",
                    "-Linear – h(k, i) = (h’(k) + i)mod m",
                    "--If slot is full, check next slot; tendency to create clusters",
                    "-Quadratic probing – h(k, i) = (h’(k) + c<sub>1</sub>i + c<sub>2</sub>i<sup>2</sup>)mod m",
                    "--Must ensure we have full permutation of <0, …, m – 1>",
                    "--Secondary clustering – 2 distinct keys have same h’ value if they have same probe sequence",
                    "Double hashing – h(k, i) = (h<sub>1</sub>(k) + i * h<sub>2</sub>(k)) mod m",
                    "-h<sub>2</sub>(k) should be “relatively” prime to m to guarantee full permutation"

                );

                lectureSection(3, '2017/01/17',
                    "Max heap – largest element stored at root; all children are smaller",
                    "Min heap – smallest element stored at root; all children are bigger",
                    "Heaps as array – root = A[1], left[i] = A[2i], right[i] = A[2i + 1], parent[i] = A[i/2]",
                    "Height - # of edges on longest simple path from node to leaf",
                    "Height of heap = height of root = &Theta;(log n)",
                    "Basic operations are O(log n)",
                    linkNewTab('Heap Pseudocode (Comp 250)', 'https://www.allanwang.ca/notes/comp/?scroll_to=heaps'),
                    "Maintaining heap property",
                    "-Fix offending node by exchanging value at node with larger of the values at its children",
                    "-Recursively fix until there are no more offenses",
                    "Running time of buildMaxHeap is O(n)",
                    '-maxHeapify = O(log n); heap height = log n;<br>\( O \left( n \sum_{h=0}^{\lfloor log n \rfloor}\dfrac{h}{2^h} \right) \)',
                    "HeapSort is O(n logn)"
                );

                lectureSection(4, '2017/01/19',
                    "BST search, insert, delete are &Theta;(h); h = height of BST ",
                    "Height(x) = 1 + max(height(x.left), height(x.right))",
                    "A good BST is balanced, height = &Theta;(log n)",
                    "A bad BST is unbalanced, height = &Theta;(n)",
                    "AVL – self balancing BST – Adelson-Velsky & Landis",
                    "-Height of one child is at most one greater than the other",
                    "-Each node contains data to indicate which child is bigger, or if they have the same height",
                    "-Rotations are used to maintain balanced properties",
                    "Rotations",
                    "-Remove zigzags",
                    "--If a.left = b and b.right = c, rotate b leftwards",
                    "--Result: a.left = c and c.left = b",
                    "-Reattach children properly",
                    "--If a.left = b, b.left = c, b.right = d, a.right = e, rotate b rightwards",
                    "--Result: b.right = a, a.right = e, b.left = c",
                    "--Reattach middle child (d) to right child or local root &rarr; a.left = d"
                );

                lectureSection(5, '2017/01/24',
                    "Recursive equation for best case running time of function heapify on heap size of n? &Omega;(1)",
                    "Red Black Trees",
                    "-Always balanced	height is O(logn)	worst case operations are O(logn)",
                    "-+1 bit per node for attribute color: red or black",
                    "-Empty trees are black and will be referenced as <i>nil</i>",
                    "-Properties",
                    "--Every node is red or black",
                    "--The root and every leaf is black",
                    "--If a node is red, its children are black",
                    "--For each node, all paths from the node to descendant leaves contain same number of black nodes (same black height)",
                    "-Let",
                    "--h(x) = # of edges in longest path to leaf",
                    "--bh(x) = # of black nodes from x to leaf, not counting x and counting the leaf",
                    "--Black height of RBT = bh(root)",
                    "-Note",
                    "--h(x)/2 &le; bh(x) &le; h(x) &le; 2bh(x) ",
                    "--A subtree rooted at any node x has &ge; 2<sup>bh(x)</sup> -= 1 internal nodes",
                    "--A RBT with n internal nodes has height &le; 2lg(n+1) (proof by previous point)",
                    "Pseudocode" . code_specific('java', 'RedBlackTree.java')
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
