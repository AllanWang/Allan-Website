<?php
function mathExtra()
{
    css('pdf');
}

phpHeader('mathExtra');
?>
<body>

<?php phpNav(); ?>
<main>
    <object id="pdf-container" data="<?php echo $pdf?>" type="application/pdf" width="100%" height="100%"></object>
</main>
<?php phpFooter(true); ?>
</body>
