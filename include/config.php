<?php
//For my files

$include_url = "http://allanwang.ca/include/";

include_once ('dynamic_notes.php');

function phpHeader()
{
    require_once('header.php');
}

function phpNav()
{
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

function css($name)
{
    global $include_url;
    echo "<link href=\"${include_url}css/${name}.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>\n";
}

function js($name)
{
    global $include_url;
    echo "<script src=\"${include_url}js/${name}.js\"></script>\n";
}

function mathJax()
{
    echo '<script type="text/javascript" async
        src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML">
    </script>';
}

function code_highlight()
{
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.7.0/styles/github-gist.min.css">';
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

?>
