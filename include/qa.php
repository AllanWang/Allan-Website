<?php
global $cssArr, $jsArr;
array_push($cssArr, 'qa');
array_push($jsArr, 'qa');

function instructionText()
{
    return "Use &uarr; &darr; to navigate through questions; use &larr; &rarr; to show/hide answers<br>Hold shift and use arrows to jump to the top/bottom or show/hide all answers.<br>Click a question to jump to it and show/hide the answer";
}