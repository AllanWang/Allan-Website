<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Discrete Notes";
$page_description = "Discrete Mathematics";
$navFrom = 'n_math240';
$theme_color = "#F44336"; //red

phpPDF("http://allanwang.ca/pdf/MATH%20240.pdf");
?>

</html>
