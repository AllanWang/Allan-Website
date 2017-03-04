<?php

function code($filename)
{
    return code_specific(null, $filename);
}

function code_specific($type, $filename)
{
    $text = '<pre><code';
    if ($type !== null) $text = $text . " class=\"$type\"";
    $text = $text . '>';
    if (file_exists("code/$filename")) {
        ob_start();
        include("code/$filename");
        $text = $text . ob_get_clean();
    } else {
        $text = $text . "$filename does not exist in the code directory";
    }
    $text = $text . '</code></pre>';
    return $text;
}

function code_collapsible(...$boxes)
{
    echo '<ul class="collapsible" data-collapsible="accordion">';
    foreach ($boxes as $box) {
        $items = explode("|", $box);
        echo '<li><div id="' . getId($items[0]) . '" class="collapsible-header click-scroll">';
        echo $items[0];
        echo '</div><div class="collapsible-body">';
        if (sizeof($items) == 3) {
            echo code_specific($items[2], $items[1]);
        } else {
            echo code($items[1]);
        }
        echo '</div>';
    }
    echo '</ul>';
}

?>