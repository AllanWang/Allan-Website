'use strict';

angular.module('frameApp')
    .directive('awParallaxBanner', function () {
        return {
            restrict: 'E',
            transclude: true,
            templateUrl: '/scripts/directives/templates/banner.html',
            scope: {
                title: '@',
                image: '@'
            }
        };
    });