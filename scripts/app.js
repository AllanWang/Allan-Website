angular.module('frameApp', ['ui.router', 'angularCSS'])

    .constant('include_url', 'http://allanwang.ca/include/')

    .config(function ($stateProvider) {
        $stateProvider.state('dev', {
            views: {
                'main': {
                    url: "/dev",
                    // controller : 'TemCtrl',
                    templateUrl: '/views/dev.html',
                    resolve: {
                        $title: function () {
                            return 'Projects';
                            // },
                            // endpoints: function($rootScope, tepidServer) {
                            //     if (!$rootScope.session || !$rootScope.session.user) return false;
                            //     return tepidServer.getEndpoints();
                        }
                        // },
                        // data: {
                        //     'rolesAllowed': ['ctfer', 'elder']
                    }
                }
            }
        }).state('calc', {
            views: {
                'main': {
                    url: "/calc",
                    // controller : 'TemCtrl',
                    templateUrl: '/notes/calc/index.php',
                    resolve: {
                        $title: function () {
                            return 'Calc';
                            // },
                            // endpoints: function($rootScope, tepidServer) {
                            //     if (!$rootScope.session || !$rootScope.session.user) return false;
                            //     return tepidServer.getEndpoints();
                        }
                        // },
                        // data: {
                        //     'rolesAllowed': ['ctfer', 'elder']
                    }
                }
            }
        }).state('discrete', {
            views: {
                'main': {
                    url: "/discrete",
                    // controller : 'TemCtrl',
                    templateUrl: '/notes/discrete/index.php',
                    resolve: {
                        $title: function () {
                            return 'Projects';
                            // },
                            // endpoints: function($rootScope, tepidServer) {
                            //     if (!$rootScope.session || !$rootScope.session.user) return false;
                            //     return tepidServer.getEndpoints();
                        }
                        // },
                        // data: {
                        //     'rolesAllowed': ['ctfer', 'elder']
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
                            return 'Projects';
                            // },
                            // endpoints: function($rootScope, tepidServer) {
                            //     if (!$rootScope.session || !$rootScope.session.user) return false;
                            //     return tepidServer.getEndpoints();
                        }
                        // },
                        // data: {
                        //     'rolesAllowed': ['ctfer', 'elder']
                    }
                }
            }
        });
    });
