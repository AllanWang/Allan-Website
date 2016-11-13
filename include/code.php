<?php

function code($filename)
{
    code_specific(null, $filename);
}

function code_specific($type, $filename)
{
    echo '<pre><code';
    if ($type !== null) echo " class=\"$type\"";
    echo '>';
    if (file_exists("code/$filename")) {
        include("code/$filename");
    } else {
        echo "$filename does not exist in the code directory";
    }
    echo '</code></pre>';
}

?>