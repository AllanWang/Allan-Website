<?php

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

?>