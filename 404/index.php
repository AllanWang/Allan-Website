<!DOCTYPE html>
<html lang="en">
<?php
include("../include/config.php");
$page_title = "404";
$page_description = "You broke it.";
$theme_color = '#ff0000';
phpHeader();
$error_tag = (isset($_GET['why']) ? $_GET['why'] : '404');

?>

<body>

<?php phpNav() ?>

<main>

    <div class="holder">
        <?php
        //create new gravity item for every word
        $words = preg_split('/[^a-z0-9]/i', $error_tag);
        foreach ($words as $item) {
            echo "<div class=\"gravity\">${item}</div>\n";
        }
        ?>
        <br>
        <div class="gravity">Not</div>
        <div class="gravity">Found</div>
        <div class="stationary">Feel free to contemplate life or go back to one of the existing items in the side
            navigation.
        </div>
    </div>

</main>
<?php phpFooter(); ?>
<script src="http://allanwang.ca/404/js/jGravity.min.js"></script>
<script>
    $(document).ready(function () {
        var main = $('main');
        setTimeout(function () {
            main.jGravity({
                target: '.gravity',
                drag: true,
                callback: function() { //modified jGravity with callback for more reliable movement checks
                    setTimeout(function () {
                        $(".stationary").fadeIn(3000);
                    }, 1500);
                }
            });

        }, 1000);

    });
</script>
</body>

</html>
