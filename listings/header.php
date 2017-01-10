<!--Starts after <head></head>-->
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = 'Index'; //necessary for phpNav
$theme_color = "#555555";
$hamburger_menu_color = '#000000';
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
        <h5><?php echo 'Index of ' . getDir(); ?></h5><br/>

