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

                <div id="structure" class="section">
                    <h5>Intracellular Fluid (ICF)</h5>
                    <?php
                    dynamicBullets("Body water compartments – 60% of body mass", "Aggregate of fluid bound by internal surface of cell membranes")
                    ?>
                    <h5>Extracellular Fluid (ECF)</h5>
                    <?php
                    dynamicBullets("1/3 of body water compartments",
                        "Major subcompartments",
                        "-Plasma – fluid medium in which blood cells are suspended",
                        "--25% of ECF,5 % of total body water compartments",
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
            <div class="col hide - on - small - only m3 l2">
                <div class="pinned">
                    <div class="switch">
                        <label>
                            Collapse
                            <input type="checkbox" onchange="toggleNoteView(this)" checked>
                            <span class="lever"></span>
                            Expand
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>

</script>

<?php phpFooter(); ?>
</body>

</html>
