<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');

hook($_SERVER['PHP_SELF'], '2017/01/04')?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br/>
        <h2>Physiology 210</h2>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <?php
                lectureSection(1, '2017/01/04',
                    "#Endocrine – long distance",
                    "#Paracrine – short distance, ie neighbouring cell",
                    "#Autocrine – self, eg growth factor",
                    "Endocrine signaling",
                    "-Hormone secretion into blood by endocrine gland &rarr; transported to distant site",
                    "{com-b-h|Communication by hormones} (or neurohormones)",
                    "-Synthesis by endocrine cells",
                    "-Release by endocrine cells",
                    "-Transport by blood stream",
                    "-Detection by specific receptor protein on target cells",
                    "-Change in cellular metabolism by hormone-receptor interactions",
                    "-Removal of hormone – terminates cellular response",
                    "Hypothalamic-Pituitary Signaling",
                    "-via blood vessels of pituitary stalk",
                    "-Hypothalamic-Hypophyseal Portal System - hypothalamus to adenohypophysis (anterior pituitary)",
                    "-Hypothalamic neurohormones activate/inhibit activity of one of six types of hormone-producing cells in anterior pituitary",
                    "-#Called releasing hormones (releasing factors) or inhibiting hormones (inhibiting factors)",
                    "Hormones have different types of structures",
                    "-#Peptides | Proteins &rarr; Glyco | Poly",
                    "-Glycoproteins/polypeptides &rarr; must have gene that encodes that hormone",
                    "-Steroids/Amines do not have genes that encode them",
                    "--#Do have genes that encode enzymes for synthesis of those molecules",
                    "-Ionic calcium – exists a calcium sensing receptor",
                    "Synthesis of protein hormones",
                    "-#Transcription of rna from gene",
                    "-#Protein produced is inserted into endoplasmic reticulum",
                    "-#Proteins are transformed from N terminus to C terminus",
                    "--#Preprosequence – additional sequence on N terminus ",
                    "---#Not in biologically active hormone",
                    "---#Present in primary translation product of that hormone",
                    "---#Represent molecular barcodes that direct protein to secretory system",
                    "---#Cleaved off during secretory process (no longer present in mature hormone)",
                    "---#For glycoproteins, oligosaccharide component is added during trip through endoplasmic reticulum in golgi to primary translation product",
                    "Structures of some steroid hormones",
                    "-Cortisol/Aldosterone#{ – similar structures, different physiology}",
                    "-Testosterone#{ – has very important methyl group that stops it from becoming estradiol}",
                    "-Estradiol – has an aromatic ring",
                    "--Essential for bone physiology",
                    "--Women get it from ovaries",
                    "--Men get it from local conversion of testosterone",
                    "---#Has enzyme that burns the methyl group off",
                    "Thyroid hormones",
                    "-Not steroids, derived from tyrosine, contain iodine",
                    "Properties of hormone receptors",
                    "-Specificity – recognition of single hormone or hormone family",
                    "-Affinity – binding hormone at its physiological concentration",
                    "--#If concentrations are hugely different, system would be always on/off, not physiological",
                    "-#Should show saturability and have a measurable biological response",
                    "Receptor regulation",
                    "-Upregulation – increase activity in response to hormone or synthesis",
                    "-Downregulated – decreasing activity or synthesis",
                    "Hormones can exert effects on target cells",
                    "-Direct effects on function at cell membrane",
                    "-Intracellular effects mediated by second messenger systems",
                    "-Intracellular effects mediated by genomic or nuclear action",
                    "--#Eg steroid hormone – hormone binds to receptor in cytoplasm &rarr; transcription in nucleus &rarr; protein synthesis &rarr; altered functional response"
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
                    keywordPanel('com-b-h|Communication by hormones');
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
