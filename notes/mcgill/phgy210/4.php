<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
$lecture_date = '2017/01/11';
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
                scrollSpySection(
                    'adrenal-cortex', 'Adrenal Cortex', 'Pathophysiology of Adrenal Cortex',
                    "Addison's Disease – Hypofunction",
                    "-Failure of adrenal cortex to produce adrenocortical hormones",
                    "-May involve total destruction of gland",
                    "-Mostly due to atrophy of adrenal glands due to tuberculosis and involves medulla & cortex",
                    "-Glucocorticoid deficiency",
                    "--&darr; Blood sugar (particularly between meals)",
                    "--&darr; Lipolysis",
                    "--&darr; Gluconeogenesis",
                    "--Lack of energy, muscular weakness, inability to take stress",
                    "--Treatment – cortisol &rarr; carbohydrate metabolism",
                    "-Mineralocorticoid deficiency",
                    "--Plasma: &darr; Na<sup>+</sup> Hyponatremia, &darr; Cl<sup>-</sup>, &darr; H<sub>2</sub>O",
                    "---Lost in urine: &darr; Extracellular fluid, &darr; Plasma volume, &darr; Cardiac output",
                    "----&uarr; K<sup>+</sup> Hyperkalemia, &uarr; H<sup>+</sup> Acidosis, Reabsorbed from urine",
                    "--Patient dies in shock 7 days after complete absence of mineralocorticoids",
                    "--Treatment – control electrolyte blood levels",
                    "Cushing's Disease – Hyperfunction",
                    "-Hyperplasia of adrenal cortex due to &uarr; circulating levels of ACTH (overproduction by pituitary)",
                    "-excessive production of glucocorticoids & increased production of mineralocorticoids",
                    "-Glucocorticoid increase",
                    "--&uarr; Blood glucose (Adrenal diabetes)",
                    "--&uarr; Insulin secretion<br>if prolonged, &beta;-cells 'burn out'<br>Frank Diabetes Mellitus (permanent)",
                    "--&darr; Protein synthesis",
                    "--&uarr; Protein breakdown",
                    "--Osteoporosis – loss of protein & Ca<sup>++</sup> from bone",
                    "-Mineralocorticoid increase",
                    "--Plasma: &uarr; Na<sup>+</sup> Hypernatremia, &uarr; Cl<sup>-</sup>, &uarr; H<sub>2</sub>O",
                    "---Reabsorbed from urine: &uarr; Extracellular fluid, &uarr; Plasma volume, Hypertension",
                    "----&darr; K<sup>+</sup> Hypokalemia, &darr; H<sup>+</sup> Alkalosis, Lost in urine",
                    "-&uarr; Sex hormones, &uarr; Androgens &rarr; Masculinization",
                    "-Diagnosis",
                    "--Puffiness of face – &uarr; Blood glucose",
                    "--Masculinzation – &uarr; Steroid metabolites",
                    "--Hypertension – in urine",
                    "-Treatment – Surgery: subtotal removal of adrenal cortex"
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
