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
    css("style");
    if (isset($preload)) css("preload.min");
    if (!isset($theme_color) || preg_match('/^#[0-9A-F]{6}$/i', $theme_color) == 0) { //check for valid hex color
        $theme_color = '#333333';
    }
    ?>

    <style>
        .waves-effect.waves-nav .waves-ripple {
            background-color: <?php echo rippleColor($theme_color)?>;
        }

        .theme-background {
            background-color: <?php echo $theme_color?>; !important;
        }

        .theme-color {
            color: <?php echo $theme_color?>; !important;
        }
    </style>
</head>
