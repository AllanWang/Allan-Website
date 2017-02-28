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

function table_contents($columns, ...$items)
{
    $result = '';
    for ($item = 0; $item <= sizeof($items) - $columns; $item += $columns) {
        $result .= '<tr>';
        for ($row = 0; $row < $columns; $row++) {
            $result .= "<td>" . $items[$item + $row] . "</td>";
        }
        $result .= '</tr>';
    }
    return $result;
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