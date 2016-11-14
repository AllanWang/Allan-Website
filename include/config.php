<?php

//For my files

$include_url = "http://allanwang.ca/include/";

function phpHeader()
{
    include_once('header.php');
}

function phpNav()
{
    include_once('nav.php');
}

function phpFooter()
{
    include_once('footer.php');
}

function phpPDF($url)
{
    global $pdf;
    $pdf = $url;
    include_once('pdf.php');
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
        src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML">
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

function rippleColor($hex)
{
    $r = hexdec(substr($hex, 1, 2));
    $g = hexdec(substr($hex, 3, 2));
    $b = hexdec(substr($hex, 5, 2));
    return "rgba($r, $g, $b, 0.2)";
}

?>
