<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Comp 251";
$page_description = "Comp 251 - Winter 2017";
$navFrom = 'n_comp_251';
//$navTo = 'commons';
$theme_color = "#4078c0"; //github blue
dynamicNotes('php');
phpHeader(); ?>
<body>

<?php
phpNav(); ?>

<main>

    <div class="container light">
        <div class="row" id="header">
            <h3 class="header center">Comp 251</h3>
            <h6 class="center">
                <?php
                inlineBullets(array("Prof's Email" => "mailto:jeromew@cs.mcgill.ca?Subject=Comp%20251",
                    "Course Online" => "http://www.cs.mcgill.ca/~jeromew/comp251.html#schedule",
                    "Online Forum" => "https://cs251qanda.cs.mcgill.ca"
                ));
                ?>
            </h6>
        </div>
        <div class="row" id="header">
            <div class="col s12 m9 l10">
                <?php
                lectureSection(1, '2017/01/05',
                    'Office Hours Tues/Thu 1-2pm',
                    '40% for 5 assignments, 15% for midterm, 45% for final exam',
                    'Midterm March 7 (one crib sheet permitted), during class time',
                    'End of class April 11',
                    'Final exam TBD'
                );

                lectureSection(2, '2017/01/10',
                    'f(n) is O(g(n)) iff there exists a point n0 beyond which f(n) is less than some fixed constant times g(n) &rarr; for all n ≥ n0, f(n) ≤ c * g(n) (for some c > 0)',
                    'Let T1(n) = O(f(n)) & T2(n) = O(f(n))',
                    '-T1(n) + T2(n) = O(f(n))',
                    '-T1(n) / T2(n) is not necessarily O(1); big O is not necessarily the tightest upper bound.<br/>T1(n) = 3<sup>n</sup> & T2(n) = 2<sup>n</sup> is an example.',
                    'Heap – binary tree such that',
                    '-For any node n other than the root, key(n) ≥ key(parent(n))',
                    '-Let h be the height of the heap',
                    '--	First h – 1 levels are full',
                    '--	At depth h, leaves are packed on the left side of the tree'
                );
                ?>

            </div>
            <div class="col hide-on-small-only m3 l2">
                <div class="pinned vertical-center">
                    <ul class="section table-of-contents">
                        <!--<li><a href="#keypanel"><i class="material-icons tiny">vpn_key</i> Key Panel</a></li>-->
                        <?php
                        tableOfContentsData();
                        ?>
                    </ul>
                </div>
            </div>
            <div id="keypanel" class="modal bottom-sheet">
                <div class="modal-content">
                    <?php
                    //keywordPanel('Body Composition', 'obl-fac|Obligatory/Facultative Loss', 'Water Balance', 'icfh|ICF', 'ecfh|ECF', 'Plasma', 'ISF', 'Lymph', 'water-numbers|Water Percentages', 'Hematocrit', 'Indicators', 'ionic-comp|Ionic Composition', 'Glycocalyx');
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
