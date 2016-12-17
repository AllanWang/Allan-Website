<!DOCTYPE html>
<html lang="en">

<?php
include("../../include/config.php");
$n_key = "Physiology";
$page_title = "$n_key Notes";
$page_description = "$n_key Notes";
$navFrom = 'n_phgy';
$navTo = 'common';
$theme_color = "#F44336"; //red
dynamicNotes();
phpHeader(); ?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br>
        <h2>Physiology 209</h2>
        <div class="row light">
            <div class="col s12 m9 l10">
                <div id="water" class="section scrollspy">
                    <h5>H<sub>2</sub>O</h5>
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

                <div id="icf" class="section scrollspy">
                    <h5 id="icfh">Intracellular Fluid (ICF)</h5>
                    <?php
                    dynamicBullets("Body water compartments – 60% of body mass", "Aggregate of fluid bound by internal surface of cell membranes")
                    ?>
                </div>
                <div id="ecf" class="section scrollspy">
                    <h5 id="ecfh">Extracellular Fluid (ECF)</h5>
                    <?php
                    dynamicBullets("1/3 of body water compartments",
                        "Major subcompartments",
                        "-{plasma|Plasma} – fluid medium in which blood cells are suspended",
                        "--25% of ECF, 5% of total body water compartments",
                        "-{isf|Interstitial Fluid (ISF)}",
                        "--75% of ECF, 15% of total body water compartments",
                        "--#True 'Milieu Intérieur'",
                        "--#Percolates between individual cells",
                        "Minor subcompartments",
                        "-{lymph|Lymph}",
                        "--#Lymphatic system – network of blind - ended terminal tubules",
                        "---#Coalesce to form larger lymphatic vessels -> converge to large lymphatic ducts which drain into large veins in chest",
                        "--#1 – 2% of ECF",
                        "-Transcellular fluid",
                        "--#Aggregate of small fluid volumes secreted by specific cells into a number of body cavities (lined by epithelial cells) & having specialized functions",
                        "--#<1 – 2% of ECF",
                        "--#Intraocular, cochlear, cerebrospinal, pleural & pericardial, peritoneal, synovial, fluid in ducts of glands, bladder, etc",
                        "--#Does not affect body fluid balance; very local; however, has important functions",
                        "Number recap: Total H2O 60%, ICF 40%, ECF 20%, ISF 15%, Plasma 5% (of total body weight)",
                        "For healthy individuals, total volume & relative distributions between compartments must remain constant (though they are in dynamic equilibrium)",
                        "{hematocrit|Hematocrit (Ht)} – percentage of blood volume occupied by Red Blood Cells (erythrocytes)",
                        "-Height of erythrocyte column/height of whole blood column",
                        "-Ht = Packed Cell Volume (PCV)",
                        "-Normal value for males = 45%"
                    );
                    ?>
                </div>
                <div id="dcv" class="section scrollspy">
                    <h5>Methods to Determine Compartment Volumes</h5>
                    <?php
                    dynamicBullets(
                        "Direct (ie centrifuge & measure)",
                        "Indirect – indicator dilution method",
                        "-#Know: total quantity of test substance, concentration of substance after dispersion",
                        "-#Add quantity Q of indicator to vein &rarr; allow time to equilibrate &rarr; remove known volume of blood & centrifuge for plasma &rarr; measure concentration (c) of substance in plasma &rarr; calculate V = Q/c",
                        "-{indicators|Indicator choice}",
                        "--#Non-toxic, diffuse readily, distribute evenly through compartments to be measured, induce no changes in distribution of water, easy to measure",
                        "--Antipyrine, D<sub>2</sub>O, T<sub>2</sub>O – for total body water measurements",
                        "--Radioactively labeled Inulin, sucrose, mannitol – for ECF (does not pass cell membrane)",
                        "--Evans’ blue (T1824) or I<sup>131</sup> – Albumin – for plasma (does not pass capillary wall)"
                    )
                    ?>
                </div>
                <div id="ionic-composition" class="section scrollspy">
                    <h5 id="ionic-comp">Ionic Compositions</h5>
                    <?php
                    dynamicBullets(
                        "ICF – high in K<sup>+</sup> & Mg<sup>++</sup>, low in Na<sup>+</sup> & Cl<sup>-</sup>",
                        "ECF – high in Na<sup>+</sup> and Cl<sup>-</sup>, low in K<sup>+</sup>",
                        "0.9% NaCl – dilute sea water – matches proper concentration",
                        "Artificial physiological solutions – substitute for plasma/ISF (examples, don’t need to memorize)",
                        "-Physiological saline – 9g NaCl + H<sub>2</sub>O to make 1L",
                        "-Ringer’s solution – 8.6g NaCl, 0.3g KCl, 0.3g CaCl<sub>2</sub>, + H<sub>2</sub>O to make 1L",
                        "-Locke-Ringer solution – 9g NaCl, 0.4g KCl, 0.2g CaCl<sub>2</sub>, 0.2g MgCl<sub>2</sub>, 0.5g NaHCO<sub>3</sub>, 0.5g dextrose (simple sugar, energy), + H<sub>2</sub>O to make 1L"

                    )
                    ?>
                </div>
                <div id="units-concentration" class="section scrollspy">
                    <h5 id="units-concentration-h">Units of Concentration</h5>
                    <?php
                    dynamicBullets(
                        "#<strong>Amount (mass) of solute</strong>1g% = 1g solute in 1dL of water",
                        "#<strong>Number of solute molecules</strong>1mol = gram molecular weight/1L of H<sub>2</sub>O",
                        "-#Molality (m) – number of moles of solute dissolved in 1Kg solvent",
                        "-#Molarity (M) – amount of solute in specific amount of solution",
                        "#<strong>Number of reactive units</strong>Eq = molarity of ion * valency(ie Na<sup>+</sup> 1Eq/mol, Ca<sup>2+</sup> 2Eq/mol)"
                    );
                    br();
                    dynamicBullets(
                        "#Viability of cells depends on relative constancy of internal environment (milieu intérieur) & requires exchanges with internal & external environment",
                        "Plasma | Capillary wall | ISF | Cell membrane | ICF",
                        "#Important transports: lungs, skin, kidneys, GI tract"
                    );
                    ?>
                </div>
                <div id="cell-membrane" class="section scrollspy">
                    <h5>Cell Membrane</h5>
                    <?php
                    dynamicBullets(
                        "Functions – support distinct compositions of ICF & ISF; be selectively permeable",
                        "Highly permeable to H<sub>2</sub>O, lipid-soluble substances, dissolved gases (O<sub>2</sub>, CO<sub>2</sub>), small uncharged molecules",
                        "Less permeable to larger molecules, charged particles",
                        "Impermeable to very large molecules",
                        "#Properties due to bimolecular phospholipid layers w/ molecules exhibiting lateral mobility",
                        "-#Phospholipid, hydrophilic heads, hydrophobic tails",
                        "-#Amphipathic – both hydrophilic & hydrophobic parts",
                        "Cholesterol inserted in phospholipid layer adds stability & rigidity",
                        "Proteins",
                        "-Integral – closely associated with phospholipids, mostly cross the membrane (transmembrane)",
                        "-Peripheral – loosely associated, mostly on cytoplasmic side",
                        "{glycocalyx|Glycocalyx} – carbohydrates & glycoproteins on outer side of membrane; gives distinct identity",
                        "#Fluid mosaic model",
                        "#Functions of plasma membrane proteins",
                        "-#Selective transport channel",
                        "-#Enzyme",
                        "-#Cell surface receptor",
                        "-#Cell surface identity marker",
                        "-#Cell adhesion",
                        "-#Attachment to cytoskeleton"
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
                        <li><a href="#keypanel"><i class="material-icons tiny">vpn_key</i> Key Panel</a></li>
                        <li><a href="#water">H<sub>2</sub>O</a></li>
                        <li><a href="#icf">Intracellular Fluid</a></li>
                        <li><a href="#ecf">Extracellular Fluid</a></li>
                        <li><a href="#dcv">Compartment Volumes</a></li>
                        <li><a href="#ionic-composition">Ionic Composition</a></li>
                        <li><a href="#units-concentration">Units of Concentration</a></li>
                        <li><a href="#cell-membrane">Cell Membrane</a></li>
                    </ul>
                </div>
            </div>
            <div id="keypanel" class="modal bottom-sheet">
                <div class="modal-content">
                    <?php
                    keywordPanel('Body Composition', 'obl-fac|Obligatory/Facultative Loss', 'Water Balance', 'icfh|ICF', 'ecfh|ECF', 'Plasma', 'ISF', 'Lymph', 'Hematocrit', 'Indicators', 'ionic-comp|Ionic Composition', 'Glycocalyx');
                    ?>

                </div>
                <!--                <div class="modal-footer">-->
                <!--                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>-->
                <!--                </div>-->
            </div>
        </div>

</main>
<script>

</script>

<?php phpFooter(); ?>
</body>

</html>
