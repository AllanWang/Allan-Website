<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
$lecture_date = '2017/01/09';
hook($_SERVER['PHP_SELF'], $lecture_date) ?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br/>
        <h2>Physiology 210</h2>
        <h4>Lecture <?php echo $lecture_number . '&ensp;&bull;&ensp;' . $lecture_date ?></h4>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <?php
                scrollSpySection('endocrine-calcium', 'Endocrine Calcium Control', 'Endocrine control of calcium homeostasis',
                    "Calcium ion is",
                    "-Essential structural component of skeleton",
                    "-Important in normal blood clotting",
                    "-With Na<sup>+</sup> & K<sup>+</sup> helps maintain transmembrane potential of cells",
                    "-Important in excitability of nervous tissue",
                    "-Important in contraction of muscles",
                    "-Important in release of hormones & neurotransmitters",
                    "Concentration in cellular and extracellular fluid – 10mg/100mL",
                    "-Circulation: 50% free, 50% bound to albumin",
                    "-99% of body’s calcium is in bone, part of it is quite loosely bound",
                    "--Bond serves as calcium reservoir",
                    "Hormonal Control",
                    "-Plasma calcium maintained by exchange between bone and plasma under influence of hormones",
                    "-Hormones affect intestinal absorption of calcium and excretion of by kidneys",
                    "Three Important Hormones",
                    "-Parathyroid hormone (PTH) – protein and is produced by parathyroid glands",
                    "--Increases circulating levels of Ca<sup>++</sup>",
                    "-Calcitonin – protein & is produced by parafollicular or “C” cells of thyroid gland",
                    "--Lowers circulation levels of Ca<sup>++</sup>",
                    "-Vitamin D – increases circulating levels of Ca<sup>++</sup>",
                    "-Calcium Cycle",
                    "--Obtained in the diet; milk, cheese, eggs, butter, etc",
                    "--Absorbed from digestive tract primarily in duodenum & upper jejunum",
                    "--Absorption increased by vitamin D & PTH",
                    "-From plasma",
                    "--Some calcium deposited in bone (calcitonin increases calcium deposition in bone) or cells of other tissues",
                    "--Some go through kidney into urine (calcitonin increases this loss)",
                    "--When plasma concentration is below 10mg/100mL, PTH will stimulate reabsorption of calcium from kidney & removal of calcium from bone (bone resorption)",
                    "--Stable concentration in blood achieved mainly by exchange of calcium between bone and plasma under hormonal influence"
                );

                scrollSpySection('parathyroid', 'Parathyroid Hormone', 'Parathyroid Hormone',
                    "-Secreted from parathyroid chief cells embedded in surface of thyroid",
                    "-4 parathyroid glands located on back side of thyroid gland",
                    "-Removal of parathyroids → severe drop in plasma calcium levels causing tetanic convulsions and death",
                    "-Structure",
                    "--84 amino acid polypeptide – only N-terminal 34 amino acids important for full activity",
                    "--Synthesized as part of larger protein, preproparathyroid hormone → undergoes proteolytic cleavage to produce PTH",
                    "--Very short half-life – 3-18min",
                    "-Functions of PTH",
                    "--Increase concentration of plasma calcium",
                    "---Bone resorption – increases bone demineralization – increases Ca<sup>++</sup> in body fluids",
                    "---Kidney – increase reabsorption of Ca<sup>++</sup> in proximal convoluted tubule",
                    "---Vitamin D synthesis – stimulates conversion of 25-hydroxyvitamin D3 to 1,25-dihydroxyvitamin D3 (1,25D3; biologically active form of vitamin D) primarily in kidney",
                    "---Gut: PTH & 1,25D3 facilitate absorption of Ca<sup>++</sup> from gut",
                    "--Control of PTH release",
                    "---Controlled directly by circulating concentration of calcium",
                    "--Mechanism of PTH activity – binds to cognate receptor on target cells exert",
                    "--Very short half-life – 3-18min",
                    "-Functions of PTH",
                    "--Increase concentration of plasma calcium",
                    "---Bone resorption – increases bone demineralization – increases Ca<sup>++</sup> in body fluids",
                    "---Kidney – increase reabsorption of Ca<sup>++</sup> in proximal convoluted tubule",
                    "---Vitamin D synthesis – stimulates conversion of 25-hydroxyvitamin D3 to 1,25-dihydroxyvitamin D3 (1,25D3; biologically active form of vitamin D) primarily in kidney",
                    "---Gut: PTH & 1,25D3 facilitate absorption of Ca<sup>++</sup> from gut",
                    "--Control of PTH release",
                    "---Controlled directly by circulating concentration of calcium",
                    "--Mechanism of PTH activity – binds to cognate receptor on target cells exert"
                );

                pagination();
                ?>
            </div>
            <?php
            tableOfContents(true);
            ?>
            <div id=" keypanel" class="modal bottom-sheet">
                <div class="modal-content">
                    <?php
                    keywordPanel();
                    ?>

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
