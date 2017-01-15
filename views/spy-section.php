<?php

//add data to content array
global $tocData;
$tocData[$id] = $name;

?>

<div id="<?php echo $id; ?>" class="section scrollspy">
    <?php
    if ($header != null) {
//        if (substr($header, 0, 1) == '<') echo $header;
//        else
            echo '<h5 id="' . $id . 'h">' . $header . '</h5>';
    }
    dynamicBullets($notes);
    ?>
</div>