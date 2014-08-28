'use strict';

angular.module('eCommerce.services', []).factory('alert', ['$rootScope', '$timeout', function ($rootScope, $timeout) {

    $rootScope.alerts = [];

    var clear = function () {
        $rootScope.alerts = [];
    };

    return {
        add: function (msg, type) {
            $rootScope.alerts.push({msg: msg, type: type});
            $timeout(clear, 2000);
        }
    };
}]);
