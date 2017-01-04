<!DOCTYPE html>
<html lang="en">

<?php
include("../../include/config.php");
$page_title = "Discrete Notes";
$page_description = "Discrete Mathematics";
$navFrom = 'n_disc_m';
$theme_color = "#2e74b5"; //microsoft blue

function mathExtra() {
    echo '<link rel="stylesheet" href="240/base.min.css"/>
<link rel="stylesheet" href="240/fancy.min.css"/>
<link rel="stylesheet" href="240/240.css"/>
<script src="240/compatibility.min.js"></script>
<script src="240/pdf2htmlEX.min.js"></script>
<script>
    try {
        pdf2htmlEX.defaultViewer = new pdf2htmlEX.Viewer({});
    } catch (e) {
    }
</script>';
}

phpHeader('mathExtra'); ?>

<body>
<?php
function snc()
{
    include_once('240/240_toc.html');
}

phpNav('snc'); ?>

<main>
    <?php
    include('240.html');
    ?>
    <div class="fixed-action-btn">
        <a href="http://allanwang.ca/notes/discrete/MATH%20240.pdf" download
           class="btn-floating btn-large microsoft-header-blue waves-effect waves-light">
            <i class="large material-icons">file_download</i>
        </a>
    </div>
</main>

<?php phpFooter(); ?>
</body>

</html>
