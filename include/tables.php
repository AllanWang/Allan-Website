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
    $item = 0;
    if ($columns < 0) { //first row is just one cell
        $item = 1;
        $columns = -$columns;
        $result .= '<td colspan="' . $columns . '">' . $items[0] . "</td>";
    }
    for (; $item <= sizeof($items) - $columns; $item += $columns) {
        $result .= '<tr>';
        for ($row = 0; $row < $columns; $row++) {
            $point = $items[$item + $row];
            $result .= "<td>" . $point . "</td>";
        }
        $result .= '</tr>';
    }
    return $result;
}

function table_tags($content, $class = '', $id = '')
{
    $text = '<table';
    if ($class != '') $text .= ' class="' . $class . '"';
    if ($id != '') $text .= ' id="' . $id . '"';
    $text .= '>' . $content . '</table>';
    return $text;
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