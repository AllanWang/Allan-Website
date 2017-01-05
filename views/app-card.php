

<div class="col s12 m6">
    <div id="<?php echo getId($cardTitle) ?>" class="card medium sticky-action">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="/images/<?php echo $cardImage ?>">
            <span class="card-title activator background-gradient"><?php echo $cardTitle ?></span>
        </div>
        <div class="card-content"><p><?php echo $cardDesc ?></p></div>
        <div class="card-action">
            <?php foreach ($cardActions as $linkName => $link): ?>
                <a href="<?php echo $link ?>" target="_blank"><?php echo $linkName ?></a>
            <?php endforeach; ?>
        </div>
        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?php echo $cardTitle ?><i
                                    class="material-icons right">close</i></span>
            <ul class="browser-default">
                <?php foreach ($cardPoints as $point): ?>
                    <li><?php echo $point ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>