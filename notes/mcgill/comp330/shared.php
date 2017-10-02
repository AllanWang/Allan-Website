<?php
//Before other loads; sets common global vars and functions
$minPage = 0;
$maxPage = 1;
$page_number = -1;
global $n_key, $navFrom, $theme_color;
$n_key = "Comp 330";
$navFrom = 'n_comp_330';
$theme_color = "#F44336"; //red

$baseUrl = 'https://allanwang.ca/notes/mcgill/comp330/';

/**
 * Sets config for the page
 * Will add header and other necessary php files
 * @param $phpServer string from server pointing to php file
 */
function hook($phpServer)
{
    global $page_number, $page_title, $page_description, $page_keywords;
    $page_number = basename($phpServer, '.php');
    $page_title = "Comp 330 - $page_number";
    $page_description = "Comp 330 - Fall 2017 - $page_number";
    $page_keywords = ['Comp', 'Computer', 'Computer Science', '330', 'Notes', 'McGill'];
    dynamicNotes();
    phpHeader();
    code_highlight();
}

function headerBullets()
{
    inlineBullets(array("Prof's Email" => "mailto:cs330@cs.mcgill.ca?Subject=Comp%20330",
        "Course Webpage" => "http://crypto.cs.mcgill.ca/~crepeau/COMP330/",
        "Facebook Group" => "https://www.facebook.com/groups/mycomp330/",
        "Textbook" => "https://www.google.ca/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwimtfjpx47WAhUK74MKHXJFBg0QFggoMAA&url=http%3A%2F%2Fgettextbook.download%2FCS%2520181%2FMichael%2520Silpser%2520-%25202013%2520-%2520Introduction%2520to%2520the%2520theory%2520of%2520computation%2520%255B3rd%2520Edition%255D.pdf&usg=AFQjCNFQP4ZXau8z8dDMZBTd4q5iPgFuPw"
    ));
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
