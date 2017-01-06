<!DOCTYPE html>
<html lang="en">
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Uh oh";
$page_description = "You broke it.";
$theme_color = '#ff0000';

global $cssArr;
array_push($cssArr, '<link href="/404/css/404.css" type="text/css" rel="stylesheet" media="screen"/>');
phpHeader();

if (isset($_GET['why'])) {
    $error_tag = $_GET['why'] . ' br Not Found';
} else {
    $status = $_SERVER['REDIRECT_STATUS'];
    $codes = array(
        400 => array('400 Bad Request', 'The request cannot be fulfilled due to bad syntax.'),
        401 => array('401 Login Error', 'It appears that the password and or username you entered was incorrect. Please try again.'),
        403 => array('403 Forbidden', 'The server has refused to fulfill your request.'),
        404 => array('404 Not Found', 'Whoops, sorry, but the document you requested was not found on this server.'),
        405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
        408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
        414 => array('414 URL To Long', 'The URL you entered is longer than the maximum length.'),
        500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
        502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
        504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
    );
    if (array_key_exists($status, $codes)) {
        $error_tag = $codes[$status][0] . ' br ' . $codes[$status][1];
    } else {
        $error_tag = '404 br Not Found';
    }
}

?>

<body>

<?php phpNav() ?>

<main>
    <div class="holder">
        <?php
        //create new gravity item for every word
        $words = preg_split('/[^a-z0-9]/i', $error_tag);
        foreach ($words as $item) {
            if ($item == 'br') echo '<br>';
            else echo "<div class=\"gravity\">${item}</div>";
        }
        ?>
        <div class="stationary">Feel free to go back to one of the existing items in the side navigation.
        </div>
    </div>
</main>
<?php phpFooter(); ?>
<script src="/404/js/jGravity.min.js"></script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('main').jGravity({
                target: '.gravity',
                drag: true,
                callback: function () { //modified jGravity with callback for more reliable movement checks
                    setTimeout(function () {
                        $(".stationary").fadeIn(2000);
                    }, 1500);
                }
            });

        }, 750);

    });
</script>
</body>

</html>
