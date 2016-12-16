<?php

class Note
{
    public $text;
    public $type;
    const NORMAL = 0;
    const KEY = 1;
    const EXTRA = 2;

    function __construct($text, $type = 0)
    {
        $this->text = $text;
        $this->type = $type;
    }
}

const MAIN = '<div class="dynamic-notes">';
const DIV_FORMAT = '<div class="%s">';
const DIV_END = '</div>';
const UL_START = '<ul class="browser-default">' . "\n";
const UL_END = '</ul>' . "\n";
const BLANK = ' ';
const KEY = '!';
const EXTRA = '#';

function dynamicBullets(...$notes)
{
    global $dynamic_notes;
    $dynamic_notes = 'enabled';
    echo sprintf(DIV_FORMAT, 'dynamic-notes') . UL_START;
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
            echo UL_END . '</li>';
            $toClose--;
        } else if ($prev != '') {
            echoItem($prev, $level, true);
        }
        $level = $depth;
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
    echo $item;
    if ($close) echo '</li>';
    echo "\n";
}

function keyword($key)
{
    return '<div id="' . $key . '" class="keyword">' . $key . '</div>';
}

?>