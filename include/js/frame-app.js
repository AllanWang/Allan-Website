var app = angular.module('frameApp', []);

app.constant('include_url', 'http://allanwang.ca/include/');
//Used for ng-bind-html
app.filter('trustedhtml',
    function ($sce) {
        return $sce.trustAsHtml;
    }
)

    .directive('baseCss', ['include_url', function (include_url) {
        return {
            restrict: 'E',
            transclude: true,
            scope: {
                name: '@'
            },
            template: '<link href="' + include_url + 'css/<ng-transclude></ng-transclude>.css" type="text/css" rel="stylesheet" media="screen"/>'
        }
    }])
    .directive('awBullets', function () {
        return {
            restrict: 'E',
            transclude: true,
            template: '<ul class="browser-default"><ng-transclude></ng-transclude></ul>'
        }
    })
    .directive('awAppCard', function () {
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