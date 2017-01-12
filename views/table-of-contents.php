<div class="col hide-on-small-only m3 l2">
    <div class="pinned vertical-center">
        <div class="switch">
            <label>
                Collapse
                <input id="note-toggle" type="checkbox" onchange="toggleNoteView(this)" checked>
                <span class="lever"></span>
                Expand
            </label>
        </div>
        <ul class="section table-of-contents">
            <?php
            if ($showKeyPanel) echo '<li><a href="#keypanel"><i class="material-icons tiny">vpn_key</i> Key Panel</a></li>';
            ?>
            <?php
            tableOfContentsData();
            ?>
        </ul>
    </div>
</div>