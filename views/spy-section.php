<?php

//add data to content array
global $tocData;
$tocData[$id] = $name;

?>

<div id="<?php echo $id; ?>" class="section scrollspy">
    <h5 id="<?php echo $id . 'h' ?>"><?php echo $header; ?></h5>
    <?php
    dynamicBullets($notes);
    ?>
</div>