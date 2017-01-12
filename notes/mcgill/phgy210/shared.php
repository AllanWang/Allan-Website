<?php
//Before other loads; sets common global vars and functions
$minLecture = 1;
$maxLecture = 2;
$lecture_number=0;
global $n_key, $navFrom, $theme_color;
$n_key = "Physiology 210";
$navFrom = 'n_phgy_210';
$theme_color = "#F44336"; //red

$baseUrl = 'http://allanwang.ca/notes/mcgill/phgy210/';

/**
 * Sets config for the page
 * Will add header and other necessary php files
 * @param $phpServer string from server pointing to php file
 * @param $date string representing lecture date
 */
function hook($phpServer, $date) {
    global $lecture_number, $page_title, $page_description;
    $lecture_number = basename($phpServer, '.php');
    $page_title = "Phgy 210 Lec $lecture_number";
    $page_description = "Physiology 210 Notes - Lecture $date - $lecture_number";
    dynamicNotes();
    phpHeader();
}

function getLecture($number)
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
        global $minLecture;
        if ($minLecture >= $current) {
            $class = 'disabled';
            $url = '#';
        } else {
            $class = 'waves-effect';
            $url = getLecture($current - 1);
        }
    } else {
        $chevron = 'chevron_right';
        global $maxLecture;
        if ($maxLecture <= $current) {
            $class = 'disabled';
            $url = '#';
        } else {
            $class = 'waves-effect';
            $url = getLecture($current + 1);
        }
    }
    echo "<li class=\"$class\"><a href=\"$url\"><i class=\"material-icons\">$chevron</i></a></li>";
}

function number($number, $current)
{
    $class = ($number == $current) ? 'active' : 'waves-effect';
    $url = getLecture($number);
    echo "<li class=\"$class\"><a href=\"$url\">$number</a></li>";
}

function pagination()
{
    global $minLecture, $maxLecture, $lecture_number;

    echo '<ul class="pagination">';
    chevron(true, $lecture_number);
    foreach (range($minLecture, $maxLecture) as $lecture) {
        number($lecture, $lecture_number);
    }
    chevron(false, $lecture_number);
}

?>
