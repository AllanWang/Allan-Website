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
        echo linkNewTab($name, $link);
    }
}

function bullets(...$items)
{
    echo '<ul class="browser-default">';
    foreach ($items as $item) {
        echo "<li>" . $item . "</li>";
    }
    echo '</ul>';
}

?>