<?php

global $lectureNoteContents;
if (!isset($lectureNoteContents)) $lectureNoteContents = array();
array_push($lectureNoteContents, $number);

?>

<div id="lecture-<?php echo $number ?>" class="section scrollspy">
    <h5>Lecture <?php echo $number;
        if (isset($date)) {
            echo '&ensp;&bull;&ensp;' . $date;
        } ?></h5>
    <?php
    dynamicBullets($notes);
    ?>
</div>