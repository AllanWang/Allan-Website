<?php


function tableOfContentsData(array $links = null)
{
    if ($links == null) {
        global $tocData;
        if (isset($tocData)) {
            $links = $tocData;
        } else {
            echo '<li><a href="#">NO LINKS FOUND</a></li>';
            return;
        }
    }
    foreach ($links as $id => $text) {
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

?>