<?php
global $pdf;
phpHeader(); ?>
<body>
<?php phpNav(); ?>

<main>
    <iframe id="pdf" src="http://docs.google.com/gview?url=<?php echo $pdf ?>&embedded=true" frameborder="0"></iframe>
    <div class="fixed-action-btn">
        <a href="<?php echo $pdf ?>" download class="btn-floating btn-large red">
            <i class="large material-icons">file_download</i>
        </a>
        <ul>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">print</i></a></li>
            <li><a href="<?php echo $pdf ?>" class="btn-floating green"><i class="material-icons">open_in_new</i></a>
            </li>
            <li><a class="btn-floating blue"><i class="material-icons">bookmark</i></a></li>
        </ul>
    </div>
</main>

<?php phpFooter(); ?>
</body>