<?php include('config.php'); ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title><?php echo (isset($page_title) ? $page_title : 'Allan Wang'); ?></title>
    <meta name="description" content="<?php echo (isset($page_description) ? $page_description : 'Allan Wang\'s page'); ?>"/>
    <link rel="icon" href="http://allanwang.ca/favicon.ico">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <?php

    css("materialize.min");
    css("style");
    if (isset($preload)) css("preload.min");

    function css($name) {
        global $include_url;
        echo "<link href=\"${include_url}css/${name}.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>\n";
    }
    ?>
</head>
