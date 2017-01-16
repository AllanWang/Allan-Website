<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$n_key = "Biochemistry 212";
$page_title = "$n_key Notes";
$page_description = "$n_key Notes";
$navFrom = 'n_bioc_212';
$theme_color = "#F44336"; //red
dynamicNotes();
phpHeader(); ?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br/>
        <h2>Biochemistry 212</h2>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <div id="summary">
                    <div id="structures"></div>
                </div>
            </div>
            <div class="col hide-on-small-only m3 l2">
                <?php
                tableOfContents();
                ?>
            </div>
        </div>
    </div>

</main>
<script>

</script>

<?php phpFooter(); ?>
</body>

</html>
