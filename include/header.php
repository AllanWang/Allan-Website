<?php include('config.php'); ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title><?php echo(isset($page_title) ? $page_title : 'Allan Wang'); ?></title>
    <meta name="description"
          content="<?php echo(isset($page_description) ? $page_description : 'Allan Wang\'s page'); ?>"/>
    <link rel="icon" href="http://allanwang.ca/favicon.ico">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <?php

    css("materialize.min");
    if (isset($preload)) css("preload.min");
    if (!isset($theme_color) || preg_match('/^#[0-9A-F]{6}$/i', $theme_color) == 0) { //check for valid hex color
        $theme_color = '#333333';
    }

    function theme_background()
    {
        global $theme_color;
        echo "style=\"background-color: $theme_color; !important \" ";
    }

    css("style");

    ?>

    <style>
        .waves-effect.waves-nav .waves-ripple {
            background-color: <?php echo rippleColor($theme_color)?>;
        }

        .theme-color {
            color: <?php echo $theme_color?>;
        !important;
        }

        /*override search bar accents*/
        input:not([type]):focus:not([readonly]),
        input[type=text]:focus:not([readonly]),
        input[type=password]:focus:not([readonly]),
        input[type=email]:focus:not([readonly]),
        input[type=url]:focus:not([readonly]),
        input[type=time]:focus:not([readonly]),
        input[type=date]:focus:not([readonly]),
        input[type=datetime]:focus:not([readonly]),
        input[type=datetime-local]:focus:not([readonly]),
        input[type=tel]:focus:not([readonly]),
        input[type=number]:focus:not([readonly]),
        input[type=search]:focus:not([readonly]),
        textarea.materialize-textarea:focus:not([readonly]) {
            border-bottom: 1px solid <?php echo $theme_color?>;
            box-shadow: 0 1px 0 0 <?php echo $theme_color?>;
        }

        input:not([type]):focus:not([readonly]) + label,
        input[type=text]:focus:not([readonly]) + label,
        input[type=password]:focus:not([readonly]) + label,
        input[type=email]:focus:not([readonly]) + label,
        input[type=url]:focus:not([readonly]) + label,
        input[type=time]:focus:not([readonly]) + label,
        input[type=date]:focus:not([readonly]) + label,
        input[type=datetime]:focus:not([readonly]) + label,
        input[type=datetime-local]:focus:not([readonly]) + label,
        input[type=tel]:focus:not([readonly]) + label,
        input[type=number]:focus:not([readonly]) + label,
        input[type=search]:focus:not([readonly]) + label,
        textarea.materialize-textarea:focus:not([readonly]) + label {
            color: <?php echo $theme_color?>;
        }
    </style>
</head>
