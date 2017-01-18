<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
$lecture_date = '2017/01/06';
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
                dynamicBullets('#Parathyroid glands help maintaing Ca<sup>++</sup> concentrations with negative feedback loops');

                scrollSpySection('pituitary-gland', 'Pituitary Gland', 'Pituitary Gland',
                    'Two distinctly different tissues',
                    "-{adenohypophysis|Adenohypophysis} – aka anterior pituitary, pars distalis",
                    "-Neurohypophysis – aka posterior pituitary, pars nervosa",
                    "--Outgrowth of hypothalamus connected by pituitary stalk",
                    "--Secretes oxytocin & vasopressin (aka ADH – antiduretic hormone)",
                    "--Oxytocin & vasopressin synthesized in two hypothalamic nuclei (supraoptic & paraventricular), whose axons run down the pituitary stalk and terminate in the posterior pituitary close to capillary blood vessels",
                    "--Prohormones processed in secretory granules during axonal transport",
                    "--Mature hormones liberated from carrier molecules neurophysins",
                    "--Circulating half lives – 1-3 minutes",
                    "--{oxytocin|Oxytocin} – involved in reproductive biology",
                    "---Females",
                    "----Parturition (childbirth) – expresses high levels of receptors for oxytocin at the end of pregnancy",
                    "-----Dilation of uterine cervix by fetal head &rarr; release of oxytocin &rarr; uterine contraction, assisting expulsion of fetus",
                    "----Milk ejection – response to stimulus of suckling; causes milk filled ducts to contract",
                    "----Behavioural effects – local oxytocin release in the brain reduces anxiety and enhances bonding & pro-social behavior",
                    "---Males",
                    "----Ejaculation – surge during sexual activity assists epidydimal passage of sperm and ejaculation",
                    "----Behavioural effects – local oxytocin release in the brain reduces anxiety and enhances bonding & pro-social behavior"
                );

                scrollSpySection('thyroid-gland', 'Thyroid Gland', 'Thyroid Gland',
                    "Colloid – major component is thyroglobulin – large protein of 700000Da",
                    "Source of thyroid hormones thyroxine (T4) & triiodothyronine (T3)",
                    "T4 & T3 are split off thyroglobulin and enter blood where they bind to special plasma proteins",
                    "Synthesis of thyroglobulin under control of TSH (thyroid stimulating hormone) of pituitary gland",
                    "Thyroglobulin provides type of storage for T4 & T3 prior to release",
                    "15 to 20g, varies size with sex, age, diet, reproductive state, etc",
                    "Larger in females than males",
                    "Only 3g of healthy thyroid needed to maintain euthyroid state",
                    "Thyroid hormones contain iodine",
                    "-Iodine availability is limited in terrestrial vertebrates",
                    "-Cellular mechanisms developed for concentration, utilization and conservation of iodine in thyroid gland",
                    "-Thyroid follicular cells are able to trap iodide and transport it across cell against chemical gradient (active transport)",
                    "Synthesis of thyroid hormones",
                    "-Iodine (I2) used for iodination of tyrosine residues of thyroglobulin (TGB) to form monoiodotyrosine (MIT) and diiodotyrosine (DIT)",
                    "-Oxidative coupling of two DIT &rarr; thyroxine (T4)",
                    "-Oxidative coupling of one MIT with one DIT &rarr; triiodothyronine (T3)",
                    "-Hormones are stored lined to thyroglobulin",
                    "-Rate of all steps of T4 & T3 formation increased by TSH",
                    "Control of thyroid activity",
                    "-Without TSH, thyroid has low turnover of thyroid hormones",
                    "-Synthesis & release of TSH controlled by hypothalamic thyrotropin releasing hormone (TRH)",
                    "-When T4 & T3 in blood increase, they exert negative feedback at both hypothalamic & pituitary levels to decrease release of TRH & TSH",
                    "-TSH interacts with specific receptors located on follicular cells, leading to increased production of T4 & T3",
                    "Iodine deficiency",
                    "-Deficient iodide &rarr; synthesis of thyroid hormones decreases &rarr; circulating T4 & T3 decreases &rarr; release of TSH increases &rarr; thyroid follicular cells constantly stimulated &rarr; thyroid enlarges and may form visible lump, a goiter",
                    "-Enlarged thyroid is unable to synthesize biological active thyroid hormones due to iodine deficiency, hence known as non-toxic goiter",
                    "Radioactive iodine is used to treat thyroid cancer",
                    "Stable iodine (127I) is used to protect gland from radioactive iodine isotopes (131, 126, 123, etc)"
                );

                scrollSpySection('th-effects', 'Thyroid Hormone Effects', 'Effects of Thyroid Hormones',
                    "Calorigenesis stimulation – increase cardia output (rate & strength of contractions), increase oxygenation of blood, increase rate of breathing & number of RBC in circulation",
                    "Carbohydrate metabolism – promote glycogen formation in liver; increase glucose uptake into adipose & muscle",
                    "Lipid turnover – increase lipid synthesis, increase lipid mobilization increase lipid oxidation",
                    "Protein metabolism – stimulate protein synthesis",
                    "Normal growth – promote neural branching & myelinization of nerves, stimulate growth hormone (GH) secretion, promote bone growth, promote IGF-I production by liver, promote development & maturation of nervous system",
                    "Protein metabolism – stimulate protein synthesis",
                    "Effects of thyroid hormones on basal metabolic rate",
                    "-Increased calorigenesis of basalmetabolic rate (BMR)",
                    "--T4 & T3 increase BMR and the breakdown of carbohydrates, lipids, and proteins; increase in metabolic activity increases need of oxygen",
                    "-Effect of thyroid hormones on growth – cooperate with growth hormone to effectively stimulate growth",
                    "-Effect of thyroid hormone on CNS – required for normal development of brain",
                    "--Absence of thyroid hormones in brain &rarr; decreased neuronal development",
                    "--Absence of thyroid hormones at early stages of development &rarr; irreversible mental retardation",
                    "--Stimulates synthesis of nerve growth factor (NGF), which induces dendritogenesis & regeneration of sympathetic neurons"
                );

                scrollSpySection('thyroid-mechanism', 'Thyroid Hormone Mechanism', 'Molecular Mechanism of Action of Thyroid Hormone',
                    "Analogous to mechanisms of action of steroid hormones. T3 & T4 enter target cell nucleus, bind to cognate nuclear receptor. Alters transcription of specific genes, thus levels of encoded proteins",
                    "Hormones may induce effects by interactions with plasma membrane & mitochondria. Specific receptor for T4/T3 located in inner mitochondrial membrane.",
                    "Not blocked by inhibitors of protein synthesis; ie de novo gene expression & protein synthesis not necessary",
                    "T4/T3 act directly at plasma membrane & increase update of amino acids. Independent of protein synthesis",
                    "Abnormalities of thyroid function",
                    "-Not enough – hypofunction of thyroid gland known as hypothyroidism – low levels of thyroid hormones",
                    "-Too much – hyperfunction of thyroid gland known as hyperthyroidism – high levels of thyroid hormones",
                    "-Abnormalities may be present at birth or occur later in life (more common)"
                );


                scrollSpySection('hypothyroidism', 'Hypothyroidism', 'Hypothyroidism',
                    "Primary hypothyroidism (Myxedema) – thyroid level",
                    "-Inability to synthesize active thyroid hormones",
                    "-More common in women than in men; appears at ~40-60 years of age",
                    "-Causes",
                    "--Atrophy of thyroid",
                    "--Autoimmune Thyroiditis – destruction by antibodies against cellular components",
                    "--Goitrous hypothyroidism/non-toxic goiter – blockage in step of T4/T3 synthesis",
                    "Secondary hypothyroidism – pituitary level",
                    "-Synthesis of little or no thyroid stimulating hormone (TSH)",
                    "Tertiary hypothyroidism – hypothalamus level",
                    "-Synthesis of little or no thyrotropin releasing hormone (TRH)",
                    "Infantile hypothyroidism",
                    "-Absence of thyroid gland or incomplete development of thyroid gland at birth",
                    "-At birth, infant is normal since fetus uses mother’s T4/T3",
                    "-Months later, child exhibits decreased physical growth & mental development",
                    "-Early treatment necessary, otherwise growth retardation (dwarfism) and mental retardation associated with cretinism may occur",
                    "-Treatment – many by administration of thyroid hormones "
                );

                scrollSpySection('hyperthyroidism', 'Hyperthyroidism', 'Hyperthyroidism',
                    "Primary hyperthyroidism – level of thyroid gland",
                    "-Toxic diffuse goiter (Graves Disease; most common)",
                    "--Autoimmune disease characterized by presence of substance produced by lymphocytes called Long Acting Thyroid Stimulator (LATS), immunoglobulin that mimics action of TSH and stimulating release of T3 & T4",
                    "--Constant stimulation by LATS &rarr; increase in thyroid mass &rarr; formation of goiter synthesizing biologically active T4/T3, known as toxic goiter",
                    "-Thyroid adenoma or thyroid cancer – synthesis of thyroid hormones independent of TSH stimulation",
                    "Secondary hyperthyroidism – pituitary gland",
                    "-No negative feedback from increased levels of T3/T4 & synthesized autonomously thyroid stimulating hormone (TSH) – often due to presence of pituitary tumor",
                    "Tertiary hyperthyroidism – hypothalamus",
                    "-No negative feedback of high T3/T4 to decrease synthesis of thyrotropin releasing hormone (TRH) – often due to presence of hypothalamic tumor",
                    "Treatment",
                    "-Depends on severity",
                    "-Surgery + replacement therapy (administration of thyroid hormones)",
                    "-Administration of radioactive Iodide (131I) about 5mCi (millicurie) Radioactive iodide concentrates in cells of thyroid follicles and destroys them. Replacement therapy may be administered as needed.",
                    "-Administration of antithyroid drugs such as propylthiouracil (blocks addition of iodine to thyroglobulin). Must not inhibit synthesis of thyroid hormones to great extent and cause hypothyroidism."
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
                    keywordPanel('adenohypophysis|Adeno/Neurohypophysis', 'Oxytocin');
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
