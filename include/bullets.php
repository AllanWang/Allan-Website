<?php

function inlineBullets(array $pairs)
{
    $first = true;
    foreach ($pairs as $name => $link) {
        if (!$first) {
            echo '&emsp;&bull;&emsp;';
        } else {
            $first = false;
        }
        echo '<a href="' . $link . '" target="_blank">' . $name . '</a>';
    }
}

//TODO does not work as well for multilined text (no indent)
function bullets(...$items)
{
    foreach ($items as $item) {
        echo "&ensp;";
        while ($item[0] == '-') {
            echo "&ensp;&ensp;";
            $item = substr($item, 1);
        }
        echo "&ensp;&bull;&ensp;$item<br/>";
    }
}
?>