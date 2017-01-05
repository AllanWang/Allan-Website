<!DOCTYPE html>
<html lang="en">

<?php
include("../../../include/config.php");
$page_title = "Comp 251";
$page_description = "Comp 251 - Winter 2017";
$navFrom = 'n_comp_251';
//$navTo = 'commons';
$theme_color = "#4078c0"; //github blue

phpHeader(); ?>
<body>

<?php
phpNav(); ?>

<main>

    <div class="container">
        <div class="row" id="header">
            <h3 class="header center">Comp 251</h3>
            <h6 class="center">
                <?php
                inlineBullets(array("Prof's Email" => "mailto:jeromew@cs.mcgill.ca?Subject=Comp%20251",
                    "Course Online" => "http://www.cs.mcgill.ca/~jeromew/comp251.html",
                    "Online Form" => "https://cs251qanda.cs.mcgill.ca"
                ));
                ?>
            </h6>
        </div>
        <div class="row" id="header">
            <div class="col s12 m9 l10">
                <div id="lecture-1" class="section scrollspy">
                    <h5>Lecture 1</h5>
                    <?php
                    dynamicBullets("45% - 75%", "Key solvent; where metabolic reactions take place",
                        "Variation by {body-composition|body composition}",
                        "-#<strong>Skin</strong>70%",
                        "-#<strong>Muscle</strong>75%",
                        "-#<strong>Organs - Heart, liver, brain, kidney</strong>70-80%",
                        "-#<strong>Fat (adipose tissue)</strong>10%",
                        "Water & solid content are about the same in everyone, but the water percentage varies due to the varying fat mass",
                        "#Variation with age and gender",
                        "-#<strong>Baby</strong>75%",
                        "-#<strong>Female : Male (body fat variation)</strong>50% : 60%",
                        "-#<strong>Seniors Female : Male</strong>45% : 50%",
                        "-#Body water content is greater in infants and males",
                        "Significant for water-soluble medications (final concentration in body)",
                        "In dynamic steady state – individual & environment, and amongst internal components",
                        "Water balance",
                        "-Intake – fluids, foods, oxidative water from metabolism",
                        "--#(C<sub>6</sub>H<sub>12</sub>O<sub>6</sub> + 6O<sub>2</sub> &rarr; 6CO<sub>2</sub> + 6H<sub>2</sub>O + energy)",
                        "-Output – insensible (lungs, skin), kidneys (balancer), stool",
                        "--#Insensible – not noticeable, unavoidable ",
                        "-{obl-fac|Obligatory vs facultative} losses",
                        "--Obligatory – 1.5L/day",
                        "---#Insensible: 1.0L",
                        "---#Urine + stool: 0.5L",
                        "--Facultative – vary with intake",
                        "---#Urine – kidney is major homeostatic organ",
                        "-Insensible perspiration",
                        "--#Pure water",
                        "--#Passive evaporation (affected by environment)",
                        "--#Entire skin surface",
                        "--#Continuous",
                        "-Sweating",
                        "--#Electrolyte solution",
                        "--#Active secretion",
                        "--#Sweat glands",
                        "--#Activated by heavy work/high temp",
                        "Volume relatively constant – helps maintain solute concentration & blood volume/pressure",
                        "{water-balance|Water Balance}",
                        "-Negative water balance",
                        "--#Reduced intake",
                        "--#Excessive loss from gut",
                        "--#Excessive sweating",
                        "--#Excessive loss of expired air (dry air)",
                        "--#Excessive loss of urine",
                        "-Water 'intoxication' (positive water balance)",
                        "--#Excessive intake",
                        "--#Renal system failure",
                        "#Average male is regarded as 70kg",
                        "Body water compartments – 60% of body mass",
                        "Water is freely moving; compartments are not rigidly isolated chambers"
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
                    <div class="switch">
                        <label>
                            Collapse
                            <input id="note-toggle" type="checkbox" onchange="toggleNoteView(this)" checked>
                            <span class="lever red-tint"></span>
                            Expand
                        </label>
                    </div>
                    <ul class="section table-of-contents">
                        <!--                        <li><a href="#keypanel"><i class="material-icons tiny">vpn_key</i> Key Panel</a></li>-->
                        <li><a href="#lecture-1">H<sub>2</sub>O</a></li>
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
