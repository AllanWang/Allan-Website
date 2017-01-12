<?php

//add data to content array
global $tocData;
$tocData[$id] = $name;

?>

<div id="<?php echo $id; ?>" class="section scrollspy">
    <?php
    if ($header != null) echo '<h5 id="' . $id . 'h">' . $header . '</h5>';
    dynamicBullets($notes);
    ?>
</div>