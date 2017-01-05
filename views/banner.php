<div class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container"><br><br>
            <h1 class="header center white-text text-lighten-2 pad-top-20"><?php echo $n_key ?></h1>
            <div class="row center"><h5 class="header col s12 light white-text">
                    <?php
                    $first = true;
                    foreach ($key_codes as $key_code) {
                        if (!$first) echo ' &bull; ';
                        $first = false;
                        echo $key_code;
                    } ?>
            </div>
            <br><br></div>
    </div>
    <div class="parallax blur-darken"><img src="images/<?php echo $image ?>" alt="Coding Projects Header"></div>
</div>
