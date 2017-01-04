angular.module('frameApp', ['ui.router', 'angularCSS'])

    .constant('include_url', 'http://allanwang.ca/include/')

    .config(function ($stateProvider) {
        $stateProvider.state('dev', {
            url: "/dev",
            // controller : 'TemCtrl',
            templateUrl : 'view.html',
            resolve: {
                $title: function() {
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
        });
    });
