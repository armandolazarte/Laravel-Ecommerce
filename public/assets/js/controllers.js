'use strict';

/* Controllers */
angular.module('eCommerce.controllers', [])
    .controller('ProductsCtrl', ['$scope', 'ajax', 'alert', function ($scope, ajax, alert) {

        $scope.products = [];

        ajax.all('products').getList().then(function (products) {

            $scope.products.items = products;

        });

        $scope.remove = function (product) {

            // Remove product
            product.remove().then(function (data) {

                // Remove product from view
                $scope.products.items.splice($scope.products.items.indexOf(product), 1);

                // Alert user
                alert.parse(data);
            });
        };


        $scope.create = function () {

            ajax.all('products').post($scope.product).then(function (data) {

                if (!data.product) {

                    alert.addDanger('Error occurred');

                } else {

                    // Add product to collection
                    $scope.products.items.unshift(data.product);

                    // Alert user
                    alert.parse(data);
                }


            });

        };

        $scope.sortableOptions = {
            stop: function (e, ui) {
                var ids = [];
                angular.forEach($scope.products.items, function (value) {
                    ids.push(value.id);
                });

                ajax.all('products').customPUT(ids, 'sort').then(function (data) {
                    // Alert user
                    alert.parse(data);
                });
            }
        };
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