'use strict';

/* Controllers */
angular.module('eCommerce.controllers', [])
    .controller('ProductsCtrl', ['$scope', 'Restangular', function ($scope, Restangular) {
        $scope.products = Restangular.all('products').getList().$object;
    }])
    .controller('ProductsEditCtrl', ['$scope', '$routeParams', 'Restangular', function ($scope, $routeParams, Restangular) {

        // Get product
        var productId = $routeParams.productId;
        Restangular.one('products', productId).get().then(function(product){
            $scope.product = product;
        });
        // Save
        $scope.save = function () {
            console.log($scope.product);

            $scope.product.put().then(function() {
                alert('updated');
            });
        }

    }]);