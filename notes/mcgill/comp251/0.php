<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 1 - 5';
?>

<body>

<?php
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
                lectureSection(1, '2017/01/05',
                    'Office Hours Tues/Thu 1-2pm',
                    '40% for 5 assignments, 15% for midterm, 45% for final exam',
                    'Midterm March 7 (one crib sheet permitted), during class time',
                    'End of class April 11',
                    'Final exam TBD'
                );

                lectureSection(2, '2017/01/10',
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

                lectureSection(4, '2017/01/17',
                    "Open addressing",
                    "-Collisions exist; resolved by adding another slot",
                    "-We can delete elements in open address tables ",
                    "-Cannot store more records than total number of slots in table",
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
                    "-1 + α/2 + α/(2n)"
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
