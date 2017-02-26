<?php
global $page_title, $page_description, $page_keywords, $theme_color, $hamburger_menu_color, $header_function, $cssArr;
?>

<!--
    Hello there!
    If you are here to learn from my source, please note that this page was generated with php and may not be easy to
    read.
    Feel free to view the source at https://github.com/AllanWang/Allan-Website
-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title><?php echo(isset($page_title) ? $page_title : 'Allan Wang'); ?></title>
    <meta name="description"
          content="<?php echo(isset($page_description) ? $page_description : 'Allan Wang\'s page'); ?>"/>
    <meta name="author" content="Allan Wang"/>
    <link rel="icon" href="<?php echo getFavIcon() ?>">
    <?php if (isset($page_keywords) && is_array($page_keywords)): ?>
        <meta name="keywords" content="<?php echo implode($page_keywords, ', ') ?>"/>
    <?php endif; ?>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="/bower_components/materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet"
          media="screen"/>

    <?php

    css('style');
    foreach ($cssArr as $css) {
        if (substr($css, 0, 1) == '<') echo $css;
        else css($css);
    }

    if (!isset($theme_color) || preg_match('/^#[0-9A-F]{6}$/i', $theme_color) == 0) { //check for valid hex color
        $theme_color = '#333333';
    } else {
        echo "<meta name=\"theme-color\" content=\"$theme_color\">"; //only add theme meta data if it was explicitly defined
    }

    if (!isset($hamburger_menu_color)) $hamburger_menu_color = $theme_color;

    include_once('header_styles.php');

    ?>

    <?php if (isset($header_function)) $header_function() ?>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5677449339557164",
            enable_page_level_ads: true
        });
    </script>
</head>
