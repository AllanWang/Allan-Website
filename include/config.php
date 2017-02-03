<?php
//Main php

//Add view functions
global $cssArr; //any php call before the header should append additional css requirements to cssArr; the header will add them all from the /include/css folder
$cssArr = array();
include_once('bullets.php');
include_once('tables.php');
include_once('views.php');
include_once('scrollspy.php');

function phpHeader($anon_function = null)
{
    if ($anon_function !== null) {
        global $header_function;
        $header_function = $anon_function;
    }
    require_once('header.php');
}

function phpNav($extra_contents = null)
{
    if ($extra_contents !== null) {
        global $side_nav_contents;
        $side_nav_contents = $extra_contents;
    }
    require_once('nav.php');
}

function phpFooter($scriptOnly = false)
{
    require_once('footer.php');
}

function phpPDF($pdf)
{
    require_once('pdf.php');
}

function dynamicNotes($key = 'php')
{
    global $dynamic_notes;
    $dynamic_notes = $key;
    global $cssArr;
    array_push($cssArr, "dynamic_notes");
    if ($key == 'php') require_once('dynamic_notes.php');
}

function css($name)
{
    echo "<link href=\"/include/css/${name}.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>\n";
}

function js($name)
{
    echo "<script src=\"/include/js/${name}.js\"></script>\n";
}

function mathJax()
{
    echo '<script type="text/javascript" async
        src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML">
    </script>';
}

function code_highlight()
{
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/github-gist.min.css">';
    echo "\n";
    js('highlight.min');
    echo "<script>hljs.initHighlightingOnLoad();</script>\n";
    include_once('code.php');

}

function json2html()
{
    js('json2html');
    js('jquery.json2html');
}

function rippleColor($hex)
{
    $r = hexdec(substr($hex, 1, 2));
    $g = hexdec(substr($hex, 3, 2));
    $b = hexdec(substr($hex, 5, 2));
    return "rgba($r, $g, $b, 0.2)";
}

function lighterColor($hex, $weight = 0.3)
{
    $r = hexdec(substr($hex, 1, 2));
    $g = hexdec(substr($hex, 3, 2));
    $b = hexdec(substr($hex, 5, 2));
    $r = (1 - $weight) * $r + 255 * $weight;
    $g = (1 - $weight) * $g + 255 * $weight;
    $b = (1 - $weight) * $b + 255 * $weight;
    return '#' . dechex($r) . dechex($g) . dechex($b);
}

function linkNewTab($text, $url)
{
    return '<a href="' . $url . '" target="_blank">' . $text . '</a>';
}

function activeIfScrollTo($id)
{
    echo "id=\"$id\"";
    if (isset($_GET['scroll_to']) && $_GET['scroll_to'] == $id) echo ' active';

}

?>
