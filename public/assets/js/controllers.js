'use strict';

/* Controllers */
angular.module('eCommerce.controllers', [])
    .controller('ProductsCtrl', ['$scope', 'ajax', function ($scope, ajax) {

        $scope.products = ajax.all('products').getList().$object;
    }])
    .controller('ProductsEditCtrl', ['$scope', '$routeParams', 'ajax', 'alert', function ($scope, $routeParams, ajax, alert) {
        // Get product
        var productId = $routeParams.productId;
        ajax.one('products', productId).get().then(function(product){
            $scope.product = product;
        });
        // Save
        $scope.save = function () {
            $scope.product.put().then(function(data) {
                alert.parse(data);
            });
        }

    }]);