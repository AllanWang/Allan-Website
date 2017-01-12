<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
$lecture_date = '2017/01/06';
hook($_SERVER['PHP_SELF'], $lecture_date)?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br/>
        <h2>Physiology 210</h2>
        <h4>Lecture <?php echo $lecture_number . '&ensp;&bull;&ensp;' . $lecture_date ?></h4>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">

                <?php
                dynamicBullets('Parathyroid glands help maintaing Ca<sup>++</sup> concentrations with negative feedback loops');

                scrollSpySection('pituitary-gland', 'Pituitary Gland', 'Pituitary Gland',
                    'Two distinctly different tissues',
                    "-Adenohypophysis – aka anterior pituitary, pars distalis",
                    "-Neurohypophysis – aka posterior pituitary, pars nervosa",
                    "--Outgrowth of hypothalamus connected by pituitary stalk",
                    "--Secretes oxytocin & vasopressin (aka ADH – antiduretic hormone)",
                    "--Oxytocin & vasopressin synthesized in two hypothalamic nuclei (supraoptic & paraventricular), whose axons run down the pituitary stalk and terminate in the posterior pituitary close to capillary blood vessels",
                    "--Prohormones processed in secretory granules during axonal transport",
                    "--Mature hormones liberated from carrier molecules neurophysins",
                    "--Circulating half lives – 1-3 minutes",
                    "--Oxytocin – involved in reproductive biology",
                    "---Females",
                    "----Parturition (childbirth) – expresses high levels of receptors for oxytocin at the end of pregnancy",
                    "-----Dilation of uterine cervix by fetal head &rarr; release of oxytocin &rarr; uterine contraction, assisting expulsion of fetus",
                    "----Milk ejection – response to stimulus of suckling; causes milk filled ducts to contract",
                    "----Behavioural effects – local oxytocin release in the brain reduces anxiety and enhances bonding & pro-social behavior",
                    "---Males",
                    "----Ejaculation – surge during sexual activity assists epidydimal passage of sperm and ejaculation",
                    "----Behavioural effects – local oxytocin release in the brain reduces anxiety and enhances bonding & pro-social behavior"


                );

                pagination();

                ?>
            </div>
            <?php
            tableOfContents(true);
            ?>
            <div id="keypanel" class="modal bottom-sheet">
                <div class="modal-content">
                    <?php
                    keywordPanel(

                    );
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
