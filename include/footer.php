<?php include('config.php') ?>
<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer</h5>
                <p class="grey-text text-lighten-4">TODO</p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <!-- Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a> -->
            <p align="right">&copy; Allan Wang 2016</p>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="<?php echo $include_url; ?>js/jquery-2.4.4.min.js"></script>
<script src="<?php echo $include_url; ?>js/materialize.min.js"></script>
<script src="<?php echo $include_url; ?>js/init.js"></script>

<script>
    //script for scroll animations

    $(window).load(function () {
        var scrollTo = <?php echo('"' . (isset($_GET['scroll_to']) ? $_GET['scroll_to'] : '') . '"'); ?>;
        if (scrollTo) {
            animateTo(scrollTo, 250);
        }
    });
    function animateTo(idTo, delay) {
        if (!document.getElementById(idTo)) return console.log(idTo, 'is not a real elementId');
        if (!delay) delay = 0;
        setTimeout(function () { //animate scroll after page load
            $('html, body').animate({
                scrollTop: $('#' + idTo).offset().top
            }, 700, 'easeInOutExpo');
        }, delay);

    }

    function animateSwitch(idFrom, idTo) {
        if (!document.getElementById(idFrom)) return console.log('animateSwitch invalid id', idFrom);
        $('#' + idFrom).bind('click', function (event) {
            if (document.getElementById(idTo)) animateTo(idTo);
            event.preventDefault();
            $('.animated').sideNav('hide'); //close nav on click
        });
    }

    //called by below for respective nav id
    function navAnimOverride(idFrom, idTo) {
        $(document).ready(function () {
            animateSwitch('nr_' + idFrom, idTo);
            animateSwitch('nrm_' + idFrom, idTo);
        });
    }

    //check for nav override vars
    <?php if (isset($navFrom)) {
        echo('navAnimOverride("' . $navFrom . '", "');
        echo ((isset($navTo) ? $navTo : 'null') . '");');
    } ?>

</script>
