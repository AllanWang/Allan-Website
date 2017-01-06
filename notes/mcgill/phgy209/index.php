<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$n_key = "Physiology";
$page_title = "$n_key Notes";
$page_description = "$n_key Notes";
$navFrom = 'n_phgy_209';
$theme_color = "#F44336"; //red
dynamicNotes();
phpHeader(); ?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br>
        <h2>Physiology 209</h2>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <div id="water" class="section scrollspy">
                    <h5>H<sub>2</sub>O</h5>
                    <?php
                    dynamicBullets("45% - 75%", "Key solvent; where metabolic reactions take place",
                        "Variation by {body-composition|body composition}",
                        "-#" . bulletTable("Skin", "70%"),
                        "-#" . bulletTable("Muscle", "75%"),
                        "-#" . bulletTable("Organs - Heart, liver, brain, kidney", "70-80%"),
                        "-#" . bulletTable("Fat (adipose tissue)", "10%"),
                        "Water & solid content are about the same in everyone, but the water percentage varies due to the varying fat mass",
                        "#Variation with age and gender",
                        "-#" . bulletTable("Baby", "75%"),
                        "-#" . bulletTable("Female : Male (body fat variation)", "50% : 60%"),
                        "-#" . bulletTable("Seniors Female : Male", "45% : 50%"),
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
                        "---#Coalesce to form larger lymphatic vessels &rarr; converge to large lymphatic ducts which drain into large veins in chest",
                        "--#1 – 2% of ECF",
                        "-Transcellular fluid",
                        "--#Aggregate of small fluid volumes secreted by specific cells into a number of body cavities (lined by epithelial cells) & having specialized functions",
                        "--#<1 – 2% of ECF",
                        "--#Intraocular, cochlear, cerebrospinal, pleural & pericardial, peritoneal, synovial, fluid in ducts of glands, bladder, etc",
                        "--#Does not affect body fluid balance; very local; however, has important functions",
                        "{water-numbers|Number recap}: Total H<sub>2</sub>O 60%, ICF 40%, ECF 20%, ISF 15%, Plasma 5% (of total body weight)",
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
                        "#" . bulletTable("Amount (mass) of solute", "1g% = 1g solute in 1dL of water"),
                        "#" . bulletTable("Number of solute molecules", "1mol = gram molecular weight/1L of H<sub>2</sub>O"),
                        "#Molality (m) – number of moles of solute dissolved in 1Kg solvent",
                        "#Molarity (M) – amount of solute in specific amount of solution",
                        "#" . bulletTable("Number of reactive units", "Eq = molarity of ion * valency (ie Na<sup>+</sup> 1Eq/mol, Ca<sup>2+</sup> 2Eq/mol")
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

                <div id="transmembrane-transport-pathways" class="section scrollspy">
                    <h5>Transmembrane Transport Pathways</h5>
                    <?php
                    dynamicBullets(
                        "Via phospholipid bilayer",
                        "Via interaction with protein cluster (channel/carrier)",
                        "Factors – lipid solubility, particle size, electrical charge, available & number of carriers/ion channels",
                        bulletTable("Passive – energy independent", "Active – energy dependent")
                    );
                    ?>
                </div>
                <div id="diffusion" class="section scrollspy">
                    <h5>Diffusion</h5>
                    <?php
                    dynamicBullets(
                        "Resulting from random thermal molecular motion",
                        "Net flux = high &rarr; low concentration",
                        "If permeable, can go through membrane",
                        "J = PA(C<sub>0</sub> – C<sub>i</sub>)",
                        "-J – net flux across membrane",
                        "-P – permeability/diffusion coefficient of membrane",
                        "-A – surface area of membrane",
                        "-C0 – Ci – concentration gradient of diffusing molecule",
                        "-Diffusion time increases in proportion to the square of the distance",
                        "Dissolve through lipid components for non-polar molecules and through channels for ions"
                    );
                    ?>
                </div>
                <div id="ion-channels" class="section scrollspy">
                    <h5>Ion Channels</h5>
                    <?php
                    dynamicBullets(
                        "Consist of single protein or clusters of proteins",
                        "Show selectivity based on diameter & distribution of charges",
                        "Movement affected by electrochemical (electrical & concentration) gradient",
                        "Ligand-gated, voltage-gated, mechanically-gated",
                        "Channels: Na<sup>+</sup>, K<sup>+</sup>, Ca<sup>+</sup>, Cl<sup>-</sup>",
                        "Number of ions flowing through channels generating ionic current depends on",
                        "-Channel conductance",
                        "-How often channel opens",
                        "-How long channel stays open"
                    );
                    ?>
                </div>
                <div id="carrier-mediated-transport" class="section scrollspy">
                    <h5>Carrier-mediated Transport</h5>
                    <?php
                    dynamicBullets(
                        "Specificity – usually transports one type of molecule only",
                        "Saturation – rate of transport reaches maximum when all binding sites on all transporters are occupied; limit – transport maximum (Tm) exists",
                        "Competition – structurally similar substances compete for same binding site on carrier",
                        "Facilitated diffusion – carrier enables solute to penetrate more readily – passive",
                        "-Solute binds to carrier &rarr; changes carrier configuration &rarr; solute is delivered to other side of membrane &rarr; carrier resumes original configuration",
                        "-Ie for glucose, insulin increases number of transporters",
                        "Active transport",
                        "-Requires chemical energy (usually ATP)",
                        "-Susceptible to metabolic inhibitors",
                        "-Can transport against concentration gradient",
                        "-Primary active transport",
                        "--Chemical energy transferred directly from ATP",
                        "--Phosphorylation of transporter changes conformation & affinity of binding site",
                        "--Ie sodium potassium pump – 3Na<sup>+</sup> out, 2K<sup>+</sup> in",
                        "-osmosis",
                        "Active – energy dependent – carrier-mediated active transport (primary & secondary), pino/phagocytosis",
                        "Sodium potassium pump",
                        "-Phosphorylation of pump &rarr; change in conformation &rarr; affinity for Na<sup>+</sup> decreases",
                        "Other active transporter proteins – Ca-ATPase, H-ATPase, H/K ATPase",
                        "Secondary Active Transport – relies on electrochemical gradient to bring along another solute",
                        "-Ie glucose transported with Na<sup>+</sup>",
                        "-Cotransport – both solutes move in the same direction",
                        "--Na<sup>+</sup>/glucose, Na<sup>+</sup>/amino acids",
                        "-Countertransport – solutes move in different directions",
                        "--Na<sup>+</sup>/Ca<sup>+</sup>, Na<sup>+</sup>/H+, Cl<sup>-</sup>/HCO<sub>3</sub><sup>-</sup>",
                        "Endocytosis – cell membrane invaginates, forming channel, pinching off to form vesicle",
                        "-Pinocytosis (Fluid endocytosis) – ingestion of dissolved materials, liquid contents slowly transferred to the cytosol – not selective",
                        "-Phagocytosis – ingestion of solid particles, particles pinched into phagocytic vacuole (phagosome) – fuses with lysosomes and then degraded",
                        "-Receptor-mediated",
                        "--Clathrin-dependent receptor-mediated endocytosis",
                        "--Potocytosis",
                        "Exocytosis – diffusion of vesicle, releasing content in ECF"
                    );
                    ?>
                </div>
                <div id="osmosis" class="section scrollspy">
                    <h5>Osmosis – diffusion of water</h5>
                    <?php
                    dynamicBullets(
                        "Water diffuses freely across most cell membranes",
                        "Aquaporins – groups of proteins facilitating osmosis – forms water permeable channels",
                        "Osmosis – net movement of H2O across semipermeable membrane",
                        "Osmotic pressure – pressure required to oppose the movement of water across a semipermeable membrane",
                        "Osmolarity – total solute concentration of solute – 1 osmol = 1 mol of solute",
                        "-1 mol glucose = 1 osmol	1 mol NaCl = 2 osmol",
                        "Osm = osmol/liter",
                        "Ie saline drip – 0.9% saline = 0.15 NaCl = 300mOsm = same mOsm of body<br>6.7 atm = 5100 mmHg",
                        "Isosmotic – solutions with same number of osmotically active particles",
                        "Hypoosmotic – solutions with lower number of osmotically active particles",
                        "Hyperosmotic – solutions with higher number of osmotically active particles",
                        "Only nonpenetrating particles can exert osmotic pressure",
                        "-Extracellular Na<sup>+</sup> is nonpenetrating as it is pumped out after moving in",
                        "Isotonic – cell retains size",
                        "Hypotonic – cell swells",
                        "Hypertonic – cell shrinks"
                    );
                    ?>
                </div>
                <div id="capillaries" class="section scrollspy">
                    <h5>Capillaries</h5>
                    <?php
                    dynamicBullets(
                        "Single layer of flattened endothelial cells & supporting basement membrane",
                        "Diffusion through water filled channels & across cell membranes",
                        "Pinocytosis/exocytosis – endocytosis & vesicle formation on luminal side &rarr; exocytosis & vesicle release on interstitial side",
                        "Bulk flow – flow of molecules due to pressure difference (ultra filtration)",
                        "Filtration – bulk flow across porous membrane (acts like sieve) withholding some particles"
                    );
                    ?>
                </div>
                <div id="blood" class="section scrollspy">
                    <h5>Blood</h5>
                    <?php
                    dynamicBullets(
                        "Transport – nutritive, respiratory, excretory, hormone transport, temperature regulation",
                        "Acid-base balance – normal pH range 7.30-7.45",
                        "Protective",
                        "Contains both ECF (plasma) & ICF (inside blood cells)",
                        "May be studied in vivo & in vitro",
                        "Accounts for ~7% of body mass = ~5L",
                        "Normovolemia – normal blood volume",
                        "Hypovolemia – lower blood volume",
                        "Hypervolemia – higher blood volume",
                        "Centrifuged blood – 55% plasma (yellow), ~0% buffy layer (WBCs, platelets), 45% RBCs",
                        "Hematocrit"
                    );
                    ?>
                </div>
                <div id="plasma" class="section scrollspy">
                    <h5>Plasma</h5>
                    <?php
                    dynamicBullets(
                        "Similar to ISF",
                        "> 90% water",
                        bulletTable("-0.9g/dl NaCl&ensp;Na<sup>+</sup>, K<sup>+</sup>, (Ca<sup>++</sup>, Mg<sup>++</sup>)", "Cl<sup>-</sup>, HCO<sub>3</sub><sup>-</sup>, (PO<sub>4</sub><sup>--</sup>"),
                        "Glucose, amino acids, lipids, O<sub>2</sub>, CO<sub>2</sub>"
                    );
                    ?>
                </div>
                <div id="plasma-proteins" class="section scrollspy">
                    <h5>Plasma Proteins (Colloids)</h5>
                    <?php
                    dynamicBullets(
                        "(unlike ISF) Proteins (colloids) = 7g% - albumins, globulins, fibrinogen",
                        "-Separating plasma proteins",
                        "--Differential precipitation by salts",
                        "--Sedimentation in ultracentrifuge",
                        "--Electrophoretic mobility",
                        "--Immunological characteristics",
                        "Electrophoresis – fraction method based on movement of charged particles along voltage gradient",
                        "-Influenced by number, distribution of charges, & MW of each protein",
                        "-Stained and scanned – area under graph peaks shows amount",
                        "-In renal disease – albumin (big left peak) gets significantly smaller",
                        "-In bacterial infection – &gamma; globulins increases due to presence of antibodies",
                        "Majority produced in liver",
                        "-Albumin, fibrinogen, &alpha;<sub>1</sub>, &alpha;<sub>2</sub>, &beta; globulins",
                        "&gamma; globulins produced in lymphoid tissue"
                    );
                    ?>

                    <!--

                <div id="" class="section scrollspy">
                    <h5></h5>
                    <?php
                    //dynamicBullets( );
                    ?>
                </div>

                -->
                </div>
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
                        <li><a href="#transmembrane-transport-pathways">Transmembrane Transport Pathways</a></li>
                        <li><a href="#diffusion">Diffusion</a></li>
                        <li><a href="#ion-channels">Ion Channels</a></li>
                        <li><a href="#carrier-mediated-transport">Carrier-mediated Transport</a></li>
                        <li><a href="#osmosis">Osmosis</a></li>
                        <li><a href="#capillaries">Capillaries</a></li>
                        <li><a href="#blood">Blood</a></li>
                        <li><a href="#plasma">Plasma</a></li>
                        <li><a href="#plasma-proteins">Plasma Proteins</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>
            <div id="keypanel" class="modal bottom-sheet">
                <div class="modal-content">
                    <?php
                    keywordPanel('Body Composition', 'obl-fac|Obligatory/Facultative Loss', 'Water Balance', 'icfh|ICF', 'ecfh|ECF', 'Plasma', 'ISF', 'Lymph', 'water-numbers|Water Percentages', 'Hematocrit', 'Indicators', 'ionic-comp|Ionic Composition', 'Glycocalyx');
                    ?>

                </div>
                <!--                <div class="modal-footer">-->
                <!--                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>-->
                <!--                </div>-->
            </div>
        </div>
    </div>

</main>
<script>

</script>

<?php phpFooter(); ?>
</body>

</html>
