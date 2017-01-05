<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Discrete Notes";
$page_description = "Discrete Mathematics";
$navFrom = 'n_disc_m';
$theme_color = "#F44336"; //red

function mathExtra()
{
    css('pdf');
}

phpHeader('mathExtra');
?>
<body>

<?php phpNav(); ?>
<main>
    <object id="pdf-container" data="http://allanwang.ca/pdf/MATH%20240.pdf" type="application/pdf" width="100%" height="100%"></object>
<!--    <div class="fixed-action-btn">-->
<!--        <a href="http://allanwang.ca/notes/discrete/MATH%20240.pdf" download-->
<!--           class="btn-floating btn-large microsoft-header-blue waves-effect waves-light">-->
<!--            <i class="large material-icons">file_download</i>-->
<!--        </a>-->
<!--    </div>-->
</main>
<?php phpFooter(true); ?>
</body>

</html>
