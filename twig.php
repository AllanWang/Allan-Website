<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>{{title}}</title>
    <meta name="description" content="{{description}}"/>
    <link rel="icon" href="http://allanwang.ca/favicon.ico">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <link href="bower_components/materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet"
          media="screen"/>
    <link href="include/css/style.css" type="text/css" rel="stylesheet" media="screen"/>
    <!--    TODO see if you can add this only in 404 page-->
    {% if title === '404' %}
    <!--<link href="404/css/404.css" type="text/css" rel="stylesheet" media="screen"/>-->
    <!--<aw-ng-css theme-color="#ff00ff"></aw-ng-css>-->
</head>
<body>
<div ng-include="'include/nav.html'"></div>
<main ng-cloak>
    <div ui-view="main"></div>
</main>
<div ng-include="'include/footer.html'"></div>
</body>
<!--jquery bower:js-->
<!--<script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>-->
<script type="text/javascript" src="/include/js/jquery/jquery-2.2.2.min.js"></script>
<!-- angular bower:js -->
<script type="text/javascript" src="/bower_components/angular/angular.js"></script>
<script type="text/javascript" src="/bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
<script type="text/javascript" src="/bower_components/angular-ui-router-title/angular-ui-router-title.js"></script>
<script type="text/javascript" src="/bower_components/angular-css/angular-css.min.js"></script>

<script type="text/javascript" src="/bower_components/materialize/dist/js/materialize.min.js"></script>
<script type="text/javascript" src="/bower_components/angular-materialize/src/angular-materialize.js"></script>
<!--<script type="text/javascript" src="/bower_components/angular-materialize/src/index.js"></script>-->
<!--<script type="text/javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-materialize/0.2.2/angular-materialize.min.js"></script>-->
<!--search js-->
<script type="text/javascript" src="/include/js/jade/lunr.min.js"></script>
<script type="text/javascript" src="/include/js/jade/search_data.js"></script>
<script type="text/javascript" src="/include/js/jade/search.min.js"></script>
<!--frameApp-->
<!--<script type="text/javascript" src="/include/js/init.js"></script>-->
<script type="text/javascript" src="/scripts/app.js"></script>
<!--<script type="text/javascript" src="/scripts/controllers/materialize-controllers.js"></script>-->
<script type="text/javascript" src="/scripts/directives/banner.js"></script>
<!--<script type="text/javascript" src="/scripts/directives/inline-styling.js"></script>-->
<script type="text/javascript" src="/scripts/directives/app-card.js"></script>

</html>