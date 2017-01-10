<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$n_key = "Physiology 210";
$page_title = "$n_key Notes";
$page_description = "$n_key Notes";
$navFrom = 'n_phgy_210';
$theme_color = "#F44336"; //red
dynamicNotes();
phpHeader(); ?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br/>
        <h2>Header</h2>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <div id="water" class="section scrollspy">
                    <h5>Subject</h5>
                    <?php
                    dynamicBullets(

                    );
                    ?>
                </div>
            </div>
            <div class="col hide-on-small-only m3 l2">
                <div class="pinned vertical-center">
                    <div class="switch">
                        <label>
                            Collapse
                            <input id="note-toggle" type="checkbox" onchange="toggleNoteView(this)" checked>
                            <span class="lever"></span>
                            Expand
                        </label>
                    </div>
                    <ul class="section table-of-contents">
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>
            <div id="keypanel" class="modal bottom-sheet">
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
