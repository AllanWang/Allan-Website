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
                    "Course Online" => "http://www.cs.mcgill.ca/~jeromew/comp251.html",
                    "Online Forum" => "https://cs251qanda.cs.mcgill.ca"
                ));
                ?>
            </h6>
        </div>
        <div class="row" id="header">
            <div class="col s12 m9 l10">
                <div id="lecture-1" class="section scrollspy">
                    <h5>Lecture 1</h5>
                    <?php
                    dynamicBullets("ABC"
                    );
                    ?>
                </div>

                <!--

                <div id="" class="section scrollspy">
                    <h5></h5>
                    <?php
                //dynamicBullets( );
                ?>
                </div>

                -->
            </div>
            <div class="col hide-on-small-only m3 l2">
                <div class="pinned">
                    <ul class="section table-of-contents">
                        <!--                        <li><a href="#keypanel"><i class="material-icons tiny">vpn_key</i> Key Panel</a></li>-->
                        <li><a href="#lecture-1">Lecture 1</a></li>
                    </ul>
                </div>
            </div>
            <div id="keypanel" class="modal bottom-sheet">
                <div class="modal-content">
                    <?php
                    //                    keywordPanel('Body Composition', 'obl-fac|Obligatory/Facultative Loss', 'Water Balance', 'icfh|ICF', 'ecfh|ECF', 'Plasma', 'ISF', 'Lymph', 'water-numbers|Water Percentages', 'Hematocrit', 'Indicators', 'ionic-comp|Ionic Composition', 'Glycocalyx');
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
