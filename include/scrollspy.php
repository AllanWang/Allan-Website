<?php


function tableOfContentsData()
{
    global $tocData;
    if (!isset($tocData)) {
        echo '<li><a href="#">NO LINKS FOUND</a></li>';
        return;
    }
    foreach ($tocData as $id => $text) {
        echo "<li><a href=\"#$id\">$text</a></li>";
    }
}

function scrollSpyHeaderData($id, $name = '')
{
    if ($name == '') { //Only name given; generate id
        $name = $id;
        $id = strtolower(preg_replace('/\s+/', '-', $name));
    }
    global $tocData;
    $tocData[$id] = $name;
    echo "id=\"$id\" class=\"section scrollspy\"";
}