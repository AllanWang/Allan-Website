<?php
global $cssArr;
array_push($cssArr, 'pdf');
phpHeader();
?>
<body>

<?php phpNav(); ?>
<main>
    <object id="pdf-container" data="<?php echo $pdf?>" type="application/pdf" width="100%" height="100%"></object>
</main>
<?php phpFooter(true); ?>
</body>
