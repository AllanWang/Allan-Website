<!DOCTYPE html>
<html lang="en">

<?php
include("../../include/config.php");
$page_title = "Discrete Notes";
$page_description = "Discrete Mathematics";
$navFrom = 'n_disc_m';
$theme_color = "#F44336"; //red
$extend_header = true;
phpHeader(); ?>

<link rel="stylesheet" href="240/base.min.css"/>
<link rel="stylesheet" href="240/fancy.min.css"/>
<link rel="stylesheet" href="240/240.css"/>
<script src="240/compatibility.min.js"></script>
<script src="240/pdf2htmlEX.min.js"></script>
<script>
    try {
        pdf2htmlEX.defaultViewer = new pdf2htmlEX.Viewer({});
    } catch (e) {
    }
</script>
</head>

<body>
<?php
function toc()
{
    include_once('240.outline');
}

$table_of_contents = 'toc';
phpNav(); ?>

<main>
    <?php
    include('240.html');
    ?>
</main>

<?php phpFooter(); ?>
</body>

</html>
