<?php
//Before other loads; sets common global vars and functions
$minPage = 0;
$maxPage = 4;
$page_number = -1;
global $n_key, $navFrom, $theme_color;
$n_key = "Comp 273";
$navFrom = 'n_comp_273';
$theme_color = "#F44336"; //red

$baseUrl = 'https://allanwang.ca/notes/mcgill/comp273/';

/**
 * Sets config for the page
 * Will add header and other necessary php files
 * @param $phpServer string from server pointing to php file
 */
function hook($phpServer)
{
    global $page_number, $page_title, $page_description, $page_keywords;
    $page_number = basename($phpServer, '.php');
    $page_title = "Comp 273 - $page_number";
    $page_description = "Comp 273 - Winter 2017 - $page_number";
    $page_keywords = ['Comp', 'Computer', 'Computer Science', '273', 'Notes', 'McGill'];
    dynamicNotes();
    phpHeader();
}

function getPage($number)
{
    global $baseUrl;
    return $baseUrl . $number . '.php';
}

function chevron($isLeft, $current)
{
    $chevron = null;
    $class = null;
    $url = null;
    if ($isLeft) {
        $chevron = 'chevron_left';
        global $minPage;
        if ($minPage >= $current) {
            $class = 'disabled';
            $url = '#" onclick="return false;';
        } else {
            $class = 'waves-effect';
            $url = getPage($current - 1);
        }
    } else {
        $chevron = 'chevron_right';
        global $maxPage;
        if ($maxPage <= $current) {
            $class = 'disabled';
            $url = '#" onclick="return false;';
        } else {
            $class = 'waves-effect';
            $url = getPage($current + 1);
        }
    }
    echo "<li class=\"$class\"><a href=\"$url\"><i class=\"material-icons\">$chevron</i></a></li>";
}

function number($number, $current)
{
    $class = ($number == $current) ? 'active' : 'waves-effect';
    $url = getPage($number);
    echo "<li class=\"$class\"><a href=\"$url\">$number</a></li>";
}

function pagination()
{
    global $minPage, $maxPage, $page_number;

    echo '<ul id="pagination" class="pagination">';
    chevron(true, $page_number);
    foreach (range($minPage, $maxPage) as $page) {
        number($page, $page_number);
    }
    chevron(false, $page_number);
}

?>
