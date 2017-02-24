<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 1-10';
?>

<body>

<?php
code_highlight();
phpNav(); ?>

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
                    "Path Compression – make all nodes in find path direct children of root".code_specific('java', 'Disjoint.java')
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
