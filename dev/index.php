<!DOCTYPE html>
<html lang="en" ng-app="frameApp">
<?php
include("../include/config.php");
$page_title = "Projects";
$page_description = "Main Page";
$navFrom = 'proj';
$navTo = 'projects';
$n_key = 'Coding Projects';
$theme_color = '#4CAF50'; //green
$hamburger_menu_color = "#ffffff";
phpHeader(true);
js('angular/angular.min');
?>
<script src="/ang/main.js"></script>
</head>
<body>

<?php phpNav() ?>

<main>

    <?php
    banner('android-n.jpg', 'Themes', 'Android Apps', 'Open Source');
    ?>
    <div ng-controller="AppCardController" class="container">
        <div class="section">
            <div class="row" ng-repeat="appRow in apps" id="{{appRow.id}}">
                <div ng-repeat="card in appRow.cards" class="col s12 m6">
                    <div id="{{getId(card.title)}}" class="card medium sticky-action">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="images/{{card.image}}">
                            <span class="card-title activator background-gradient">{{card.title}}</span>
                        </div>
                        <div class="card-content">
                            <p>{{card.desc}}</p>
                        </div>
                        <div class="card-action">
                            <a ng-repeat="link in card.links" href="{{link[1]}}" target="_blank">{{link[0]}}</a>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{card.title}}<i
                                        class="material-icons right">close</i></span>
                            <p ng-bind-html="fullText(card) | trustedhtml"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>

</body>

</html>
