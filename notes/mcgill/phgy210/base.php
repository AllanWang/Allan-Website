<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
$lecture_date = '2017/';
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
