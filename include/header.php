<?php
global $page_title, $page_description, $theme_color, $hamburger_menu_color, $header_function, $cssArr;
?>
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
    <link href="/bower_components/materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet"
          media="screen"/>

    <?php

    css('style');
    foreach ($cssArr as $css) {
        css($css);
    }

    if (!isset($theme_color) || preg_match('/^#[0-9A-F]{6}$/i', $theme_color) == 0) { //check for valid hex color
        $theme_color = '#333333';
    } else {
        echo "<meta name=\"theme-color\" content=\"$theme_color\">"; //only add theme meta data if it was explicitly defined
    }

    if (!isset($hamburger_menu_color)) $hamburger_menu_color = $theme_color;

    if ($page_title === '404') echo '<link href="/404/css/404.css" type="text/css" rel="stylesheet" media="screen"/>';

    include_once('header_styles.php');

    ?>

    <?php if (isset($header_function)) $header_function() ?>
</head>
