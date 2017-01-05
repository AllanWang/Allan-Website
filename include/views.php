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




function banner($image, ...$key_codes)
{
    global $n_key;
    if (!isset($n_key)) $n_key = 'Set n_key please';
    echo '<div id="index-banner" class="parallax-container"><div class="section no-pad-bot"><div class="container"><br><br>';
    echo '<h1 class="header center white-text text-lighten-2 pad-top-20">' . $n_key . '</h1>';
    echo '<div class="row center"><h5 class="header col s12 light white-text">';
    $first = true;
    foreach ($key_codes as $key_code) {
        if (!$first) echo ' &bull; ';
        $first = false;
        echo $key_code;
    }
    echo '</div><br><br></div></div>';
    echo '<div class="parallax blur-darken" ><img src="images/' . $image . '" alt="' . $n_key . ' Header"></div></div>';
}
?>
