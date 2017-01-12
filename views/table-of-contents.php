<div class="col hide-on-small-only m3 l2">
    <div class="pinned vertical-center">
        <?php
        if ($showCollapse) include($_SERVER['DOCUMENT_ROOT'] . '/views/note-switch.php');
        ?>
        <ul class="section table-of-contents">
            <?php
            if ($showCollapse) echo '<li><a href="#keypanel"><i class="material-icons tiny">vpn_key</i> Key Panel</a></li>';
            ?>
            <?php
            tableOfContentsData();
            ?>
        </ul>
    </div>
</div>