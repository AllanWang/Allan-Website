<?php

/**
 * Generates valid id based on input
 * @param $item string
 * @return string lower case string with no whitespace
 */
function getId($item)
{
    return strtolower(preg_replace('/\s+/', '-', $item));
}


?>
