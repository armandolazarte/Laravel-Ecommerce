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
            template: '<div><button ng-show="active!=0" class="btn btn-success">Active</button><button ng-show="active==0" class="btn btn-danger">Inactive</button></div>'
        };
    });