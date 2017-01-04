'use strict';

angular.module('frameApp')

    .directive('awNgCss', function ($interpolate) {
        return {
            restrict: 'E',
            templateUrl: '/scripts/directives/templates/theme.html',
            scope: {
                themeColor: '@'
            }
        };
    });