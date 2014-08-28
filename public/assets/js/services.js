'use strict';

angular.module('eCommerce.services', []).factory('alert', ['$rootScope', '$timeout', function ($rootScope, $timeout) {

    $rootScope.alerts = [];

    var clear = function () {
        $rootScope.alerts = [];
    };

    var add = function (msg, type) {
        $rootScope.alerts.push({msg: msg, type: type});
        $timeout(clear, 2000);
    };

    return {
        add: add,
        addSuccess: function (msg) {
            add(msg, 'success')
        },
        addInfo: function (msg) {
            add(msg, 'info')
        },
        addWarning: function (msg) {
            add(msg, 'warning')
        },
        addDanger: function (msg) {
            add(msg, 'danger')
        },
        parse: function (obj) {
            if (obj.msg && obj.type)
                add(obj.msg, obj.type);
        },
        clear: clear
    };
}]);
