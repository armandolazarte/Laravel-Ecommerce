'use strict';

/* Controllers */
angular.module('eCommerce.controllers', [])
    .controller('ProductsCtrl', ['$scope', 'ajax', 'alert', function ($scope, ajax, alert) {

        $scope.products = ajax.all('products').getList().$object;

        $scope.remove = function (product) {

            // Remove product
            product.remove().then(function (data) {

                // Remove product from view
                $scope.products.splice($scope.products.indexOf(product), 1);

                // Alert user
                alert.parse(data);
            });
        }
    }])
    .controller('ProductsEditCtrl', ['$scope', '$routeParams', 'ajax', 'alert', function ($scope, $routeParams, ajax, alert) {
        // Get product
        var productId = $routeParams.productId;
        ajax.one('products', productId).get().then(function (product) {
            $scope.product = product;
        });
        // Save
        $scope.save = function () {
            $scope.product.put().then(function (data) {
                alert.parse(data);
            });
        }

    }]);