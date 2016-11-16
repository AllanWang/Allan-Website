<?php

function code($filename)
{
    code_specific(null, $filename);
}

function code_specific($type, $filename)
{
    echo '<pre><code';
    if ($type !== null) echo " class=\"$type\"";
    echo '>';
    if (file_exists("code/$filename")) {
        include("code/$filename");
    } else {
        echo "$filename does not exist in the code directory";
    }
    echo '</code></pre>';
}

function code_collapsible(...$boxes)
{
    echo '<ul class="collapsible" data-collapsible="accordion">';
    foreach ($boxes as $box) {
        $items = explode("|", $box);
        echo '<li><div class="collapsible-header click-scroll">';
        echo $items[0];
        echo '</div><div class="collapsible-body">';
        if (sizeof($items) == 3) {
            code_specific($items[2], $items[1]);
        } else {
            code($items[1]);
        }
        echo '</div>';
    }
    echo '</ul>';
}

?>