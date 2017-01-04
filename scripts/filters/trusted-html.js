angular.module('frameApp')

    .filter('trustedhtml',
        function ($sce) {
            return $sce.trustAsHtml;
        }
    );