<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Math 240 Notes";
$page_description = "Discrete Mathematics";
$navFrom = 'n_math_240';
$theme_color = "#F44336"; //red

phpPDF("https://allanwang.ca/pdf/MATH-240.pdf");
?>

</html>
