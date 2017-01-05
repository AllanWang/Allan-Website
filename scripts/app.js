'use strict';

angular.module('frameApp', ['ui.router', 'ui.materialize'])

    .constant('include_url', 'http://allanwang.ca/include/')

    .config(function ($stateProvider, $urlRouterProvider) {
        $stateProvider.state('dev', {
            views: {
                'main': {
                    url: "/dev",
                    templateUrl: '/views/dev.html',
                    resolve: {
                        $title: function () {
                            return 'Projects';
                        }
                    }
                }
            }
        }).state('calc', {
            views: {
                'main': {
                    url: "/calc",
                    templateUrl: '/notes/calc/index.php',
                    resolve: {
                        $title: function () {
                            return 'Calc';
                        }
                    }
                }
            }
        }).state('discrete', {
            views: {
                'main': {
                    url: "/discrete",
                    templateUrl: '/notes/discrete/index.php',
                    resolve: {
                        $title: function () {
                            return 'Discrete';
                        }
                    }
                }
            }
        }).state('linear', {
            views: {
                'main': {
                    url: "/linear",
                    // controller : 'TemCtrl',
                    templateUrl: '/notes/linear/index.php',
                    resolve: {
                        $title: function () {
                            return 'Linear';
                        }
                    }
                }
            }
        });
    });
