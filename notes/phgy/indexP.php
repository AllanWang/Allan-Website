<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$n_key = "Physiology";
$page_title = "$n_key Notes";
$page_description = "$n_key Notes";
$navFrom = 'n_phgy';
$navTo = 'common';
$theme_color = "#F44336"; //red
phpHeader(); ?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br>
        <h2>Physiology 209</h2>
        <div class="row">
            <div class="col s12 m9 l10">
                <div id="water" class="section scrollspy">
                    <h5>H<sub>2</sub>O</h5>
                    <?php
                    dynamicBullets("45% - 75%", "Key solvent; where metabolic reactions take place",
                        "Variation by body composition",
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
                        "In <b>dynamic steady state</b> – individual & environment, and amongst internal components",
                        "Water balance",
                        "-Intake – fluids, foods, oxidative water from metabolism",
                        "--#(C<sub>6</sub>H<sub>12</sub>O<sub>6</sub> + 6O<sub>2</sub> &rarr; 6CO<sub>2</sub> + 6H<sub>2</sub>O + energy)",
                        "-Output – insensible (lungs, skin), kidneys (balancer), stool",
                        "--#Insensible – not noticeable, unavoidable ",
                        "-Obligatory vs facultative losses",
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
                        "Negative water balance",
                        "-#Reduced intake",
                        "-#Excessive loss from gut",
                        "-#Excessive sweating",
                        "-#Excessive loss of expired air (dry air)",
                        "-#Excessive loss of urine",
                        "Water 'intoxication' (positive water balance)",
                        "-#Excessive intake",
                        "-#Renal system failure",
                        "#Average male is regarded as 70kg",
                        "Body water compartments – 60% of body mass",
                        "Water is freely moving; compartments are not rigidly isolated chambers"
                    );
                    ?>
                </div>

                <div id="icf" class="section scrollspy">
                    <h5>Intracellular Fluid (ICF)</h5>
                    <?php
                    dynamicBullets("Body water compartments – 60% of body mass", "Aggregate of fluid bound by internal surface of cell membranes")
                    ?>
                </div>
                <div id="ecf" class="section scrollspy">
                    <h5>Extracellular Fluid (ECF)</h5>
                    <?php
                    dynamicBullets("1/3 of body water compartments",
                        "Major subcompartments",
                        "-Plasma – fluid medium in which blood cells are suspended",
                        "--25% of ECF, 5% of total body water compartments",
                        "-Interstitial Fluid(ISF)",
                        "--75% of ECF, 15% of total body water compartments",
                        "--#True 'Milieu Intérieur'",
                        "--#Percolates between individual cells",
                        "Minor subcompartments",
                        "-Lymph",
                        "--#Lymphatic system – network of blind - ended terminal tubules",
                        "---#Coalesce to form larger lymphatic vessels -> converge to large lymphatic ducts which drain into large veins in chest",
                        "--#1 – 2% of ECF",
                        "-Transcellular fluid",
                        "--#Aggregate of small fluid volumes secreted by specific cells into a number of body cavities(lined by epithelial cells) & having specialized functions",
                        "--#<1 – 2% of ECF",
                        "--#Intraocular, cochlear, cerebrospinal, pleural & pericardial, peritoneal, synovial, fluid in ducts of glands, bladder, etc",
                        "--#Does not affect body fluid balance; very local; however, has important functions"
                    );
                    ?>
                </div>
            </div>
                <div class="col hide-on-small-only m3 l2">
                    <div class="pinned">
                        <div class="switch">
                            <label>
                                Collapse
                                <input type="checkbox" onchange="toggleNoteView(this)" checked>
                                <span class="lever red-tint"></span>
                                Expand
                            </label>
                        </div>
                        <ul class="section table-of-contents">
                            <li><a href="#water">H<sub>2</sub>O</a></li>
                            <li><a href="#icf">Intracellular Fluid</a></li>
                            <li><a href="#ecf">Extracellular Fluid</a></li>
                        </ul>
                    </div>
                </div>
        </div>
</main>
<script>

</script>

<?php phpFooter(); ?>
</body>

</html>
