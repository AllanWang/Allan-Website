<?php

//For my files

$include_url = "http://allanwang.ca/include/";

function phpHeader() {
    include('header.php');
}

function phpNav() {
    include('nav.php');
}

function phpFooter() {
    include('footer.php');
}

function css($name) {
    global $include_url;
    echo "<link href=\"${include_url}css/${name}.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>\n";
}

function js($name) {
    global $include_url;
    echo "<script src=\"${include_url}js/${name}.js\"></script>\n";
}

function code_highlight()
{
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.7.0/styles/github-gist.min.css">';
    echo "\n";
    js('highlight.min');
    echo "<script>hljs.initHighlightingOnLoad();</script>\n";
}

function rippleColor($hex) {
    $r = hexdec(substr($hex, 1, 2));
    $g = hexdec(substr($hex, 3, 2));
    $b = hexdec(substr($hex, 5, 2));
    return "rgba($r, $g, $b, 0.2)";
}
?>
