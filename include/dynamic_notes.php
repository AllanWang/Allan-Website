<?php

const MAIN = '<div class="dynamic-notes">';
const DIV_END = '</div>';
const UL_START = '<ul class="browser-default">' . "\n";
const UL_END = '</ul>' . "\n";
const BLANK = ' ';
const KEY = '!';
const EXTRA = '#';

/**
 * Simplified function that will created a nested bullet list with an array of strings
 * Keywords:
 * -        indent bullet; use multiple times for multiple indents
 * !        important, key tag
 * #        not important, extra tag
 * ' '      whitespace - or first character will be removed; allows for ! and # to be used normally if necessary
 * {%s|%s}  keyword - first string is id, second string is word to be displayed; will create an inline keyword div
 * @param array ...$notes the array of rows
 */
function dynamicBullets(...$notes)
{
    echo MAIN . UL_START;
    $level = 0;
    $toClose = 0;
    $prev = '';
    foreach ($notes as $note) {
        $depth = 0;
        while ($note[0] == '-') {
            $depth++;
            $note = substr($note, 1);
        }
        if ($level < $depth) {
            echoItem($prev, $level, false);
            echo UL_START;
            $toClose++;
        } else if ($level > $depth) {
            echoItem($prev, $level, true);
            while ($level > $depth) {
                echo UL_END . '</li>';
                $level--;
                $toClose--;
            }
        } else if ($prev != '') {
            echoItem($prev, $level, true);
        }
        if ($level < $depth) $level++; //level should always be depth, but since we can only indent one at a time, this is here as a precaution
        else $level = $depth;
        $prev = $note;
    }
    echoItem($prev, $level, true);
    while ($toClose > 0) {
        echo UL_END . '</li>';
        $toClose--;
    }
    echo UL_END . '</div>';
}

function echoItem($item, $level, $close)
{
    echo '<li class="';
    switch ($level) {
        case 0:
            echo 'top ';
            break;
        case 1:
            echo 'mid ';
            break;
        default:
            echo 'low ';
            break;
    }
    switch ($item[0]) {
        case KEY:
            echo 'key';
            $item = substr($item, 1);
            break;
        case EXTRA:
            echo 'extra';
            $item = substr($item, 1);
            break;
        case BLANK:
            $item = substr($item, 1); //remove whitespace
            echo 'normal';
            break;
        default:
            echo 'normal';
            break;
    }
    echo '">';
    echo preg_replace('/{(.+)\|(.+)}/', '<div id="$1" class="keyword">$2</div>', $item);
//    echo preg_replace('/[^\\]\{(.+)\|(.+)[^\\]\}/g', '<div id="$1" class="keyword">$2</div>', $item);
//    echo preg_replace('/aaaaa/', 'hello', $item);
//    echo $item;
    if ($close) echo '</li>';
    echo "\n";
}

//echoes br $count times
function br($count = 1)
{
    for (; $count > 0; $count--) {
        echo '<br>';
    }
}

function fixedTable(...$items)
{
    $result = '<table><tr>';
    foreach ($items as $item) {
        $result = $result . "<td>$item</td>";
    }
    $result = $result . '</tr></table>';
    return $result;
}

function keywordPanel(...$items)
{
    echo '<div class="modal-keys">';
    $first = true;
    foreach ($items as $item) {
        //default id is input in lower case with no spaces
        $pair = array(strtolower(preg_replace('/ /', '-', $item)), $item);
        if (strpos($item, '|') !== false) $pair = explode('|', $item);
        if ($first) $first = false;
        else echo '&ensp;&bull;&ensp;'; //space bullet space

        echo '<a href="#' . $pair[0] . '">' . $pair[1] . '</a>';
    }
    echo '</div>';
}

function bulletTable(...$items)
{
    $text = '';
    $percent = 100 / sizeof($items);
    $text = $text . '<table><tr>';
    foreach ($items as $point) {
        $text = $text . "<td style=\"width:$percent%\">$point</td>";
    }
    $text = $text . '</table></tr>';
    return $text;
}

?>