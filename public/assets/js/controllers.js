'use strict';

/* Controllers */
angular.module('eCommerce.controllers', [])
    .controller('ProductsCtrl', ['$scope', 'Restangular', function ($scope, Restangular) {
        $scope.products = Restangular.all('products').getList().$object;
    }])
    .controller('ProductsEditCtrl', ['$scope', '$routeParams', 'Restangular', function ($scope, $routeParams, Restangular) {
        var productId = $routeParams.productId;
        $scope.product = Restangular.one('products', productId).get().$object;
    }]);