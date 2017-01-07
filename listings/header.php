<!--Starts after <head></head>-->
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = 'Index'; //necessary for phpNav
$theme_color = "#4078c0"; //github blue
phpNav();

//Removes any query variables if found
function getDir()
{
    if (strpos($_SERVER['REQUEST_URI'], '?') === false) return $_SERVER['REQUEST_URI'];
    return strstr($_SERVER['REQUEST_URI'], '?', true);
}

?>

<main>
    <div class="wrapper">
        <h3><?php echo 'Index of ' . getDir(); ?></h3><br>

