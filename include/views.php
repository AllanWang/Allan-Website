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
function appCard($cardTitle, $cardDesc, $cardImage, array $cardPoints, array $cardActions)
{
    include($_SERVER['DOCUMENT_ROOT'] . '/views/app-card.php');
}

function tableOfContents($showCollapse = false)
{
    include($_SERVER['DOCUMENT_ROOT'] . '/views/table-of-contents.php');
}

function banner($image, ...$key_codes)
{
    global $n_key;
    if (!isset($n_key)) $n_key = 'Set n_key please';
    include($_SERVER['DOCUMENT_ROOT'] . '/views/banner.php');
}
