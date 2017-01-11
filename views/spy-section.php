<?php

global $tocData;
if (!isset($tocData)) $tocData = array();
$tocData[$id] = $name;

?>

<div id="<?php echo $id; ?>" class="section scrollspy">
    <h5 id="<?php echo $id . 'h' ?>"><?php echo $header; ?></h5>
    <?php
    dynamicBullets($notes);
    ?>
</div>