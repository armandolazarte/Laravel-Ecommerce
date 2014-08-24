'use strict';

/* Directives */


angular.module('eCommerce.directives', []).
    directive('helloWorld', function() {
        return {
            scope: {
                active: '@active'
            },
            restrict: 'AE',
            replace: 'true',
            template: '<div><button ng-show="active" class="btn btn-success">Active</span><span ng-show="!active" class="btn btn-default">Inactive</span></div>'
        };
    });