<?php
//Main php

//Add view functions
include_once('views.php');

function phpHeader($anon_function = '')
{
    if ($anon_function != '') {
        global $header_function;
        $header_function = $anon_function;
    }
    require_once('header.php');
}

function phpNav($extra_contents = '')
{
    if ($extra_contents != '') {
        global $side_nav_contents;
        $side_nav_contents = $extra_contents;
    }
    require_once('nav.php');
}

function phpFooter()
{
    require_once('footer.php');
}

function phpPDF($url)
{
    global $pdf;
    $pdf = $url;
    require_once('pdf.php');
}

function dynamicNotes($key = 'php')
{
    global $dynamic_notes;
    $dynamic_notes = $key;
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

function table_header(...$items)
{
    echo '<tr>';
    foreach ($items as $item) {
        echo "<th>$item</th>";
    }
    echo '</tr>';
}

function table_header_full($item, $colspan)
{
    echo '<tr><th colspan="' . $colspan . '">';
    echo $item;
    echo '</th></tr>';
}

function table(...$items)
{
    echo '<tr>';
    foreach ($items as $item) {
        echo "<td>$item</td>";
    }
    echo '</tr>';
}

function bullets(...$items)
{
    foreach ($items as $item) {
        echo "&ensp;";
        while ($item[0] == '-') {
            echo "&ensp;&ensp;";
            $item = substr($item, 1);
        }
        echo "&ensp;&bull;&ensp;$item<br>";
    }
}

function math_table(...$items)
{
    echo '<tr>';
    foreach ($items as $item) {
        echo "<td>$$ $item $$</td>";
    }
    echo '</tr>';
}

function math_table_left(...$items)
{
    echo '<tr>';
    foreach ($items as $item) {
        echo "<td>\( $item \)</td>";
    }
    echo '</tr>';
}

function rippleColor($hex)
{
    $r = hexdec(substr($hex, 1, 2));
    $g = hexdec(substr($hex, 3, 2));
    $b = hexdec(substr($hex, 5, 2));
    return "rgba($r, $g, $b, 0.2)";
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
