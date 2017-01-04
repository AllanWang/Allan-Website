/**
 * AngularJS module for updating browser title/history based on the current ui-router state.
 *
 * @link https://github.com/nonplus/angular-ui-router-title
 *
 * @license angular-ui-router-title v0.0.4
 * (c) Copyright Stepan Riha <github@nonplus.net>
 * License MIT
 */

(function(angular) {

"use strict";
var documentTitleCallback = undefined;
angular.module("ui.router.title", ["ui.router"])
    .provider("$title", function $titleProvider() {
    return {
        documentTitle: function (cb) {
            documentTitleCallback = cb;
        },
        $get: ["$state", function ($state) {
                return {
                    title: function () { return getTitleValue($state.$current.locals.globals["$title"]); },
                    breadCrumbs: function () {
                        var $breadcrumbs = [];
                        var state = $state.$current;
                        while (state) {
                            if (state["resolve"] && state["resolve"].$title) {
                                $breadcrumbs.unshift({
                                    title: getTitleValue(state.locals.globals["$title"]),
                                    state: state["self"].name,
                                    stateParams: state.locals.globals["$stateParams"]
                                });
                            }
                            state = state["parent"];
                        }
                        return $breadcrumbs;
                    }
                };
            }]
    };
})
    .run(["$rootScope", "$timeout", "$title", function ($rootScope, $timeout, $title) {
        $rootScope.$on("$stateChangeSuccess", function () {
            var title = $title.title();
            $timeout(function () {
                $rootScope.$title = title;
                if (documentTitleCallback) {
                    document.title = documentTitleCallback(title);
                }
            });
            $rootScope.$breadcrumbs = $title.breadCrumbs();
        });
    }]);
function getTitleValue(title) {
    return angular.isFunction(title) ? title() : title;
}


})(window.angular);