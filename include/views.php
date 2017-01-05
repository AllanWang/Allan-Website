<?php

include_once('views_helpers.php');

/**
 * Creates App Card that will take up half a row
 * @param $cardTitle
 * @param $cardDesc
 * @param $cardImage string image in images/ folder
 * @param $cardPoints array of points (Strings)
 * @param $cardActions array of linkNames => links
 */
function appCard($cardTitle, $cardDesc, $cardImage, $cardPoints, $cardActions)
{
    include('../views/app-card.php');
}
?>
