var app = angular.module('frameApp', []);

//Used for ng-bind-html
app.filter('trustedhtml',
    function ($sce) {
        return $sce.trustAsHtml;
    }
);

app.directive('awBullets', function () {
    return {
        restrict: 'E',
        transclude: true,
        template: '<ul class="browser-default"><ng-transclude></ng-transclude></ul>'
    }
});
app.directive('awAppCard', function () {
    return {
        restrict: 'E',
        transclude: {
            links: '?appCardLinks',
            fullDesc: '?appCardFull'
        },
        templateUrl: '/templates/app-card.html',
        scope: {
            title: '@',
            image: '@',
            desc: '@'
        }
    };
});
