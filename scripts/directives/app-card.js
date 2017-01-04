angular.module('frameApp')

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
            templateUrl: 'templates/app-card.html',
            scope: {
                title: '@',
                image: '@',
                desc: '@'
            }
        };
    });